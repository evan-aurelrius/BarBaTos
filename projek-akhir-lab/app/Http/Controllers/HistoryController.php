<?php
namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\History;
use App\Models\Product;
use App\Models\History_User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HistoryController extends Controller
{
    public function goToHistory(){
        $histori_user_list = History_User::where('user_id', auth()->user()->id)->get();
        $histories = collect([]);

        foreach ($histori_user_list as $hul){
            $histories->push(History::where('id', $hul->history_id)->first());
        }
        $unique = $histories->unique();
        return view('history',[
            'title' => 'History',
            'histori_user_list' => $histori_user_list,
            'histories' => $unique,
        ]);
    }
    public function purchase(){
        $histories = Cart::where('user_id',auth()->user()->id);
        $total = 0;
        $h = new History();
        $h->save();
        foreach ($histories->get() as $history){
            $hu = new History_User();
            $hu->history_id = History::latest()->first()->id;
            $hu->user_id = auth()->user()->id;
            $hu->quantity = $history->quantity;
            $hu->name = Product::where('id',$history->product_id)->latest()->first()->name;
            $hu->price = Product::where('id',$history->product_id)->latest()->first()->price;
            $hu->total_price = $hu->price * $hu->quantity;
            $hu->save();
            $total += $hu->total_price;
            dump($total);
        }
        History::where('id',$h->id)->update(['total' => $total]);
        $histories->delete();
        return redirect('/history');
    }
}
