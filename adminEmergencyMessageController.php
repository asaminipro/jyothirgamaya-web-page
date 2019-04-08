<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminEmergencyMessageController extends Controller
{
    //
    public function adminemergencymessage()
    {
    	return view('admin_emergency_message');
    }
}
