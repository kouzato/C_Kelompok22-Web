<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use auth;


class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$level)
    {
        if (auth::user()-> role !=1){
            return redirect()->route('error');
        }
        return $next($request);
    }
}
