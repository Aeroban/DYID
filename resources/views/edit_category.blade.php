@extends('layouts/app')

@section('content')
<div class="edit">
    <div class="edit-form">
        <p>Edit Category</p>
        <form action="">
            <select name="Category" id="Category" class="Category" style="width:700px; height: 40px;">
                <option value="Phone">Phone</option>
                <option value="Television">Television</option>
            </select>
    
            <input type="submit" value="add">
            
        </form>
    </div>
</div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/E_category.css") }}">
@endsection