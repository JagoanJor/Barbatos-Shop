<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $shoes = Shoes::latest();

        if(request('search')){
            $shoes->where('name', 'like', '%' . request('search') . '%');
        }

        return view('shoes', [
            "shoes" => $shoes->get()
        ]);
    }
}
