<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\support\Facades\Auth;
class IsUserAdmin
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
        if(Auth::user()->admin != 1)
        {
            return redirect('login');
        }
    return $next($request);}
}
