<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function tampil_login() {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        // dd(Admin::bersih($request->input('username')));
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];


        Auth::attempt($data);
        // dd(Auth::user());
        // echo Auth::user()->username;
        if (Auth::attempt($data)) { // true sekalian session field di users nanti bisa dipanggil via Auth
            // echo "Login Success";
                return redirect('/dashboard');
            
        } else { // false
            //Login Fail
            return redirect('/login')->with('message', 'Username atau password salah');
        }
    }
}
