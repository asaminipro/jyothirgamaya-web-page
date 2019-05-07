<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //main index page controller

    public function homepage()
    {
    	return view("welcome");
    }
}
