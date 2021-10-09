@extends('layouts/app')

@section('content')
<h1>This is a the about page</h1>

@if (5 > 10)
    <p>True right</p>
@elseif(5 == 10)
    <p>5 is equal to 10</p>
@else
    <p>All conditions are wrong!</p>
@endif

@unless (empty($name))
    <p>Name is not empty!</p>
@endunless

@empty($secondName)
    <p>Second name is empty</p>
@endempty

@isset($name)
    <p>Name has been set</p>
@endisset

{{-- Switch statements --}}
<!--
    Comparing multiple possible conditions 
-->

@switch($name)
    @case('Accounting')
        <p>I count money</p>
        @break
    @case('Engineer')
        <p>I solve everything</p>
        @break
    @case('Doctor')
        <p>I heal people</p>
    @break
    @default
        <p>Not in the company</p>
        
@endswitch

@endsection