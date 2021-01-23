<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class isAdmin
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
        $userRoles = Auth::user()->roles->pluck('name');
        if(!$userRoles->contains('admin')){
            // dd("Permission denied, idi nahuy");
            return redirect('/welcome');
        }
        else
            // {return redirect('/welcome');}
            return $next($request);
    }
}
