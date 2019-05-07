<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminHeaderController extends Controller
{
    //

    public function adminHeaderPage()

    {
    // 	 $ses->Session::get('cuser');

    // 	 echo $ses;
    // 	 $viewdata = DB::table('personal_details')->where('lid', $ses)->value('name');
    // return view('admin_header')->with('viewdata',$viewdata);


      //  $sessiondata=session()->get('userloginid');
       // echo $sessiondata;
        // $data=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
        // print_r($data);

    	//return view('admin_header')->with('uname',$data);
    }

    public function getusername()
    {

    	
      


       // return view('admin_header')->with('viewdata',$viewdata);
    }
}
