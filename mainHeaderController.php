<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
use Cookie;




class mainHeaderController extends Controller
{
    //

    public function mainHeaderPage()
    {
    	return view('mainheader');
    }


    public function insertlogin(Request $request)
      {
      	$utype = $request->input('utype');
            $email = $request->input('emailid');
            $name = $request->input('name');
            $dob= $request->input('dob');
            $country = $request->input('country');
            $uidtype = $request->input('uidtype');
            $unique_identification = $request->input('unique_identification');
              $uploadedFile = $request->file('resume');



      	$data=array('usertype'=>$utype,"email"=>$email,"password"=>$name);
            DB::table('login')->insert($data);
            
            $users = DB::table('login')->select('id')->where('id',\DB::raw("(select max(`id`) from login)"))->value('id');;


           $datan=array('name'=>$name,"dob"=>$dob,"uid_type"=>$uidtype,"uid_no"=>$unique_identification,"lid"=>$users);
            DB::table('personal_details')->insert($datan);

            //file upload
            //---------------------------------------------------------------------------//
            $destinationPath = 'upload/';
           $fileName=$uploadedFile->getClientOriginalName();
           $newfilename= $destinationPath.$fileName;
                  if ($uploadedFile->isValid()) 
                   {
                    $uploadedFile->move($destinationPath, $fileName);


                      $datam=array('filename'=>$newfilename,"lid"=>$users);
                     DB::table('resume')->insert($datam);
                    }


            echo "<script>Record inserted successfully.<br/></script>";

            return redirect()->action('home@homepage');

      }



            public function userlogin(Request $request)
      {
            $username = $request->input('username');
            $password = $request->input('password');
            
              
            $log = DB::table('login')->where(['email'=> $username,'password'=> $password,'userstatus'=>'1'])->get();
            if($log=="[]")
            {
              return redirect('/loginerror');
              
               
            }
            else
            {
                
                 foreach($log as $logindetails)
                 $id=$logindetails->id;

               
                $usertype=$logindetails->usertype;
                $loginstatus=$logindetails->loginstatus;

               
     
      
     

      
  
                
                
                if($usertype=='10')
                {
                  session()->put('userloginid',$id);

                  return redirect('/admin_home');
                }
              elseif($usertype=='20')
              {
                session()->put('userloginid',$id);
                  return redirect('/member_home');
              }
               elseif($usertype=='30')
              {
                session()->put('userloginid',$id);
                  return redirect('/volunteer_home');
              }
              else
              {

              }
            }
            

           


      }

public function logerror(){

  echo "<script>alert('INVALID USERNAME AND PASSWORD');
  window.location.href='/welcome';
  </script>";



}






}
