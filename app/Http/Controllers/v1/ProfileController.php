<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\v1\User;

class ProfileController extends Controller
{
    public function profileDetails(Request $request){

        try {
                
            $user_id = $request->user_id;

            $user =  auth('sanctum')->user();

            if(isset($user_id)){

                if ($request->user()->tokenCan('admin')) {

                    $user =  User::find($user_id);

                    if ($user->exists()) {
                        
                        return response()->json([
                            'success' => true,
                            'message' => 'User `'.$user->id.'` profile details',
                            'data' => $user->profile,
                        ], 200);
                    }else{
                    
                        return response()->json([
                            'success' => false,
                            'message' => 'Not Found.',
                            'error_code' => 404,
                            /*'data' => [$th->getMessage()] */
                        ], 404);   
                    }
                }else{
                    
                    return response()->json([
                        'success' => false,
                        'message' => 'Not Found.',
                        'error_code' => 404,
                        /*'data' => [$th->getMessage()] */
                    ], 404);
                }

            }else{

                return response()->json([
                    'success' => true,
                    'message' => 'User `'.$user->id.'` profile details',
                    'data' => $user->profile,
                ], 200);
            }

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Unexpected server error.',
                'error_code' => 7,
                /*'data' => [$th->getMessage()] */
            ], 500);
        }

    }

}
