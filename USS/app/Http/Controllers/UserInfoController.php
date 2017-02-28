<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    //
    public function showAddNewUserView(){
        return view('user_add');
    }

    public function showUserInfoView(){
        return view('user_info');
    }
}
