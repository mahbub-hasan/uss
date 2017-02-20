<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function doCalculation(Request $request){
        dd($request->input('algorithm'));
    }
}
