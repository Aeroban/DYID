<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Passed title";
        $description = "This is just a tutorial";

        $data = [
            'product1' => 'Myphone',
            'product2' => 'Samsong'
        ];

        //Using compact method to pass parameters to HTML--------
        //path/file = products/index of view folder
        //compact('title') refer to $title
        //In here we pass title to products/index.blade.php
        // return view('products/index', compact('title','description'));

        //With method to pass parameter---------------
        //->with(variable_name, $variable_name) = one variable only
        //return view('products/index')->with('title', $title);
        //return view('products/index')->with('data', $data);
        
        //Passing items directly
        return view('products/index', [
            'data' => $data
        ]);
    }

    public function about(){
        return 'About us Page';
    }

    //Controller grab id from route
    public function show($name){
        $data = [
            'product1' => 'Myphone',
            'product2' => 'Samsong'
        ];

        return view('products/index', [
            //accessing $data with $name as dict key {key=>value}
            //If null return does not exist
            'products' => $data[$name] ?? "Product " . $name . ' does not exist'
        ]);
    }
}
