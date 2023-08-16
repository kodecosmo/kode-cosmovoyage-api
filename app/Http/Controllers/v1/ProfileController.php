<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileDetails(Request $request){

        $acc_type = $request->type;
        $user_id = $request->user_id;
    }
}
