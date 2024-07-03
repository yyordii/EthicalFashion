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
    <div class="sale-banner">
        <div class="text-container">
            <span class="moving-text">SALE! 50% OFF</span>
        </div>
    </div>
    <header id="header-main">
        <div id="header-main-container">
            <div id="header-top-row">
                <div id="header-contact-section">
                    <a id="header-contact-element" href="{{ route('contact.show') }}">Contact us</a>
                </div>
                <div id="header-logo-section">
                    <a href="{{ url('/') }}">
                        <img id="header-logo-element" src="{{ asset('img/YS.png') }}" alt="YS">
                    </a>
                </div>
                <div id="header-buttons-section">
                    <a href="{{ route('login') }}">Log in</a>
                    <a href="{{ route('register') }}">Register</a>
                    <button id="header-search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <div id="searchBar" class="hidden">
                        <input type="text" placeholder="Search">
                    </div>
                    <button id="header-heart-button"><i class="fa-regular fa-heart"></i></button>
                    <button id="header-cart-button"><a><i class="fa-solid fa-cart-shopping"></i></a></button>
                </div>
            </div>
            <div id="header-bottom-row">
                <a href="#">NEW IN</a>
                <a href="#">MEN</a>
                <a href="#">WOMAN</a>
                <a href="#">KIDS</a>
                <a href="#">EYEWEAR</a>
                <a href="#">SPECIAL ITEMS</a>
            </div>
        </div>
    </header>
    <section class="image-container">
         <div id="homepage-main-image"><!-- Image -->
        </div>
    </section>
    <section id="homepage-new-in">
        <h2 id="homepage-new-in-header">
            New In
        </h2>
        <div id="homepage-new-in-products" class="slider-horizontal">
        @foreach ($products as $product)
            @if ($product->category === 'new')
            <a href="{{ route('product.show', $product->id) }}">
                <button class="homepage-product">
                @php
                    $images = json_decode($product->images);
                    $firstImage = $images->images[0]; // Get the first image object
                @endphp
                <img src="{{ $firstImage->url }}" alt="{{ $firstImage->title }}">
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->price }}</p>
                    <p>{{ $product->category }}</p>
                </button>
            </a>
            @endif
        @endforeach
        </div>
    </section>
    <section class="image-container">
        <div id="homepage-new-in-image"></div>
    </section>
    <section id="homepage-men">
        <h2 id="homepage-men-header">
            Men
        </h2>
        <div id="homepage-men-products" class="slider-horizontal">
        @foreach ($products as $product)
    @if ($product->demographic === 'men')
    @php
        $productLink = route('product.show', $product->id);
    @endphp
            <button class="homepage-product" onclick="window.location.href='{{ $productLink }}';">
            @php
                $images = json_decode($product->images);
                $firstImage = $images->images[0]; // Get the first image object
            @endphp
            <img src="{{ $firstImage->url }}" alt="{{ $firstImage->title }}">
            <p>{{ $product->name }}</p>
            <p>{{ $product->price }}</p>
            <p>{{ $product->category }}</p>
        </button>
    @endif
@endforeach
            
        </div>
    </section>
    <section class="image-container">
        <div id="homepage-men-image"></div>
    </section>
    <section id="homepage-women">
        <h2 id="homepage-women-header">
            Women
        </h2>
        <div id="homepage-women-products" class="slider-horizontal">
        @foreach ($products as $product)
            @if ($product->demographic === 'women')
            <button class="homepage-product">
                @php
                    $images = json_decode($product->images);
                    $firstImage = $images->images[0]; // Get the first image object
                @endphp
                <img src="{{ $firstImage->url }}" alt="{{ $firstImage->title }}">
                    <p>{{ $product->name }}</p>
                    <p>{{ $product->price }}</p>
                    <p>{{ $product->category }}</p>
                </button>
            @endif
        @endforeach
        </div>
    </section>
</body>
</html>
