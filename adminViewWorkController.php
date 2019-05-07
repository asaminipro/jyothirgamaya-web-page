<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminViewWorkController extends Controller
{
    //

    public function adminviewwork()
    {
    

           $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	


    

    	$viewdata=DB::table('work')->get();
    	return view('admin_view_work')->with('viewdata',$viewdata)->with('sessiondata',$sessiondata)->with('uname',$uname);
    }
}
