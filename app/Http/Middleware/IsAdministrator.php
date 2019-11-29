<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdministrator
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
        if (Auth::check()
            && Auth::user()->id == 1
            && Auth::user()->email == 'epipha44@gmail.com'
            ) {
                return $next($request);
            }

        return view('home');
    }
}
