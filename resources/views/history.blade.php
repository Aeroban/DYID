@extends('layouts/app')


@section('content')
<div class="panel-group" id="accordion">
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
</div>
<script type="text/javascript" src="{{ URL::asset('js/slider.js') }}"></script>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/history.css") }}">
@endsection