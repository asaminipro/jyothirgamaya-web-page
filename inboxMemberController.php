<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use DB;

class inboxMemberController extends Controller
{
    //

    public function inboxmember()
    {



            $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	return view('inbox_member')->with('sessiondata',$sessiondata)->with('uname',$uname);
    	//return view('inbox_member');
    }
}
