<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Shoes;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function index(){

        return view('home', [
            "shoes" => Shoes::all(),
            "categories" => Categories::all()
        ]);
    }
}
