@extends('layouts/app')

@section('content')
<div class="edit">
    <div class="edit-form">
        <p>Edit Category</p>
        <form action="">
            <input type="text" name="" id="" placeholder="Category name">
    
            <input type="submit" value="add">
            
        </form>
    </div>
</div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/E_category.css") }}">
@endsection