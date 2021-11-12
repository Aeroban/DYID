<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);
    }

    public function show($id){
        $data = Product::find($id);

        return view('products.detail_product')->with('data',$data);
    }

    public function showInsertProduct(){
        return view('products.insert_product');
    }

    public function edit(){
        return view('products.edit_product');
    }

    public function showManageProduct(){
        return view('products.manage_product');
    }
}
