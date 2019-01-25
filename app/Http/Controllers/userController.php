<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    #index
    public function index(Request $request){
        $data = array(
            "email_address" => $request->email_address,
            "password"      => $request->password,
        );

        return $data;
    }
    
}
