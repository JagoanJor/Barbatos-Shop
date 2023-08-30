<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Shoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageProductController extends Controller
{
    //
    public function showManageProduct(Request $request){
        $shoes = Shoes::all();
        $search_query = $request->query('search');
        $shoes = Shoes::where('name','LIKE',"%$search_query%")->paginate(10)->appends(['search'=>$search_query]);
        return view('manageProduct')->with('shoes',$shoes);
    }
    public function showAddProduct(){
        $categories = Categories::all();
        return view('addProduct')->with(compact('categories'));
    }
    public function showUpdateProduct(Request $request){
        $shoes = DB::table('shoes')->where('shoes_id',$request->route('shoes_id'))->first();
        $categories = Categories::all();
        return view('updateProduct',['categories'=>$categories,'shoes'=>$shoes]);
    }
}
