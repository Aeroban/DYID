<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>DYID</title>
    <style>
        /* Making sure of fullsize */
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            min-height: 100%;
            overflow-x:hidden;
        }

        body{
            background-color: rgb(235, 235, 235);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        footer,header, .content{
            padding: 0px;
            margin: 0px;
        }

        .content{
            min-height: calc(100vh - 137px - 114px);
        }
    </style>

    @yield('style')
</head>
<body>
    
{{-- Header --}}
<header>
    @include('layouts/header')
</header>

{{-- yield to get content from another page --}}
<div class="content">
    @yield('content') 
</div>

{{-- Footer --}}
<footer>
    @include('layouts/footer')
</footer>
</body>
</html>