<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminCreateGroupController extends Controller
{
    //

    public function adminaddgroup()
    {
    	return view('admin_create_group');
    }
}
