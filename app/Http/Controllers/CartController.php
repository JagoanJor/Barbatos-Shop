<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Shoes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        return view('cart', [
            "carts" => Cart::all(),
            "shoes" => Shoes::all()
        ]);
    }

    public function addtocart(Request $request){
        Cart::create([
            'shoes_id' => $request->shoesID,
            'user_id' => $request->userID,
            'qty' => $request->qty,
            'subPrice' => $request->qty * $request->price
        ]);

        return redirect('/')->with('success', 'Add to Cart Success!');
    }

    public function delete(Request $request){
        DB::delete('delete from carts where cart_id = ?', [$request->cartID]);
        return redirect('/cart')->with('success', 'Success delete item!');
    }
}
