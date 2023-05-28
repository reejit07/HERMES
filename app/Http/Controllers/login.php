<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\DateTimezone;

class login extends Controller
{
    function login(request $request)
    {
              
      $request->validate([
          
        'email'=>'required',
        'password'=>'required'

      ]);
    

     $email=$request->post('email');
     $password=$request->post('password');
        
     $hashedpassword=DB::table('users')->where(['email'=> $email])->value('password');
       

        
    if(password_verify($password,$hashedpassword)) {
            

             $date = new \DateTime(null, new \DateTimezone("Asia/Kolkata"));
             $date= $date->format("Y/m/d");
             $login=1;

          if(DB::table("activitys")->where('email', $email )->doesntExist())
          {
             DB::table("activitys")->insert(
               [
                     'lastactivedate'=>$date,
                     'login'=>1,
                     'email'=>$email
               ]

                   );
              
          }
         else
         {

                $login=DB::table('activitys')->where('email',$email)->value('login');
               $login=$login+1;
               DB::table('activitys')->where('email', $email)->limit(1)->update(['login' => $login,
                 'lastactivedate'=>$date

             ]);

         }
  
          $username=DB::table('users')->where('email',$email)->value('username');

                 $username=encrypt($username);     
                 $email=encrypt($email); 
                 

                   session()->put("username",$username);
                   session()->put("email",$email);
                   session()->put("login",$login);
                   

                     return redirect("/dashboard");
         }

        else
             return redirect("/login")->with('wrong','Incorrect email or password');

          


    }
}
