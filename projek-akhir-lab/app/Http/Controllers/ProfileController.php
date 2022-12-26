<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function goToProfile(){
        return view('profile', [
            "title" => "Profile",
            "listCountry" => ["jakarta", "bogor"]
            ]);
    }

    public function logOut(){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function editAccount(Request $req){
        User::where('id', $req->id)
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

    public function loggingOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
