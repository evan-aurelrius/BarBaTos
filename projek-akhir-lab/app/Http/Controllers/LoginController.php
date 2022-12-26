<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class loginController extends Controller
{
    public function goToLogin(){
        return view('login', ["title" => "Login"] );
    }

    public function authenticate(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if($req->rememberMe){
            Cookie::queue('email', $req['email'], 2);
            Cookie::queue('password', $req['password'], 2);
        }

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
