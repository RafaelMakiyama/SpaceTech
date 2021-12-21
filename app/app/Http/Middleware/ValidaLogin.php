<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidaLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('usuario')):
            return redirect()->route('artigos.index')->with('error', 'você não tem permissão para acessar essa pagina');
        endif; 
         
        return $next($request);
    }
}
