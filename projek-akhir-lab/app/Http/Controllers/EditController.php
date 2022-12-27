<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class EditController extends Controller
{
    public function goToEdit(){
        return view('edit', [
            "title" => "Edit",
            "options" => Category::get(),
            "products" => Product::get()->reverse(),
        ]);
    }
    public function createProduct(Request $req){
        $img = $req->file('photo');
        $imgName = $img->getClientOriginalName();
        Storage::putFileAs('public/images', $img, $imgName);
        Product::insert([
            "name" => $req->name,
            "category_id" => $req->category,
            "description" => $req->description,
            "price" => $req->price,
            "photo" => $imgName,
        ]);
        return redirect('/edit');
    }
    public function deleteProduct(Request $req){
        Product::where('id',$req->id)->delete();
        return redirect('/edit');
    }

    public function editProduct(Request $req){
        return view('editProduct', [
            "title" => "Edit",
            "options" => Category::get(),
            "product" => Product::where('id',$req->id)->first(),
        ]);
    }
    public function updateProduct(Request $req){
        $img = $req->file('photo');
        $imgName = $img->getClientOriginalName();
        Storage::putFileAs('public/images', $img, $imgName);
        Product::where("id", $req -> id)
        -> update([
            "name" => $req->name,
            "category_id" => $req->category,
            "description" => $req->description,
            "price" => $req->price,
            "photo" => $imgName,
        ]);
        return redirect('/edit');
    }
}
