<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Auth;

class Soloadmin
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
        if(Auth::user()->fullacces=='yes'):
        return $next($request); // si es admin envia a home
        endif;
        return redirect('user');// si es user envia a user
    }
}
