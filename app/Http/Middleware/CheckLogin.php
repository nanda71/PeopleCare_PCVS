<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class CheckLogin
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
        if(!Session::get("login")){
            return redirect()->back()->withErrors(["Please login first"]);
        }
        return $next($request);
    }
}
