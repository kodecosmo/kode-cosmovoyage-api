<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

// Requests
use App\Http\Requests\v1\CreateUserRequest;
use App\Http\Requests\v1\LoginUserRequest;

// Models
use App\Models\v1\Account;

class UserController extends Controller
{
    // Create a user

    public function createUser(CreateUserRequest $request)
    {
        try {
                
            $account = new Account;

            $account->username = $request->username;
            $account->password = Hash::make($request->password);

            $account->save();

            return response()->json([
                'success' => true,
                'message' => 'User Created Successfully.',
                'data' => [
                    'token' => $account->createToken("API TOKEN")->plainTextToken,
                    'user'=> $account,
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
                
            $account = Account::where('username', $request->username)->first();

            return response()->json([
                'success' => true,
                'message' => 'User Logged In Successfully.',
                'data' => [
                    'token' => $account->createToken("API TOKEN")->plainTextToken,
                    'user'=> $account,
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
