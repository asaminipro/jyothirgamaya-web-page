<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class logoutController extends Controller
{
    //

    public function logoutUser()
    {


    		//session_unset();
    		 Session::forget('key');
    	return view('welcome');
    }
}
