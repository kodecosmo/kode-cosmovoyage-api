<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

// Requests
use App\Http\Requests\v1\CreateAdminRequest;
use App\Http\Requests\v1\LoginAdminRequest;

// Models
use App\Models\v1\Account;

class AdminController extends Controller
{
    // Create a admin

    public function createAdmin(CreateAdminRequest $request)
    {
        try {
                
            $admin = new Account;

            $admin->username = $request->username;
            $admin->password = Hash::make($request->password);

            $admin->save();

            return response()->json([
                'success' => true,
                'message' => 'Admin Created Successfully.',
                'data' => [
                    'token' => $admin->createToken("API TOKEN")->plainTextToken,
                    'admin'=> $admin,
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
    
    // Login to admin

    public function loginAdmin(LoginAdminRequest $request){
        try {
                
            $admin = Account::where('username', $request->username)->first();

            return response()->json([
                'success' => true,
                'message' => 'Admin Logged In Successfully.',
                'data' => [
                    'token' => $admin->createToken("API TOKEN")->plainTextToken,
                    'admin'=> $admin,
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
