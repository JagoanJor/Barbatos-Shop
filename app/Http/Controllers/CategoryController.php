<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Shoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show($cat_id){
        
        return view('category', [
            "categories" => Categories::find($cat_id),
            "shoes" => DB::table('shoes')->where('cat_id', $cat_id)->paginate(10)
        ]);
    }
}
