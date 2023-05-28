<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class logout extends Controller
{
    function logout()
    {
 
        session::flush();
          return redirect('/home');
 
    }
}
