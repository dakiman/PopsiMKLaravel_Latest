<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logoutUser');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function login() {
        $result = auth()->attempt(request(['email', 'password']), request('remember')!=null);
        if($result) {
            return redirect($this->redirectTo);
        } else {
            return redirect('/login')->with([
                'invalid' => "Invalid credentials",
            ]);
        }
    }

    public function logoutUser() {
        auth()->logout();
        return redirect('/login');
    }
}
