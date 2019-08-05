<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::check())
            if (Auth::user()->is_verified == 1) {
                return $next($request);
            } else {
                return redirect('/pending-verification');
            } else {
            return redirect('/login');
        }
    }
}
