<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>products</h1>
    {{-- use double curly brackets for variable --}}
    {{-- <p>{{ $title }}</p> --}}
    {{-- <p>{{ $description }}</p> --}}

    {{-- Looping every item in data --}}
    {{-- @foreach($data as $item)
        <p>{{ $item }}</p>
    @endforeach --}}

    <p>{{ $products }}</p>
</body>
</html>