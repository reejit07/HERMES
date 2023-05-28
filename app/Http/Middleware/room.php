<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class room
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         
        if(Session::has('room') && Session::has('email'))
        {
            return $next($request);
          
        }
        else if(Session::has('email') && !Session::has('room'))
         {
            return redirect("/dashboard");
         }

        return redirect("/login")->with('wrong',"Need to login first !");    
    }
}
