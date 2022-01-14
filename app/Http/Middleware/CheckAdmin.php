<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $userRoles = Auth::user()->roles->pluck('name');//1 dk gelicem hemen
        if (!$userRoles->contains('admin')){          //Tamam
            return redirect(route('admin_home'))->with('error','Giriş İzniniz Yoktur!');
        }
        return $next($request);
    }
}
