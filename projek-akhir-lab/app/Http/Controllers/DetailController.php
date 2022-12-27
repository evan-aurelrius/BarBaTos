<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class DetailController extends Controller
{
    public function goToEdit($idProduct){
        return view('detail',[
            "title" => "Detail",
            "product" => Product::where('id',$idProduct)->first(),
        ]);
    }
}
