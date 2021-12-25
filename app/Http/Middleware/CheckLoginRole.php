<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckLoginRole
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
        if(Session::get("login")){
            $role = Session::get("role");
            if($role==0)
            return redirect("/");
            else if($role==1)
            return redirect("/patient/home");
            else if($role==2)
            return redirect("/admin/home");
        }
        return $next($request);
        
    }
}
