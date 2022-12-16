<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
    public function goToRegister(){
        return view('register', [
            "title" => "Register",
            "listCountry" => ["jakarta", "bogor"]
            ]);
    }

    public function createAccount(Request $req){
        $req = $req->validate([
            "name" => 'required|min:3|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|min:8',
            "confirm-password" => 'same:password',
            "gender" => 'required',
            "dateOfBirth" => 'required',
            "country" => 'required',
        ]);

        User::insert([
            "name" => $req['name'],
            'email' => $req['email'],
            'password' => hash::make($req['password']),
            'gender' => $req['gender'],
            'dateOfBirth' => $req['dateOfBirth'],
            'country' => $req['country'],
        ]);
        return redirect('/login');
    }
}