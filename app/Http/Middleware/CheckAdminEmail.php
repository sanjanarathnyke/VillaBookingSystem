<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Allow only @admin.com users to access the dashboard
            if (!str_ends_with($user->email, '@admin.com') && $request->route()->getName() === 'dashboard') {
                return redirect()->route('home')->with('error', 'You do not have access to the dashboard.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }

        return $next($request);
    }
}
