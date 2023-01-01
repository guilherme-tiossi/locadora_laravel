<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        if(Auth::user() == null){
            return redirect('/');
        }
        
        if (Auth::user()->adm ==! 1){
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();    
            return redirect('/');
        }

        return $next($request);
    }
}
