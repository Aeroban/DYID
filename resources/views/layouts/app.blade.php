<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <style>
        /* .active{
            color:red;
        } */
    </style> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
{{-- Header --}}
<header>
    @include('layouts/header')
</header>

{{-- yield to get content from another page --}}
@yield('content') 

{{-- Footer --}}
<footer>
    @include('layouts/footer')
</footer>
</body>
</html>