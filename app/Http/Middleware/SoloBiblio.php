<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SoloBiblio
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return redirect('home');//si es administrador redirige al HOME 
			case('2'):
                return $next($request);// si es un bibliotecario redirige al biblio
			break;	
            case ('3'):
                return redirect('lab1');//si es lab1 redirige al lab1
            break;
            case ('4'):
                return redirect('lab2');//si es lab2 redirige al lab2
            break;
        }
    }
}
