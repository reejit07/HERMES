<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class changepassword extends Controller
{

       



    function changepassword()
   {

      $username=decrypt(session('username'));
       $email=decrypt(session('email'));


       return view("changepassword",["email"=>$email,"username"=>$username]);
   }

  function change(Request $request)
  {
   $request->validate([
          
     
      'currentpassword'=>'required',
      'newpassword'=>'required|min:8'
    ]);
   

     $email=decrypt(session('email'));
     $hashedpassword=DB::table('users')->where(['email'=> $email])->value('password'); 


     $currentpassword=$request->post('currentpassword');
      $newpassword=$request->post('newpassword');
                      
      

      if(password_verify($currentpassword,$hashedpassword))
         {

           
            $newpassword=password_hash($newpassword,PASSWORD_DEFAULT);

             DB::table('users')->where('email', $email)->limit(1)->update(['password' => $newpassword ]);


           return redirect("/changepassword")->with('success',"Password changed successfully!!");

         }
        else
           {



            return redirect("/changepassword")->with('failure'," Invalid current password !!");
         
           }
        







  }
}
