<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function doLogin(Request $request){
        // check validation
        $validation = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required|min:8'
        ]);
        if(!$validation->fails()){
            $username = $request->input('username');
            $password = $request->input('password');
            // check with database

            // return after successfully login
            return Redirect::to('/userinfo_view');
        }else{
            return Redirect::to('/')->withErrors($validation);
        }
    }
}
