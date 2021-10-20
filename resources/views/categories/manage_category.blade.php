@extends('layouts/app')

@section('content')
    <h1>Manage Category</h1>
    <table style="width:96%">
        <col style="width:2%">
	    <col style="width:70%">
	    <col style="width:20%">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
        </tr>
        @foreach ($data as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <th scope="row">{{$category->name}}</th>
                <th scope="row">
                    <a href="/category/edit/{{$category->id}}">Update</a> 

                    <form action="/category/delete/{{$category->id}}" method="POST">
                        @csrf
                        @method("delete")
                        <button type = "submit" class="Delete">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/manage_category.css") }}">
@endsection