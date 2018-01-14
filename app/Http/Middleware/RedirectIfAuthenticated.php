<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Session;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //check user exists or not
         $userid = $request->session()->get('authId'); 
         if($guard=='Admin')
         {
                if($userid)
                {
                    return $next($request);
                }
                else
                {
                return redirect('/login')->with('error', 'Please Login to Access application');
             }
         }
         elseif($guard=='Dev')
         {
             return $next($request);
         }
         else
        {
            return redirect('/login')->with('error', 'Please Login to Access application');
         }

         
    }
}   
