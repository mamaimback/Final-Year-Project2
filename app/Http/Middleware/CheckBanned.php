<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request_checkban, Closure $next_checkban)
    {
        if(auth()->check() && (auth()->user()->isban == 1)){
            Auth::logout();

            $request_checkban->session()->invalidate();

            $request_checkban->session()->regenerateToken();

            return redirect('/')->with('error', 'Your Account is suspended, please contact Admin.');

        }
        return $next_checkban($request_checkban);
    }
}
