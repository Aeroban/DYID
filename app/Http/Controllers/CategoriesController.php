<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showManageCategory(){
        $data = Category::all();

        return view('categories.manage_category')->with('data',$data);
    }

    public function showEditCategory($id){
        $data = Category::find($id);

        return view('categories.edit_category')->with('data',$data);
    }

    public function update(Request $request, $id){
        $data = Category::where('id', $id)->update(
            ['name' => $request->input('name')]
        );

        return redirect('category');
    }

    public function showInsertCategory(){
        return view('categories.insert_category');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|min:2'
        ]);

        $new_category = Category::create([
            'name' => $request->input('name')
        ]);

        return redirect('category');
    }

    public function delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect('category');
    }
}
