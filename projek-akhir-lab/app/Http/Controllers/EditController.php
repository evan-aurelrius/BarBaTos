<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function goToEdit(){
        $products = Product::get();
        return view('edit', [
            "title" => "Edit",
            "options" => [
                "Face Mask",
                "Headset",
                "Keyboard",
                "Laptop",
                "Monitor",
                "Mouse",
                "Mouse Pad",
                "Smart Watch",
            ],
            "products" => $products,
        ]);
    }

    public function createProduct(Request $req){
        $img = $req->file('photo');
        $imgName = $img->getClientOriginalName();
        Storage::putFileAs('images', $img, $imgName);

        Product::insert([
            "name" => $req->name,
            "category_id" => $req->category,
            "description" => $req->description,
            "price" => $req->price,
            "photo" => $imgName,
        ]);
        return redirect('/edit');
    }

    public function updateProduct(Request $req){
        $img = $req->file('photo');
        $imgName = $img->getClientOriginalName();
        Storage::putFileAs('images', $img, $imgName);

        Product::where("id", "=" , $req -> id)
        -> update([
            "name" => $req->name,
            "category_id" => $req->category,
            "description" => $req->description,
            "price" => $req->price,
            "photo" => $imgName,
        ]);
        return redirect('/');
    }

    public function deleteProduct(Request $req){
        Product::where('id','=',$req->id)->delete();

        return redirect('/edit');
    }
}
