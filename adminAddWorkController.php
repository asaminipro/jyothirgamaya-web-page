<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminAddWorkController extends Controller
{
    //

    public function adminaddwork()
    {
    	return view('admin_add_work');
    }



    public function insert(Request $request)
      {
      	$wname = $request->input('w_name');
            $locationss = $request->input('loc');
            $noofworkkdays = $request->input('nod');
            $noofmember= $request->input('nom');
            $noofv = $request->input('nov');
            $description = $request->input('des');
               
           
          


      	$data=array('name'=>$wname,"location"=>$locationss,"days"=>$noofworkkdays,"mcount"=>$noofmember,"vcount"=>$noofv,"des"=>$description);
            DB::table('work')->insert($data);
            


          


            echo "Record inserted successfully.<br/>";

            return redirect()->action('adminAddWorkController@adminaddwork');

}
}