<?php
namespace App\Models;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;
    public function Category(){return $this->belongsTo(Category::class);}
    public function Cart(){return $this->hasOne(Cart::class);}
}
