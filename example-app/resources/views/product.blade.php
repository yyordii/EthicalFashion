<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <script src="{{ mix('public/search.js') }}"></script>
    <script src="https://kit.fontawesome.com/462ee81054.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->category }}</p>
    <a href="/">Back to products</a>
</body>
</html>