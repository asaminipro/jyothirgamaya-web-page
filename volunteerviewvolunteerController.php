<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class volunteerviewvolunteerController extends Controller
{
    //

    public function volunteerviewvolunteer()
    {
    	$sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
        $newuser=DB::table('login')->join('personal_details', 'personal_details.lid', '=', 'login.id')->where(['userstatus'=> '1','usertype'=> '30'])->get();
       
    	return view('volunteer_view_members')->with('sessiondata',$sessiondata)->with('uname',$uname)->with('newuser',$newuser);
    	//return view('volunteer_view_volunteer');
    }
}
