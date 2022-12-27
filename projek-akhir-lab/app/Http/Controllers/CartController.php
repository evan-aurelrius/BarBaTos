<?php
namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CartController extends Controller
{
    public function goToCart(){
        return view('cart',[
            "title" => "Cart",
            'carts' => Cart::where('user_id', Auth()->user()->id)->get()
        ]);
    }
    public function addCart(Request $req){
        Cart::insert([
            'quantity' => $req->quantity,
            'user_id' => Auth()->user()->id,
            'product_id' => $req->product_id,
        ]);

        return redirect('/cart');
    }
    public function deleteCart(Request $req){
        $cart = Cart::where('user_id',auth()->user()->id)->where('product_id', $req->product_id)->delete();
        return redirect('/cart');
    }
    public function minusCart(Request $req){
        $cart = Cart::where('user_id',auth()->user()->id)->where('product_id', $req->product_id);
        $cart->update([
            'quantity' => $cart->first()->quantity - 1,
        ]);
        if($cart->first()->quantity == 0){
            $this->deleteCart($req);
        }
        return redirect('/cart');
    }
    public function plusCart(Request $req){
        $cart = Cart::where('user_id',auth()->user()->id)->where('product_id', $req->product_id);
        $cart->update([
            'quantity' => $cart->first()->quantity + 1,
        ]);
        return redirect('/cart');
    }
}
