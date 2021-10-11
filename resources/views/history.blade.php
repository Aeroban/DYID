@extends('layouts/app')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<head>
    <meta name="viewport" content2="width=device-width, initial-scale=1">
</head>


@section('content')
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                2021-03-25 09:16:25
            </a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="table">
                <div class="image">
                    <img src="{{ asset('/images/logo.png')}}" alt="">
                </div>
                <div class="desc">
                    Iphonec XR  
                    <sup>
                      IDR 11.000.000  
                    </sup>
                    <br>
                    X2pcs
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
  
  {{-- <p>A Collapsible:</p>
    <button type="button" class="collapsible">Open Collapsible</button>
    <div class="content2">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div> --}}

@endsection



@section('style')
    <link rel="stylesheet" href="{{ asset("css/history.css") }}">
@endsection