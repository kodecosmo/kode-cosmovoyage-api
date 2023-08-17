<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

// Requests
use App\Http\Requests\v1\CreateAdminRequest;
use App\Http\Requests\v1\LoginAdminRequest;

// Models
use App\Models\v1\User;
use App\Models\v1\Profile;

class AdminController extends Controller
{
    /*
    * Create a admin. 
    * Only can be done by accessing the terminal using the ssh or by using a existing admin account.
    */

    public function createAdmin(CreateAdminRequest $request)
    {
        try {
                
            if($request->user()->tokenCan('admin')){

                $admin = new User;

                $admin->username = $request->username;
                $admin->password = Hash::make($request->password);
                $admin->type = User::$admin_enum;

                $admin->save();

                $profile = new Profile();
                $profile->first_name = $request->first_name;
                $profile->last_name = $request->last_name;
                $profile->contact_number = $request->contact_number;
                $profile->email = $request->email;
                $profile->gender = $request->gender;

                $admin->profile()->save($profile);

                return response()->json([
                    'success' => true,
                    'message' => 'Admin Created Successfully.',
                    'data' => [
                        'token' => $admin->createToken("API TOKEN", ['admin'])->plainTextToken,
                        'admin'=> [
                            'id' => $admin->id,
                            'username' => $admin->username,
                            'type' => $admin->type,
                            'profile_id' => $admin->profile->id,
                            'first_name' => $admin->profile->first_name,
                            'last_name' => $admin->profile->last_name,
                            'email' => $admin->profile->email,
                            'contact_number' => $admin->profile->contact_number,
                            'gender' => $admin->profile->gender,
                            'updated_at' => $admin->updated_at,
                            'created_at' => $admin->created_at,
                        ],
                    ],
                ], 200);

            }else{

                return response()->json([
                    'success' => false,
                    'message' => 'Unautherized access.',
                    'error_code' => 3,
                    /*'data' => [$th->getMessage()] */
                ], 401);
            }
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 4,
                /*'data' => [$th->getMessage()] */
            ], 500);
        }
    }
    
    // Login to admin

    public function loginAdmin(LoginAdminRequest $request){
        try {
                
            $admin = User::where('username', $request->username)->first();

            return response()->json([
                'success' => true,
                'message' => 'Admin Logged In Successfully.',
                'data' => [
                    'token' => $admin->createToken("API TOKEN", ['admin'])->plainTextToken,
                    'admin'=> [
                        'id' => $admin->id,
                        'username' => $admin->username,
                        'type' => $admin->type,
                        'profile_id' => $admin->profile->id,
                        'first_name' => $admin->profile->first_name,
                        'last_name' => $admin->profile->last_name,
                        'email' => $admin->profile->email,
                        'contact_number' => $admin->profile->contact_number,
                        'gender' => $admin->profile->gender,
                        'updated_at' => $admin->updated_at,
                        'created_at' => $admin->created_at,
                    ],
                ],
            ], 200);
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 5,
                /*'data' => [$th->geMessage()] */
            ], 500);
        }

    }
}
