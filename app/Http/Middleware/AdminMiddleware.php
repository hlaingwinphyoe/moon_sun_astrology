<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and has 'admin' role
        if (Auth::check() && Auth::user()->role->slug === 'admin' || Auth::user()->role->slug === 'astrologer' || Auth::user()->role->slug === 'developer') {
            return $next($request);
        }

        // Redirect to welcome route if not admin
        return redirect()->route('welcome');
    }
}
