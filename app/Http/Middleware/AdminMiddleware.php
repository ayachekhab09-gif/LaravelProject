<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('is_logged_in') || session('role') !== 'admin') {
            return redirect('/login');
        }

        return $next($request);
    }
}