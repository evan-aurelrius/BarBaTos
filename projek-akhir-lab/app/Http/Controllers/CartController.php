<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function goToCart(){
        return view('cart',[
            "title" => "Cart"
        ]);
    }

}
