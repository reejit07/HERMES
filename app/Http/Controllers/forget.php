<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DateTime;
use App\Http\Controllers\DateTimezone;
use Cookie;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class forget extends Controller
{
    function generateRandomString($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}    



    function sendemail($title,$body,$email)
   {
	
    //Load Composer's autoloader
require 'PHPMailerAutoload.php';

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(true); 
	//$mail->SMTPDebug  = 4;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = env('MAIL_ENCRYPTION'); 
	$mail->Host = env('MAIL_HOST');
	$mail->Port = env('MAIL_PORT'); 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = env('MAIL_USERNAME');
	$mail->Password = env('MAIL_PASSWORD');
	$mail->SetFrom($to);
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}
	else{
		return ;
	}
}
   echo smtp_mailer($email,$title,$body);


   }



 function password(request $request)
    {

		$request->validate([
          
			'email'=>'required',
			
		  ]);

         $otp=rand(10000,99999);
		$hashedotp=password_hash($otp,PASSWORD_DEFAULT);
          Cookie::queue('otp',$hashedotp,5);
       
         $email=$request->post("email");
         session()->put("xmail",$email);
         
         if(DB::table('users')->where('email',$email)->exists())
           {

                  

$html="<h3>Your <strong>OTP</strong> to change password is <h2>".$otp."</h2></h3>";


$this->sendemail('OTP VERIFICATION',$html,$email);


            return view("newpass",["id"=>2]);

           }
           else
           	return redirect("/forget")->with("wrong"," Invalid email address");


    }




    function new(request $request)
    {

		$request->validate([
          
			'otp'=>'required',
			
	
		  ]);


          $userotp=$request->post('otp');
      
            $email=session()->get('xmail');
			
          if(cookie::has("otp"))
          {

                 $otp=Cookie::get('otp');


		 if(password_verify($userotp,$otp))
            {
            	$new=$this->generateRandomString(8);
              $html="<h2>Your <strong>new password</strong> is<h1>".$new."</h1></h2>";


              
			  $this->sendemail('NEW PASSWORD',$html,$email);

			  $new=password_hash($new,PASSWORD_DEFAULT);


               DB::table('users')->where('email', $email)->limit(1)->update(['password'=>$new]);



          
             return redirect("/forget")->with("success","Check your mail for new password");
            }
          else
          	return view("newpass",["id"=>1]);



          }
         else
         	return redirect("/forget")->with("wrong","OTP expired !!");

    }


}