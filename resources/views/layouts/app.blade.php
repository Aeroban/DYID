<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DYID</title>
    <style>
        /* We will move this to scss later */
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