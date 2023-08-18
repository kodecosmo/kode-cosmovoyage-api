<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

// Prompt components
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\info;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

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

        // Create the required the databse if not exists and the tables.
        $this->call('migrate:refresh');

        $confirmed = confirm(
            label: 'Do you want to feed fake/dummy data into the `'.config('app.name').'` API?',
            default: false,
        );

        if($confirmed==true){

            // Seeding fake/dummy data
            $this->call('db:seed');
        }
        
        info('Clear configurations.');

        // Clear the configurations
        $this->call('config:clear');
        
        info('Cache configurations.');

        // Caching configurations
        $this->call('config:cache');
        
        info('Cache events.');
        
        // Caching events
        $this->call('event:cache');
        
        info('Cache routes.');
        
        // Caching routes
        $this->call('route:cache');
        
        info('Cache views.');
        
        // Caching views
        $this->call('view:cache');
        
        info('Creating an admin account.');
        
        // Create an admin account
        $this->call('app:create-admin-account');
        
        info('Creating an user account.');

        // Create an user account
        $this->call('app:create-user-account');
    }
}
