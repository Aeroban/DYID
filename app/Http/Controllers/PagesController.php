<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showIndex(){
        return view('index');
    }

    public function showRegister(){
        return view('register');
    }

    public function showLogin(){
        return view('login');
    }

    public function showInsertProduct(){
        return view('insert_new_product');
    }

    public function showEditProduct(){
        return view('edit_new_product');
    }

    public function showInsertCategory(){
        return view('insert_category');
    }

    public function showTest(){
        return view ('testing');
    }

    public function showEditCategory(){
        return view ('edit_category');
    }

    public function showManageCategory(){
        return view ('manage_category');
    }

    public function showViewProductList(){
        return view ('view_product_list');
    }

    public function showDetailProductPage(){
        return view ('detail_product_page');
    }

    public function showHistory(){
        return view ('history');
    }

    public function showHome(){
        return view('home');
    }

    public function showSearch(){
        return view('search');
    }

    public function showCart(){
        return view('cart');
    }

    public function showEditCart(){
        return view('edit_cart');
    }
}

