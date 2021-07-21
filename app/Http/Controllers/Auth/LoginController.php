<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo() {
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }

     /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'phone';
    }

       /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        dd($user);
        if ($user->is_admin) {
            return redirect()->to('/admin-dashboard');
        }
        if ($user->is_admin) {
            return redirect()->to('/doctor-dashboard');
        }

        return redirect()->to('/patient-dashboard');
    }
}
