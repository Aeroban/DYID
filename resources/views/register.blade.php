@extends('layouts/app')

@section('content')
<div class="register">
    <div class="register-form">
        <p>Join With Us</p>
        <form action="">
            <input type="text" name="" id="" placeholder="Full Name">

            <label>Gender</label>
            <div class="register-form-gender">
                <input type="radio" name="reg_gender" id="reg_male">
                <label for="reg_male">Male</label>
                <input type="radio" name="reg_gender" id="reg_female">
                <label for="reg_female">Female</label>
            </div>

            <textarea name="" id="" cols="30" rows="10" placeholder="Address"></textarea>
            <input type="text" name="" id="" placeholder="Email">
            <input type="password" name="" id="" placeholder="Password">
            <input type="password" name="" id="" placeholder="Confirm password">

            <div class="register-form-agree">
                <input type="checkbox" name="" id="">
                <label for="">I agree with terms & conditions</label>
            </div>
            
            <input type="submit" value="Register Now">
        </form>
    </div>
    
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection