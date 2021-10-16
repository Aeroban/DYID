<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function showManageCategory(){
        $data = Category::all();

        return view('manage_category')->with('data',$data);
    }

    public function showEditCategory($id){
        $data = Category::find($id);

        return view('edit_category')->with('data',$data);
    }

    public function update(Request $request, $id){
        $data = Category::where('id', $id)->update(
            ['name' => $request->input('name')]
        );

        return redirect('manage_category');
    }

    public function delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect('manage_category');
    }
}
