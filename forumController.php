<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forumController extends Controller
{
    //
    public function forumpage()
    {
    	return view('forum');
    }
}
