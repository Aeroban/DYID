@extends('layouts/app')

@section('content')
    <p class="title">New Products</p>

    <div class="gallery">
        @for ($i = 0; $i < 6; $i++)
        <div class="gallery-item">
            <div class="gallery-item-top">
                <img src="{{ asset("storage/LGFHDTVSignage.png") }}" alt="">
            </div>
            <div class="gallery-item-bot">
                <div class="gallery-item-bot-title">
                    <p class="gallery-item-bot-title-product">LG 43 FHD TV Signage</p>
                    <p class="gallery-item-bot-title-category">Television</p>
                </div>
                <p class="gallery-item-bot-price"> IDR 8,500,000 </p>
                <button class="gallery-item-bot-more">More Detail</button>
            </div>
        </div>
        @endfor
        
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
@endsection