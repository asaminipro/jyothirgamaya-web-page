<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminHomeController extends Controller
{
   
    public function adminhomepage()
    {
    	
    	$sessiondata=session()->get('userloginid');
    	print_r($sessiondata);

        $data=DB::table('personal_details')->where(['lid'=>$sessiondata])->value('name');
       print_r($data);

    	// //return view('admin_header')
    	 return view('admin_home')->with('data',$data);
    }

   



}
