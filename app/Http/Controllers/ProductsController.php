<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showHome(){
        $data = Product::paginate(6);
        
        return view('home', [
            'data' => $data
        ]);
    }
}
