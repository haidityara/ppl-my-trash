<?php

namespace App\Http\Middleware;

use Closure;

// middleware for auth buyer pengepul
class AuthClientBuyer
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = session('buyer');
        if (!$user) {
            return redirect('login');
        }
        return $next($request);
    }
}
