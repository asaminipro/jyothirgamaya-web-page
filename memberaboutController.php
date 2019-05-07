<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class memberaboutController extends Controller
{
    //

    public function memberabout()
    {


            $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	return view('about_member')->with('sessiondata',$sessiondata)->with('uname',$uname);
    	//return view('about_member');
    }
}

