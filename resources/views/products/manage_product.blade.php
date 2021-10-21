@extends('layouts/app')

@section('content')
    <h1>Manage Category</h1>
    <table style="width:98%">
        <col style="width:2%">
	    <col style="width:10%">
        <col style="width:10%">
        <col style="width:40%">
        <col style="width:10%">
        <col style="width:10%">
	    <col style="width:10%">
        <tr>
            <th scope="col">No</th>
            <th scope="col">product Image</th>
            <th scope="col">Prdouct Name</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Price</th>
            <th scope="col">Product Category</th>
            <th scope="col">Action</th>
        </tr>
        <tr>
            <th scope="row">1</th>
            <th scope="row"><img src="{{ asset('/images/logo.png')}}" alt=""></th>
            <th scope="row">samsung 32</th>
            <th scope="row">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat commodi reprehenderit esse animi sed, voluptas repudiandae rerum voluptates officiis aspernatur unde libero iusto ex culpa? Optio accusantium repellat quidem assumenda.</th>
            <th scope="row">320000</th>
            <th scope="row">Television</th>
            <th scope="row">
                <div class="ButtonI">
                    <button class="Update">Update</button>
                    <button class="Delete">Delete</button>
                </div>
                
            </th>
        </tr>
    </table>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/view_product_list.css") }}">
@endsection