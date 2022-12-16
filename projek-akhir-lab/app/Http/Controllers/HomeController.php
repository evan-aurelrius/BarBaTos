<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function goToHome(){
        $Products = Product::get();
        $Categories = Category::get();
        return view('home', [
            "title" => "Home",
            "Products" => $Products,
            "categories" => $Categories
        ]);
    }

    public function goToViewAll($category_id){
        $Products = Product::where('category_id','=',$category_id)->get();
        $Category = Category::where('id','=',$category_id)->first();
        return view('viewAll', [
            "title" => "Home",
            "Products" => $Products,
            "Category" => $Category
        ]);
    }

    // public function createProduct(Request $req){
    //     $img = $req->file('photo');
    //     $imgName = $img->getClientOriginalName();
    //     Storage::putFileAs('public/images', $img, $imgName);
    //     $imgPath = 'images/'.$imgName;

    //     DB::table('products')->insert([
    //         "name" => $req->name,
    //         "category" => $req->category,
    //         "description" => $req->description,
    //         "price" => $req->price,
    //         "photo" => $imgPath,
    //     ]);
    //     return redirect('/edit');
    // }
}
