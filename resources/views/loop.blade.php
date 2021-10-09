@extends('layouts/app')

@section('content')
<!--
    Loop 
-->
@for ($i = 0; $i < 5; $i++)
    <p>Loop for {{$i}}</p>
@endfor

@foreach ($names as $name)
    <p>Hello, this is {{$name}}</p>
@endforeach

@forelse ($names as $name)
    <p>Hello, this is {{$name}}</p>
@empty
    <p>There is no names</p>
@endforelse

{{ $i = 0 }}
@while ($i < 3)
    <p>Loop for {{$i}}</p>
    {{ $i++ }}
@endwhile
@endsection