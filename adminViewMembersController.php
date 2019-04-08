<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminViewMembersController extends Controller
{
    //
    public function adminviewmember()
    {
    	return view('admin_view_members');
    }
}
