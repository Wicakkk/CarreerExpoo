<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->level != 'Kepsek'){
                return redirect('/dashboard');
            } else {
                return redirect('/kepsek');
            }
        }

        return $next($request);
    }
}