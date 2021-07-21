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
            $role = Auth::user()->role; 
            dd($role);
            switch ($role) {
                case 'admin':
                    return '/admin-dashboard';
                    break;
                case 'doctor':
                    return '/doctor-dashboard';
                    break;
                case 'patient':
                    return '/patient-dashboard';
                    break;  
               
                default:
                    return '/'; 
                break;
            }
          }

        return $next($request);
    }
}
