@extends('layouts/app')

@section('content')
<div class="insert">
    <div class="insert-form">
        <p class="insert-form-name">Insert New Category</p>
        <form action="/category/insert" method="POST">
            @csrf

            <input type="text" name="name" id="" placeholder="Category name">
            <input type="submit" value="add">
        </form>


        <div class="insert-form-error">
            @if ($errors->any())
                <div class="insert-form-error-loop">
                    {{-- Loop over ALL errors --}}
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                        <br> 
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/insert_category.css") }}">
@endsection