<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class profile extends Controller
{
    function profile()
    {
 
  
     
             
            $login=session('login');
            $username=decrypt(session('username'));
            $email=decrypt(session('email'));
            $id=DB::table('users')->where("email",$email)->value("id");  
            $id=((10+$id)*69)+1635;
      
   return view("profile",["EMAIL"=>$email,"LOGIN"=>$login,"USERNAME"=>$username,"ID"=>$id]);
 
 
 
 
    }
}
