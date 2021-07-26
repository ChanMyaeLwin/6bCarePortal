<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            $user = Auth::user(); 
            if($user->hasRole('admin')){
                return '/admin-dashboard';
            }elseif($user->hasRole('doctor')){
                return '/doctor-dashboard';
            }elseif($user->hasRole('patient')){
                return '/patient-dashboard';
            }else{
                return '/'; 
            }
          }

        return $next($request);
    }
}
