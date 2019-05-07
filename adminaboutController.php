<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class adminaboutController extends Controller
{
    //

    public function adminabout()
    {
    	$sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	return view('about_admin')->with('sessiondata',$sessiondata)->with('uname',$uname);
    }
}
