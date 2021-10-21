@extends('layouts/app')

@section('content')
    <p class="title">New Products</p>

    <div class="gallery">
        @foreach($data as $product)
        <div class="gallery-item">
            <div class="gallery-item-top">
                <img src="{{ asset("images/products/" . $product->image_path) }}" alt="">
            </div>
            <div class="gallery-item-bot">
                <div class="gallery-item-bot-title">
                    <p class="gallery-item-bot-title-product">{{$product->name}}</p>
                    <p class="gallery-item-bot-title-category">{{$product->category->name}}</p>
                </div>
                <p class="gallery-item-bot-price"> IDR {{number_format($product->price, 0, ',')}} </p>
                <a class="gallery-item-bot-more" href="/product/{{$product->id}}">More Detail</a>
            </div>
        </div>
        @endforeach
    </div>

    {{ $data->links() }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/search.css") }}">
@endsection