<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || !str_ends_with(Auth::user()->email, '@admin.com')) {
            return redirect()->route('home')->with('error', 'You do not have permission to access the dashboard.');
        }

        return $next($request);
    }
}
