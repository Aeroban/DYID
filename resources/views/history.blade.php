@extends('layouts/app')


@section('content')


@forelse ($user_history as $transaction_header)
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
        <div class="panel-heading">
            <button class="panel-heading-accordion">{{$transaction_header->created_at}}</button>
            <div class="panel-heading-accordion-description">
                @foreach ($transaction_header->products as $product)
                <div class="table">
                    <div class="image">
                        <img src= "{{ url('storage/images/products/'. $product->image_path)}}" alt="" width="150" height="100">
                    </div>
                    <div class="desc">
                        {{$product->name}}  
                        <sup>
                            (IDR {{number_format($product->price, 0, ',', ' ')}})  
                        </sup>
                        <div class="peace">
                            {{ $product->pivot->quantity}} pcs
                        </div>
                    </div>
                    <div class="price">
                        <span>
                            IDR {{number_format($product->price, 0, ',', ' ')}}
                        </span>
                    </div>
                </div>
                @endforeach
                <div class="totalprice">
                    <sub>
                        <b>Total Price: IDR {{number_format($transaction_header->total_price, 0, ',', ' ')}}</b>
                    </sub>    
                </div>
            </div>
        </div>
        </div>
    </div>    
         
@empty
    <h1> No data</h1>
@endforelse


{{-- <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <button class="panel-heading-accordion">2021-03-25 09:16:25</button>
        <div class="panel-heading-accordion-description">
            <div class="table">
                <div class="image">
                    <img src="{{ asset('/storage/iphonex.png')}}" alt="">
                </div>
                <div class="desc">
                    Iphonec XR  
                    <sup>
                      IDR 11.000.000  
                    </sup>
                    <div class="peace">
                        X2pcs
                    </div>
                </div>
                <div class="price">
                    IDR 11.000.000
                </div>
            </div>
            <div class="totalprice">
                <sub>
                    total price IDR 11.000.000
                </sub>    
            </div>
        </div>
      </div>
    </div>
</div> --}}

<script type="text/javascript" src="{{ URL::asset('js/slider.js') }}"></script>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/history.css") }}">
@endsection