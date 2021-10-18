@extends('layouts/app')

@section('content')
<div class="insert">
    <div class="insert-form">
        <p>Insert New Category</p>
        <form action="/insert_category" method="POST">
            @csrf

            <input type="text" name="name" id="" placeholder="Category name">
            <input type="submit" value="add">
        </form>
    </div>

    @if ($errors->any())
        <div class="">
            {{-- Loop over ALL errors --}}
            @foreach ($errors->all() as $error)
                <li style="color: red">{{$error}}</li>
            @endforeach
        </div>
    @endif
</div>


@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/insert_category.css") }}">
@endsection