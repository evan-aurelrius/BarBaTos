<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            "name" => 'required|min:5|regex:/[a-zA-Z\s]+$/',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|min:8',
            "confirm-password" => 'same:password',
            "gender" => 'required',
            "dateOfBirth" => 'required|before',
            "country" => 'required',
        ]);
        User::insert([
            'role' => 'user',
            'name' => $req['name'],
            'email' => $req['email'],
            'password' => hash::make($req['password']),
            'gender' => $req['gender'],
            'dateOfBirth' => $req['dateOfBirth'],
            'country' => $req['country'],
        ]);
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('/');
        }
        return back();
    }
}
