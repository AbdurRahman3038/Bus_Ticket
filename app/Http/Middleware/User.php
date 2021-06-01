<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
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
        if (Auth::check()) {
            if(Auth::user()->role=='user')
            {
                return $next($request);
            }else
            {
                Auth::logout();
                return redirect()->route('login.registration.form')->with('success','Please Login If you want to continue');
            }

        }else{
            return redirect()->route('login.registration.form');
        }
    }
}
