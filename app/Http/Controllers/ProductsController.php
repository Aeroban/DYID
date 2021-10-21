<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showHome(){
        $data = Product::paginate(6);
        
        return view('index', [
            'data' => $data
        ]);
    }

    public function showProduct($id){
        $data = Product::find($id);

        return view('products.detail_product')->with('data',$data);
    }

    public function showInsertProduct(){
        return view('products.insert_product');
    }

    public function edit(){
        return view('products.edit_product');
    }

    public function show(){
        return view('products.detail_product');
    }

    public function showManageProduct(){
        return view('products.manage_product');
    }

    public function search(Request $req){
        $name = $req->input('search');
        $data = Product::where('name','like', '%'.$name.'%')->paginate(6);

        return view('products.search')->with('data', $data);
    }
}
