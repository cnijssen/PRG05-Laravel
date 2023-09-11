<!doctype html>
<html lang="en">
<head>
    <title>C&C Sneakers</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="icon" type="image/x-icon" href="/C&C.png">
</head>

<body>

<nav class="header">
    <h1>C&C SNEAKERS</h1>
</nav>

<main>
    <div class="welcome">
        <h1>WELCOME!</h1>
        <p>The online sneaker store for Jordan en Air Max</p>
        <button type="button" onclick="location.href='{{ route('shop')}}'">Visit the shop</button>
    </div>

    <div class="product-card">
        <div class="product">
            <h1>LATEST ADDITION:</h1>
            @php
            $latestProduct = \App\Models\Product::latest()->first();
            @endphp

            @if($latestProduct)
            <a onclick="location.href='{{route('view', ['product' => $latestProduct->id])}}'">
                <img src="{{ asset('img/' . $latestProduct->image) }}" alt="{{ $latestProduct->name }}">
            </a>
            @else
            <h1>Sorry, we're out of stock</h1>
            @endif
            <h2>€ {{$latestProduct->price}}</h2>
        
        </div>
    </div>

</main>

</body>

