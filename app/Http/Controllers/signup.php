<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\DateTimezone;

class signup extends Controller
{
    function signup(request $request)
    {
        $request->validate([
          
            'email'=>'required',
            'password'=>'required|min:8',
             'Username'=>'required'
             
          ]);
        
         $email=$request->post('email');
         $username=$request->post('Username');
         $password=$request->post('password');
            
             
          if((DB::table('users')->where('email', $email )->doesntExist())&&(DB::table('users')->where('username', $username )->doesntExist())) {

            
           $password=password_hash($password,PASSWORD_DEFAULT);

                 DB::table("users")->insert(
                     ['email'=>$email,
                     "password"=>$password,
                     "username"=>$username]
                 );           



                  return redirect("/login")->with('success','HERMES');
             }

           else
           {
               
               return redirect("/signup")->with('failure','HERMES');
           }


           }

}
