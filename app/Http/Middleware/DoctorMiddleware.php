<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DoctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request2, Closure $next2)
    {
        if(Auth::check())
        {
            if(Auth::user()->role_as ==2) //is doctor
            {
                return $next2($request2); //handle request
            }
            else
            {
                if(Auth::user()->role_as ==0) //is user
                {
                return redirect('/user/home')->with('status','Access Denied! You are not admin'); //user trying to enter doctor page
                }

                else{
                    return redirect('/admin/dashboard')->with('status','Access Denied! You are not admin');  //for admin triying to enter doctor direct back to homepage
                }
            }
        }
        else
        {
            return redirect('/login')->with('status','Please login first');
        }
    }
}
