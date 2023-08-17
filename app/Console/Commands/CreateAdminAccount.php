<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

// Prompt components
use function Laravel\Prompts\info;
use function Laravel\Prompts\error;
use function Laravel\Prompts\text;
use function Laravel\Prompts\select;
use function Laravel\Prompts\suggest;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\password;

// Models
use App\Models\v1\User;
use App\Models\v1\Profile;

class CreateAdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin-account';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $username = text(
            label: 'What is the admin username?',
            placeholder: 'E.g. kenura-gunarathna',
            required: true
        );

        $password = password(
            label: 'What is the admin password?',
            validate: fn (string $value) => match (true) {
                strlen($value) < 8 => 'The password must be at least 8 characters.',
                default => null
            },
            required: true
        );

        $first_name = suggest(
            label: 'What is your first name?',
            placeholder: 'E.g. Kenura',
            options: ['Kenura', 'Kaviru'],
            required: true
        );

        $last_name = suggest(
            label: 'What is your last name?',
            placeholder: 'E.g. Gunarathna',
            options: ['Gunarathna', 'Hapuarachchi'],
            required: true
        );

        $contact_number = suggest(
            label: 'What is your contact number?',
            placeholder: 'E.g. 94777190590',
            hint: 'We will never share your contact number with anyone.',
            options: ['94777190590', '94717779334'],
            required: true
        );

        $email = suggest(
            label: 'What is your email?',
            placeholder: 'E.g. kenuragunarathna@gmail.com',
            hint: 'We will never share your email address with anyone.',
            options: ['kenuragunarathna@gmail.com', 'hapuarachchikaviru@gmail.com'],
            required: true
        );

        $gender = select(
            label: 'What is your gender?',
            options: [
                'male' => 'Male',
                'female' => 'Female',
                'other' => 'Other',
                'rather_not_say' => 'Rather not say'
            ],
            default: 'male',
        );

        $confirmed = confirm(
            label: 'Do you want to create the admin account `'.$username.'`?',
            default: false,
        );

        if($confirmed==true){

            if (User::where('username', $username)->doesntExist()) {

                $admin = new User;

                $admin->username = $username;
                $admin->password = Hash::make($password);
                $admin->type = User::$admin_enum;

                $admin->save();

                $profile = new Profile();
                $profile->first_name = $first_name;
                $profile->last_name = $last_name;
                $profile->contact_number = $contact_number;
                $profile->email = $email;
                $profile->gender = $gender;

                $admin->profile()->save($profile);

                return info('Admin account `'.$username.'` created successfully.');
            }else{

                return error('Admin account `'.$username.'` already exists.');
            }
        }else{

            return info('Admin account `'.$username.'` creation aborted.');
        }
    }
}
