<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminViewMembersController extends Controller
{
    //
    public function adminviewmember()
    {
    	//return view('admin_view_members');
    	$sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
        $newuser=DB::table('login')->join('personal_details', 'personal_details.lid', '=', 'login.id')->where(['userstatus'=> '1'])->where('usertype', '<>', 30)->where('lid','<>',$sessiondata)->get();
       
    	return view('admin_view_members')->with('sessiondata',$sessiondata)->with('uname',$uname)->with('newuser',$newuser);
    }
}
