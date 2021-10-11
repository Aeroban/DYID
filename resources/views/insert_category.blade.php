@extends('layouts/app')

@section('content')
<div class="insert">
    <div class="insert-form">
        <p>Insert New Category</p>
        <form action="">
            <input type="text" name="" id="" placeholder="Category name">
    
            <input type="submit" value="add">
            
        </form>
    </div>
</div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/insert_category.css") }}">
@endsection