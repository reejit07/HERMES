<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class botcontroller extends Controller
{
    function botmessage(request $request)
    {
         
$question=$request->post('question');
$api=env('OPENAI_API');
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$postdata=array(
    "model"=>"text-babbage-001",
    "prompt"=>$question,
    "temperature"=>1,
    "max_tokens"=>30,
    "top_p"=>1,
    "frequency_penalty"=>0,
    "presence_penalty"=>0
  );

$postdata=json_encode($postdata);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization:Bearer '.$api;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$result=json_decode($result,true);

$answer=$result['choices'][0]['text'];

  return $answer;

    }

}
