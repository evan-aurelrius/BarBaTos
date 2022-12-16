<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function goToProfile(){
        return view('profile', [
            "title" => "Profile",
            "listCountry" => ["jakarta", "bogor"]
            ]);
    }

    public function logOut(){
        return redirect('/login');
    }

    public function editAccount(Request $req){
        DB::table('users')
        -> where('id', '=', $req->id)
        -> update([
            "name" => $req->name,
            "email" => $req->email,
            "password" => $req->password,
            "gender" => $req->gender,
            "dateOfBirth" => $req-> dateOfBirth,
            "country" => $req->country,
        ]);
        return redirect('/');
    }
}
