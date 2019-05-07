<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    	      use DB;

class adminEmergencyMessageController extends Controller
{
    //
    public function adminemergencymessage()
    {
    	// return view('admin_emergency_message');


            $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	return view('admin_emergency_message')->with('sessiondata',$sessiondata)->with('uname',$uname);


}
}
