<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request3, Closure $next3)
    {if(Auth::check())
        {
            if(Auth::user()->role_as ==0) //is user
            {
                return $next3($request3); //handle request
            }
            else
            {
                if(Auth::user()->role_as ==1) //is admin
                {
                return redirect('/admin/dashboard')->with('status','Access Denied! You are not user'); //user admin trying to enter user page
                }

                else{
                    return redirect('/doctor/dochome')->with('status','Access Denied! You are not user');  //for doctor triying to enter admin direct back to homepage
                }
            }
        }
        else
        {
            return redirect('/login')->with('status','Please login first');
        }
        
    }
}
