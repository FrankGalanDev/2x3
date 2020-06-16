<?php

namespace App\Http\Middleware;

use Closure;
use User;

class Admin
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
        //if(auth()->user()->administrador == 1 )
        if(auth()->check() && auth()->user()->administrador == 1)
        {
            return $next($request);

        }
    
        return redirect('inicio')->with('error',"no tiene acceso");
    }
}
