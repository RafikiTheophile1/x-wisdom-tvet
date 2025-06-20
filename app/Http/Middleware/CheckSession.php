<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('wisedom')) {
            return redirect('/login')->with('fail', 'You must login first.');
        }

        return $next($request);
    }
}
