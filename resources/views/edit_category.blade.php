@extends('layouts/app')

@section('content')
<div class="edit">
    <div class="edit-form">
        <p>Edit Category</p>
        <form action="/edit_category/{{$data->id}}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="name" id="" value="{{$data->name}}">
    
            <button type="submit">update</button>
        </form>
    </div>
</div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/edit_category.css") }}">
@endsection