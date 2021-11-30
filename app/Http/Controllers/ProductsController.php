<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;



class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['showHome','show','search']]);
    }

    public function showHome()
    {
        $data = Product::paginate(6);

        return view('index', [
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $data = Product::find($id);

        return view('products.detail_product')->with('data', $data);
    }

    public function showInsertProduct(Request $request)
    {
        // this part is to show insert product page but to input the selected category
        // the same as in the database there is a need to input category data inside here   
        $category_data = Category::all();

        return view('products.insert_product')->with('category_data', $category_data);
        // $role = auth()->user()->role;
        // if ($role == 1) {
        //     return view('products.insert_product')->with('category_data', $category_data);
        // } else {
        //     return redirect('/');
        // }
    }

    public function showEdit($id)
    {
        // this part is to show the edit page

        $data = Product::find($id);
        $category_data = Category::all();
        
        return view('products.edit_product', compact('data', $data))->with('category_data', $category_data);
        // $role = auth()->user()->role;
        // if ($role == 1) {
        //     return view('products.edit_product', compact('data', $data))->with('category_data', $category_data);
        // } else {
        //     return redirect('/');
        // }
    }

    public function update($id, Request $request)
    {
        // the same as insert the difference is at the end we will use update function to update the page and database
        $this->validate($request, [
            'name' => 'required|unique:products|min:5',
            'description' => 'required|min:50',
            'price' => 'required|numeric|min:0|not_in:0',
            'product_category' => 'required',
            'image_path' => 'required|image|mimes:jpeg'
        ]);
        $product = Product::find($id);
        $image_path = $request->file('image_path');
        $image_name = $image_path->getClientOriginalName();
        $destinationPath = public_path() . '/storage/images/products';
        $image_path_name = time() . '.' . $image_name;
        $image_path->move($destinationPath, $image_path_name);


        $product->category_id = $request->product_category;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_path = $image_path_name;

        if ($product->update()) {
            return redirect('product');
        }
    }


    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('product');
    }

    public function showManageProduct()
    {
        // $product = Product::join('categories', 'categories.id', '=', 'products.category_id')
        //     ->get(['products.id', 'products.name', 'products.price', 'products.description', 'products.image_path', 'categories.name AS category']);

        $product = Product::all();
        return view('products.manage_product')->with('product', $product);
        // $role = auth()->user()->role;
        // if ($role == 1) {
        //     return view('products.manage_product')->with('product', $product);
        // } else {
        //     return redirect('/');
        // }
    }

    public function search(Request $req)
    {
        $name = $req->input('search');
        $data = Product::where('name', 'like', '%' . $name . '%')->paginate(6);

        return view('products.search')->with('data', $data);
    }


    /**
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Resonse;
     * 
     */

    public function store(Request $request)
    {
        // This part is to save the product into the database
        // furthermore, it is equiped with a validation

        $this->validate($request, [
            'name' => 'required|unique:products|min:5',
            'description' => 'required|min:50',
            'price' => 'required|numeric|min:0|not_in:0',
            'product_category' => 'required',
            'image_path' => 'required|image|mimes:jpeg'
        ]);

        //making an object for product
        $product = new Product;

        //getting the image from the form
        $image_path = $request->file('image_path');

        //getting the original name of the file
        $image_name = $image_path->getClientOriginalName();

        //destination to the public->storage->images->products file
        $destinationPath = public_path() . '/storage/images/products';

        // making sure that there will be no duplicate image when saving the image
        $image_path_name = time() . '.' . $image_name;
        
        //moving the image to the local storage
        $image_path->move($destinationPath, $image_path_name);

        //saving the form into the database
        $product->category_id = $request->product_category;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_path = $image_path_name;
        $product->save();
        if ($product->save()) {
            return redirect('/product');
        }
    }
}
