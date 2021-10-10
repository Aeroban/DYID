@extends('layouts/app')

@section('content')
<div class="login">
    <div class="login-form">
        <p>Welcome Back</p>
        <form action="">
            <input type="text" name="" id="" placeholder="Email">
            <input type="password" name="" id="" placeholder="Password">

            <div class="login-form-remember">
                <input type="checkbox" name="" id="">
                <label for="">Remember me</label>
            </div>
            
            <input type="submit" value="Login">
        </form>
    </div>
    
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection