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
        return view('viewAll', [
            "title" => "Home",
            "Products" => Product::where('category_id',$category_id)->paginate(10),
        ]);
    }
    public function search(Request $req){
        return view('search', [
            "title" => "Home",
            'Products' => Product::where('name', 'like', '%' . $req->search . '%')->paginate(10)
        ]);
    }
}
