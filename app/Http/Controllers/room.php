<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\DateTimezone;
class room extends Controller
{
   function entryMessage($msg,$room,$user)
   {

    $date = new \DateTime(null, new \DateTimezone("Asia/Kolkata"));
    $date= $date->format("h:i:s");




    DB::table("rooms")->insert( 
 ['msg'=>$msg,
 "room"=>$room,
 "user"=>$user,
 "time"=>$date]
    );   

   }



  function encryptlevel1($msg,$key)
  {
   $ciphering = "AES-128-CTR";
   $iv_length = openssl_cipher_iv_length($ciphering);
   $options = 0;
   $encryption_iv = '1234567891011121';
    $encryption_key =$key;
   $msg= openssl_encrypt($msg, $ciphering,
     $encryption_key, $options, $encryption_iv);

           return $msg;

  }


  function decryptlevel1($msg,$key)
  {
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;
    $decryption_iv = '1234567891011121';
    $decryption_key =$key;
    $msg=openssl_decrypt ($msg, $ciphering,
  $decryption_key, $options, $decryption_iv);

           return $msg;

  } 








   function roomstart()
   {

    $USERNAME=decrypt(session('username'));

    return view('roomstart',["username"=>$USERNAME]);

   }



    function entryrequest(request $request)
    {

      $request->validate([
          
        'roomname'=>'required',
        'key'=>'required|min:5'
        
      ]);
    

      
    	$username=decrypt(session('username'));
      $roomname=$request->post('roomname');
      $key=$request->post('key');
     
        $present=0;
         $pre=DB::table('rooms')->where('room',$roomname)->get('user');
          foreach ($pre as $index => $user) {

                if($user==$username)
                  $present=1;



          }
        $usernumber=DB::table('rooms')->where('room',$roomname)->distinct()->count('user');

        if($usernumber>=10&&$present=0)
        {
                
             return redirect("/chatroom")->with("wrong","Room is already taken ! Try creating new room");
        }
        
         if($usernumber==0)
         {
          session()->put("room",$roomname);
          session()->put("key",$key);

          $message1="$username joined the room";
          $message1=$this->encryptlevel1($message1,$key);
          $this->entryMessage($message1,$roomname,$username);
          
          return redirect("/room");

         }         
         
         $captain=DB::table('rooms')->where('room',$roomname)->pluck('user');
            $captain=$captain[0];
          $message=$captain." joined the room";
    
         $speech=DB::table('rooms')->where('room',$roomname)->pluck('msg');
         $speech=$speech[0];
         
           $message=$this->encryptlevel1($message,$key);

         if($message!=$speech)
         {
               
             return redirect("/chatroom")->with("wrong","Failed to decrypt message ! Check your key");
         }

        
         session()->put("room",$roomname);
      session()->put("key",$key);
        
         $message1="$username joined the room";
         $message1=$this->encryptlevel1($message1,$key);
      $this->entryMessage($message1,$roomname,$username);

         return redirect("/room");
      
    }


     function roomentry()
     {

      $roomname=session('room');
      $key=session('key');
      $username=decrypt(session('username'));
         
      return view("room",["room"=>$roomname,"Username"=>$username,"key"=>$key]);

     }




  function delete()
  { 
    $user=decrypt(session('username'));
    $room=session('room');
     DB::table('rooms')->where(['room'=>$room,'user'=>$user])->delete();
       session()->forget("room");
       session()->forget("roll");
       session()->forget("key");
     return redirect("/chatroom");




  }


 function logout()
 {

     session()->forget("room");
     session()->forget("key");
     session()->forget("roll");
      return redirect("/chatroom");

 }






}
