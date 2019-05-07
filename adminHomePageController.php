<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class adminHomePageController extends Controller
{
    //

    public function adminHomePage()
    {
    	 //$viewdata=DB::table('contactmigrations')->get();

    	 $sessiondata=session()->get('userloginid');
       $uname=DB::table('personal_details')->where(['lid'=>$sessiondata])->get();
        $dialoguedata=DB::table('dialogue')->join('personal_details', 'personal_details.lid', '=', 'dialogue.lid')->get();
        // print_r($dialoguedata);

    	 return view('admin_home')->with('sessiondata',$sessiondata)->with('uname',$uname)->with('dialoguedata',$dialoguedata);
    }


      public function adminnewsfeed(Request $request)
    {
        
        $wname = $request->input('des');
         $sessiondata=session()->get('userloginid');

       $data=array('description'=>$wname,'lid'=>$sessiondata);
            DB::table('dialogue')->insert($data);


        // //return view('admin_header')
         return redirect()->action('adminHomePageController@adminHomePage');

    }



    //   public function dialogeAdminHomePage()
    // {
    //    //$viewdata=DB::table('contactmigrations')->get();

    //    $sessiondata=session()->get('userloginid');
    //    $dialoguedata=DB::table('personal_details')->get();
    //     //print_r($data);
    //   return view('admin_home')->with('sessiondata',$sessiondata)->with('dialoguedata',$dialoguedata);
    // }
}
