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
        <tr>
            <th scope="row">1</th>
            <th scope="row">Television</th>
            <th scope="row">
                <button class="Update">Update</button>
                <button class="Delete">Delete</button>
            </th>
        </tr>
    </table>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset("css/ManageCategory.css") }}">
@endsection