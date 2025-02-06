<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->type == $role) {
            return $next($request);
        }

        return redirect('/')->with('error', "You don't have access to this page.");
    }
}
