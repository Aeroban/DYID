@extends('layouts/app')

@section('content')
<h1>This is a the index page</h1>
<img src="{{ URL('images/logo.png') }}" alt="">
<img src="{{ URL('storage/LGFHDTVSignage.png')}}" alt="">

{{-- asset only look in the public directory --}}
<img src="{{ asset('storage/iphonexs.png')}}" alt="">
@endsection