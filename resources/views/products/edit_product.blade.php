@extends('layouts/app')

@section('content')
<div class="edit_product">
    <div class="edit_product-form">
        <p>Edit Product</p>
        <form action="">
            <input type="text" name="" id="" placeholder="Product Name">
            <textarea name="" id="" cols="30" rows="10" placeholder="Product Description"></textarea>
            <input type="number" name="" id="" placeholder="Price">

            <label for="product_category">Product Category</label>
            <select name="product_category", id="product_category">
                <option value="">Choose One</option>
                <option value="Television">Television</option>
                <option value="Smartphone">Smartphone</option>
            </select>

            <label for="product_img">Product Image</label>
            <input type="file" name="product_category" id="product_img" accept=".jpg"/>
            <p>Image saved: </p>
            
            <input type="submit" value="Save">
        </form>
    </div>
    
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/edit_product.css")}}">
@endsection