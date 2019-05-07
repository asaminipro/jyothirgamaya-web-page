<?php

namespace App\Http\Controllers;
 use DB;

use Illuminate\Http\Request;

class adminCreateGroupController extends Controller
{
    //

    public function adminaddgroup()
    {
    	// return view('admin_create_group');



            $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	return view('admin_create_group')->with('sessiondata',$sessiondata)->with('uname',$uname);


   
    }
}
