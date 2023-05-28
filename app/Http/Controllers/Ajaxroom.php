<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\DateTimezone;
class Ajaxroom extends Controller
{
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



     function msg(request $request )
     {

         

         $msg=$request->post('text');
         $key=$request->post('KEY');
         $room=$request->post('room');
         $user=decrypt(session('username'));
         
         
         $msg=$this->encryptlevel1($msg,$key);

            $date = new \DateTime(null, new \DateTimezone("Asia/Kolkata"));
                       $date= $date->format("h:i:s");
               

          

             DB::table("rooms")->insert(
                  	['msg'=>$msg,
                  	"room"=>$room,
                  	"user"=>$user,
                    "time"=>$date]
                  );         


     }
      function msg1(request $request)
     {

     
         $room=$request->post('room');
         $key=$request->post('KEY');
         $username=$request->post('username');
         
          $col= array("#90ADE3","#b07b96","#dcc7aa", "#f4decb","#F1C4C5","#ff4c4c","#da8c62","#ed4e89","#a7bc5b");
          $i=0;
          $color=array();
          $user=DB::table('rooms')->where('room',$room)->distinct()->pluck("msg","user");

          foreach ( $user as $index=>$user)
          {
              if($user!=$username)
              {
               $color[$i]=$user;
                  $i=$i+1;
              }
               
          }
        
    $data="";
     $haha=DB::table('rooms')->where('room',$room)->get();  
     $roll=0;
     $spacefactor=0;
    $info=array();


    foreach ($haha as $ind => $users) {
     
               $msg=$users->msg;
                $user=$users->user;
                  $time=$users->time;   
           

    $msg=$this->decryptlevel1($msg,$key);
               
               $index=array_search("$user", $color);
              $used=$col[$index];
           
            
              if($user!=$username)
              {
                
         $data = $data."<div class='container' style='background-color:".$used."; color:white; align:right; width:60%; 
         border-radius:5px;   box-shadow: 0 1px 5px rgba(0,0,0,0.2);'>";
         $data=$data.'<img id="main" src ="\pic/reply.png" align="right" style=" height:25px; width:25px; display:inline; position:relative; top:0px; right:0px; z-index:100;">';
         $data = $data." <p style='background-color:".$used."; color:white; font-weight:bold ; font-size:100% ;'>@".$user.":<br>";
            $data = $data."<span class='messagebody'>".$msg."</span>";
             $data = $data."<br></p><span class='time-right'><strong><em>".$time."</em></strong></span></div><br>";
           
              }
              else{

         $data = $data."<div class='container' style='background-color:#9cd7d4; color:white; position:relative; left:38%;  width:60%;
         border-radius:5px;   box-shadow: 0 1px 5px rgba(0,0,0,0.2);'>";
         $data=$data.'<img id="main" src ="\pic/reply.png" align="right" style=" height:25px; width:25px; display:inline; position:relative; top:0px; right:0px; z-index:100;">';
          $data = $data." <p style='background-color:#9cd7d4; color:white; font-weight:bold ; font-size:100% ;'>@".$user.":<br>";
          $data = $data."<span class='messagebody'>".$msg."</span>";
            $data = $data."<br></p><span class='time-right'><strong><em>".$time."</em></strong></span></div><br>";

              }


          $roll=$roll+1;
        
        $info[$spacefactor]=$data;
        $data="";
        $spacefactor=$spacefactor+1;
    }
        
       if(session::get("roll"))
       {
           $diff=$roll-session("roll");
       }
       else
       	$diff=1;

        session()->put("roll",$roll);
        $members=$i;
      
        	return response()->json(["data"=>$info,"diff"=>$diff,"members"=>$members]);

     }


}
