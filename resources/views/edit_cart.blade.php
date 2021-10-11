@extends('layouts/app')

@section('content')
<div class="edit_cart">
    <div class="edit_cart-left">
        <img src="{{ asset('storage/iphonexs.png')}}" alt=""></th>
    </div>
    <div class="edit_cart-right">
        <h1 class="edit_cart-right-title">Iphone Xs</h1>
        <hr>
        <h1 class="edit_cart-right-subtitle">Price:</h1>
        <p>ID 14.999.000</p>
        <hr>
        <h1 class="edit_cart-right-subtitle">Description:</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, minima! Porro sint pariatur inventore animi aperiam similique molestias reprehenderit officiis, nulla impedit dolores deserunt, natus, ea quibusdam magni earum enim?</p>
        <hr>

        <form action="" class="edit_cart-right-form">
            <label for="item_quantity">Qty:</label>
            <input type="number">
            <input type="submit" value="Save">
        </form>
    </div>
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/edit_cart.css")}}">
@endsection