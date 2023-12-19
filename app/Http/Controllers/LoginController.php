<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    function login() {
        return view('login');
    }

    function postLogin(Request $request) {
        $email      = $request->email;
        $password   = $request->password;

        $user = User::where('email', $email)->where('password', $password)->first();
        if ($user) {
            echo "Login berhasil";
        } else {
            echo "Username / Password salah";
        }
    }

}
