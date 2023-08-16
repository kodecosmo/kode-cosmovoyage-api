<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Requests
use App\Http\Requests\v1\CreateUserRequest;
use App\Http\Requests\v1\LoginUserRequest;

// Models
use App\Models\v1\User;

class UserController extends Controller
{
    // Create a user

    public function createUser(CreateUserRequest $request)
    {
        try {
                
            $user = new User;

            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->contact_number = $request->contact_number;

            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'User Created Successfully.',
                'data' => [
                    'token' => $user->createToken("API TOKEN")->plainTextToken,
                    'user'=> $user,
                ],
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 001,
                'data' => [],
            ], 500);
        }
    }
    
    // Login to user

    public function loginUser(LoginUserRequest $request){
        try {
                
            $user = User::where('username', $request->username)->first();

            return response()->json([
                'success' => true,
                'message' => 'User Logged In Successfully.',
                'data' => [
                    'token' => $user->createToken("API TOKEN")->plainTextToken,
                    'user'=> $user,
                ],
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 001,
                'data' => [],
            ], 500);
        }

    }
}
