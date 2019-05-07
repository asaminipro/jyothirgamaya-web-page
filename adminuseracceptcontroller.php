<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminuseracceptcontroller extends Controller
{
    //


     public function userapproval()
    {
        
       DB::table('login')
            ->where('id', $sessiondata)
            ->update(['review' => $wname]);
       //   return redirect()->action('adminApproveVolunteerController@adminapprovevolunteer');

    }
}
