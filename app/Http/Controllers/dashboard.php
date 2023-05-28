<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    function dashboard()
    {
       $USERNAME=decrypt(session('username'));
 
       return view('dashboard',["username"=>$USERNAME]).view('chatbot',["username"=>$USERNAME]);

    }

}
