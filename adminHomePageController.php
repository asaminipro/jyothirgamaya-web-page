<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminHomePageController extends Controller
{
    //

    public function adminHomePage()
    {
    	return view('admin_home');
    }
}
