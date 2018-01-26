<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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
<<<<<<< HEAD
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
=======
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'user_type_id' => 'required|numeric',
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
<<<<<<< HEAD
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
=======
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'user_type_id' => $data['user_type_id'],
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
