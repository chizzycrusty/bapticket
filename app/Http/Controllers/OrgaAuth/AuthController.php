<?php

namespace App\Http\Controllers\OrgaAuth;

use App\Orga;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'tel' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'adresse' => 'required|max:255',
            'postal' => 'required|max:5',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'tel' => $data['tel'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'adresse' => $data['adresse'],
            'postal' => $data['postal'],
            'city' => $data['city'],
            'country' => $data['country'],
        ]);
    }

    protected $redirectTo = '/orga';
    protected $guard = 'orga';

    public function showLoginForm()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

        return view('orga.auth.login');
    }
    public function showRegistrationForm()
    {
        return view('orga.auth.register');
    }  
}
