<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class CheckUser
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
        if(Session::get("role")!=0){
            $url=Session::get("role")==1?"/patient/home":"/admin";

            return redirect($url)->withErrors(["Please logout, and login as User first"]);

        }
        return $next($request);
    }
}
