<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        $name = "Doctor";
        return view('about')->with('name',$name);
    }

    public function loopPage(){
        $names = [];
        $names = ["Doctor", "Detective", "Engineer"];
        return view('loop',[
            'names' => $names
        ]);
    }
}
