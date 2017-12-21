<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = '/home';


    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        $messages  = [
            'valid_captcha' => 'Wrong code. Try again please.'
        ];

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
//            'image'=>'image|mimes:png,PNG,JPG,jpg,jpeg|max:100000',
            'DateofBirth'=>'required',
            'status'=>'required',
            'admin'=>'required',
            'mobile'=>'required',
            recaptcha_input() => ['required', new Recaptcha('main')],
        ]);

    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'username' => $data['username'],
            'DateofBirth' => $data['DateofBirth'],
            'status' => $data['status'],
            'admin' => $data['admin'],
            'mobile' => $data['mobile'],
        ]);
    }
}
