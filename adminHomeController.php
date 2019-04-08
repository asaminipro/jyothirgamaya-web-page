<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminHomeController extends Controller
{
   
    public function adminhomepage()
    {
    	return view('admin_home');
    }
}
