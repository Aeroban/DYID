@extends('layouts/app')

@section('content')
   <div class="mycart">
       <p class="mycart-title">My Cart</p>
        <div class="mycart-gallery">
            @for ($i = 0; $i < 2; $i++)
            <div class="mycart-gallery-item">
                <div class="mycart-gallery-item-left">
                    <img src="{{ asset("storage/LGFHDTVSignage.png")}}" alt="">
                </div>
                <div class="mycart-gallery-item-right">
                    <div class="mycart-gallery-item-right-product">
                        <p class="mycart-gallery-item-right-product-name">LG 43 FHD TV Signage</p>
                        <p class="mycart-gallery-item-right-product-value">(IDR 8,500,000)</p>
                    </div>
                    <p  class="mycart-gallery-item-right-quantity">x2 pcs</p>
                    <p  class="mycart-gallery-item-right-subtotal">IDR 17,000,000</p>
                    <div class="mycart-gallery-item-right-button">
                        <button class="mycart-gallery-item-right-button-edit">Edit</button>
                        <button class="mycart-gallery-item-right-button-del">Delete</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <strong>Total Price:</strong>
        <div class="mycart-price">
            <p class="mycart-price-val">IDR 34,000,000</p>
            <button>Checkout(3)</button>
        </div>
   </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/cart.css")}}">
@endsection