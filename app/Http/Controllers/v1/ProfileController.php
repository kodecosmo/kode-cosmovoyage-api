<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\v1\User;

class ProfileController extends Controller
{
    public function profileDetails(Request $request){

        $user_id = $request->user_id;

        $user =  auth('sanctum')->user();

        if(isset($user_id)){

            if ($request->user()->tokenCan('admin')) {

                $user =  User::find($user_id);

                if ($user->exists()) {
                    
                    return response()->json([
                        'success' => true,
                        'message' => 'User `'.$user->id.'` profile details',
                        'data' => [
                            'id' => $user->profile->id,
                            'first_name' => $user->profile->first_name,
                            'last_name' => $user->profile->last_name,
                            'email' => $user->profile->email,
                            'contact_number' => $user->profile->contact_number,
                            'gender' => $user->profile->gender,
                            'user_id' => $user->id,
                        ],
                    ], 200);
                }else{
                 
                    abort(404);   
                }
            }else{
                
                abort(404);
                /*
                 return response()->json([
                    'success' => false,
                    'message' => 'Request not found.',
                    'error_code' => 6, */
                    /*'data' => [$th->getMessage()] */ /*
                ], 404); 
                */
            }

        }else{

            return response()->json([
                'success' => true,
                'message' => 'User `'.$user->id.'` profile details',
                'data' => [
                    'id' => $user->profile->id,
                    'first_name' => $user->profile->first_name,
                    'last_name' => $user->profile->last_name,
                    'email' => $user->profile->email,
                    'contact_number' => $user->profile->contact_number,
                    'gender' => $user->profile->gender,
                    'user_id' => $user->id,
                ],
            ], 200);
        }
        
    }

}
