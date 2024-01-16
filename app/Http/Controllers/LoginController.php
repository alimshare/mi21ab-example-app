<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    function login() {
        return view('login');
    }

    function postLogin(Request $request) {
        $email      = $request->email;
        $password   = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        } else {
            return redirect('/login')->with('danger', 'Email / Password salah');
        }   
    }

    function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

}
