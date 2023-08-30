<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index(Request $request){
        Transaction::create([
            'user_id' => $request->userID
        ]);

        $id = Transaction::latest()->first()->id;
        $shoesNAME = $request->shoesName;
        $quantity = $request->quantity;
        $subPrice= $request->subprice;

        foreach($shoesNAME as $key => $shoes)
        {
            $input['name'] = $shoes;
            $input['qty'] = $quantity[$key];
            $input['subPrice'] = $subPrice[$key];
            $input['transaction_id'] = $id;

            TransactionDetail::create($input);

        }

        DB::table('carts')->where('user_id', $request->userID)->delete();

        return redirect('/')->with('success', 'Purchase Successful!');
    }

    public function history(){
        return view('history', [
            "transactions" => Transaction::all(),
            "details" => TransactionDetail::all()
        ]);
    }
}
