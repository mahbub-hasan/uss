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
        $username = $request->input('username');
        $password = $request->input('password');
        if(!empty($username) && !empty($password)){
            // continue
        }else{
            // return to view with error message
            return Redirect::to('/')->withErrors($validation);
           // return view('login', ['error_info'=>'Please fill-up required fields.']);
        }
    }
}
