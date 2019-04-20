<?php

namespace App\Http\Controllers\Auth;
    use App\User;
    use App\SuperAdmin;
    use App\Employer;
    use App\Seeker;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:superadmin');
        $this->middleware('guest:employer');
        $this->middleware('guest:seeker');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
     public function showSuperAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'superadmin']);
    }

    public function showEmployerRegisterForm()
    {
        return view('auth.register', ['url' => 'employer']);
    }
    public function showSeekerRegisterForm()
    {
        return view('auth.register', ['url' => 'seeker']);
    }
      protected function createSuperAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $superadmin = SuperAdmin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/superadmin');
    }
      protected function createEmployer(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Employer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/employer');
    }
      protected function createSeeker(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Seeker::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/seeker');
    }
}