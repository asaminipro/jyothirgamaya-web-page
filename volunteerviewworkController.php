<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class volunteerviewworkController extends Controller
{
    //

    public function volunteerwork()
    {
    	$sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       
    	

    	$viewdata=DB::table('work')->get();
    	return view('volunteer_view_work')->with('viewdata',$viewdata)->with('sessiondata',$sessiondata)->with('uname',$uname);

    }
}
