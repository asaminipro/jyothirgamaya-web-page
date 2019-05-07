<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class inboxAdminController extends Controller
{
    //

    public function inboxadmin()
    {
    	// return view('inbox_admin');


            $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	return view('inbox_admin')->with('sessiondata',$sessiondata)->with('uname',$uname);
    }
}
