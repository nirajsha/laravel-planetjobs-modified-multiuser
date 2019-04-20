<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 use Illuminate\Http\Request;
 use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
         $this->middleware('guest:superadmin')->except('logout');
            $this->middleware('guest:employer')->except('logout');
             $this->middleware('guest:seeker')->except('logout');
            
    }
     public function showSuperAdminLoginForm()
    {

        return view('auth.login', ['url' => 'superadmin']);
    }

    public function superAdminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/superadmin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

     public function showEmployerLoginForm()
    {
        return view('auth.login', ['url' => 'employer']);
    }

    public function employerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('employer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/employer');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
     public function showSeekerLoginForm()
    {
        return view('auth.login', ['url' => 'seeker']);
    }

    public function seekerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('seeker')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/seeker');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}
