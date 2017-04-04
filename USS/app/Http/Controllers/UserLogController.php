<?php

namespace App\Http\Controllers;

use App\UserLogModel;
use Illuminate\Http\Request;

class UserLogController extends Controller
{
    // for ws
    public function getAllUserLog(){
        $userlog = new UserLogModel();
        $alluserlog = $userlog->get();
        return response()->json($alluserlog,200);
    }

    // save data into database
    public function saveUserLog(Request $request){
        // create instance of UserLogModel
        $userlog = new UserLogModel();
        $userlog->platform = $request->input('platform');
        $userlog->ip = $request->input('ip');
        $userlog->hostname = $request->input('hostname');
        $userlog->latitude = $request->input('latitude');
        $userlog->longitude = $request->input('longitude');

        if($userlog->save()){
            return response()->json(['status'=>true],200);
        }
    }
}
