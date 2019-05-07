<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class adminViewVolunteerController extends Controller
{
    //

    public function adminViewVolunteer()
    {
    	// return view('admin_view_volunteer');

    	$sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();

       $newuser=DB::table('login')->join('personal_details', 'personal_details.lid', '=', 'login.id')->where(['userstatus'=> '1','usertype'=> '30'])->get();
       
    	return view('admin_view_volunteer')->with('sessiondata',$sessiondata)->with('uname',$uname)->with('newuser',$newuser);
    }
}
