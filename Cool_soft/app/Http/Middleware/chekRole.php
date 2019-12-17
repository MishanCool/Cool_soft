<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class chekRole
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
        if(Auth::user()->role=='admin')
        {
            return redirect()->route('admin');
            return $next($request);
        }

        elseif(Auth::user()->role=='mod')
        {
            return redirect()->route('mod');
            return $next($request);
        }


    }
}
