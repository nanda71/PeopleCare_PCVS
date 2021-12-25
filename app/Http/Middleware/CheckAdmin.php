<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAdmin
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
        if(Session::get('role')!=2){
            $url = Session::get('role')==0?"/":"/";
            return redirect($url)->withErrors(["Forbidden Acces!"]);
        }
        return $next($request);
    }
}