<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Shoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ShoesController extends Controller
{
    //
    public function add(Request $request){
        $name = $request->shoes_name;
        $categories = Categories::where('cat_name',$request->shoes_cat)->first();
        $detail = $request->shoes_detail;
        $price = $request->shoes_price;
        $this->validate($request,[
            'shoes_name' => 'required | min:3',
            'shoes_detail' => 'required | min:5',
            'shoes_price' => 'required | integer',
            'shoes_image' => 'required | mimes:png,jpg'
        ]);
        $img = $request->file('shoes_image');
        Storage::putFileAs('/public/storage/img/',$img,$img->getClientOriginalName());
        $insertdetail = [
            'name' => $name,
            'cat_id' => $categories->cat_id,
            'detail' => $detail,
            'price' => $price,
            'image' => 'storage/img/'.$img->getClientOriginalName()
        ];
        DB::table('shoes')->insert($insertdetail);
        return redirect('/manageProduct')->with('success','Success insert the shoes!');
    }

    public function update(Request $request){
        $name = $request->shoes_name;
        $categories = Categories::where('cat_name',$request->shoes_cat)->first();
        $detail = $request->shoes_detail;
        $price = $request->shoes_price;
        $this->validate($request,[
            'shoes_name' => 'required | min:3',
            'shoes_detail' => 'required | min:5',
            'shoes_price' => 'required | integer',
            'shoes_image' => 'required | mimes:png,jpg'
        ]);

        $img = $request->file('shoes_image');
            Storage::putFileAs('/public/storage/img/',$img,$img->getClientOriginalName());
            $updatedetail = [
                'name' => $name,
                'cat_id' => $categories->cat_id,
                'detail' => $detail,
                'price' => $price,
                'image' => '/storage/img/'.$img->getClientOriginalName()
        ];
        DB::table('shoes')->where('shoes_id',$request->route('shoes_id'))->update($updatedetail);
        return redirect('/manageProduct')->with('success','Succes update the shoes');
    }

    public function delete(Request $request){
        DB::table('shoes')->where('shoes_id',$request->route('shoes_id'))->delete();
        return redirect()->back();
    }

    public function detail($shoes_id){
        return view('detail', [
            "shoes" => Shoes::find($shoes_id)
        ]);
    }
}
