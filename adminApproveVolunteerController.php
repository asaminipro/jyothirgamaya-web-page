<?php

namespace App\Http\Controllers;
 use DB;

use Illuminate\Http\Request;

class adminApproveVolunteerController extends Controller
{
    //

    public function adminapprovevolunteer()
    {


    	     

            $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
       $newuser=DB::table('login')->join('personal_details', 'personal_details.lid', '=', 'login.id')->where(['userstatus'=> '0','usertype'=>'30'])->get();


       //$filedetails=DB::table('resume')
       //      ->where('lid', $sessiondata)->get();
            

      //print_r($newuser);
       
    	return view('admin_approve_volunteer')->with('sessiondata',$sessiondata)->with('uname',$uname)->with('newuser',$newuser);


    
    	//return view('admin_approve_volunteer');
    }

     public function userreview(Request $request)
    {
        
        $wname = $request->input('des');
         $sessiondata=session()->get('userloginid');

       $data=array('description'=>$wname,'lid'=>$sessiondata);
          

            DB::table('personal_details')
            ->where('lid', $sessiondata)
            ->update(['review' => $wname]);


        // //return view('admin_header')
         return redirect()->action('adminApproveVolunteerController@adminapprovevolunteer');

    }

}
