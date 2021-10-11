@extends('layouts/app')

@section('content')
    <div class="TableForContent">
        <div class="image">
            <img src="{{ asset('/images/logo.png')}}" alt=""></th>
        </div>
        <div class="textDescript">
            <h1>Samsung s21</h1>
            <hr>
            <h1>Category</h1>
            <br>
            smartphone
            <hr>
            <h1>Price</h1>
            <br>
            ID 14.999.000
            <hr>
            <h1>Description:</h1>
            <br>
            Witness blablabla
            <hr>
            <br>

            <button class="Login">Login to buy</button>
        </div>
    </div>
@endsection


@section('style')
    <link rel="stylesheet" href="{{ asset("css/detail_product_page.css") }}">
@endsection