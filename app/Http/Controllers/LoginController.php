<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    public function Login() 
    {
        return view('login.form-login');
    }


    public function authenticate(Request $request)
    {

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($credentials)){

            return redirect()->route('admin.users');

        }

        return back()->with(['alert' => 'danger', 
                              'login-message' => 'Email e/ou senha inválidos']);
    }


    public function logout() 
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
