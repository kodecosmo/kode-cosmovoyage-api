<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// Requests
use App\Http\Requests\v1\CreateUserRequest;
use App\Http\Requests\v1\LoginUserRequest;

// Models
use App\Models\v1\User;
use App\Models\v1\Profile;

class UserController extends Controller
{
    // Create a user

    public function createUser(CreateUserRequest $request)
    {
        try {
                
            $user = new User;

            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->type = User::$user_enum;

            $user->save();

            $profile = new Profile();
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->contact_number = $request->contact_number;
            $profile->email = $request->email;
            $profile->gender = $request->gender;

            $user->profile()->save($profile);

            $user = User::with('profile')->whereId($user->id)->first();

            return response()->json([
                'success' => true,
                'message' => 'User Created Successfully.',
                'data' => [
                    'token' => $user->createToken("API TOKEN", ['user'])->plainTextToken,
                    'user'=> $user,
                ],
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 1,
                /*'data' => [$th->getMessage()] */
            ], 500);
        }
    }
    
    // Login to user

    public function loginUser(LoginUserRequest $request){
        try {
                
            $user = User::with('profile')->where('username', $request->username)->first();

            return response()->json([
                'success' => true,
                'message' => 'User Logged In Successfully.',
                'data' => [
                    'token' => $user->createToken("API TOKEN", ['user'])->plainTextToken,
                    'user'=> $user,
                ],
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 2,
                /*'data' => [$th->getMessage()] */
            ], 500);
        }

    }
}
