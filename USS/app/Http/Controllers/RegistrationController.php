<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/2/2017
 * Time: 2:08 PM
 */

namespace App\Http\Controllers;


use App\UserInfoModel;
use Illuminate\Http\Request;

class RegistrationController
{
    public function viewUserRegistrationPage(){
        return view('userregistration');
    }

    public function createNewUser(Request $request){
        $userinfo = new UserInfoModel();
        $userinfo->fullname = $request->input('fullname');
        $userinfo->username = $request->input('username');
        $userinfo->password = $request->input('password');
        $userinfo->mobileno = $request->input('mobileno');
        if($userinfo->save()){
            return response()->json([
                'status'=>true,
                'message'=>'New user created'
            ],200);
        }
    }

}