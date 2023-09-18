@include('layouts.app')

<link rel="stylesheet" href="{{asset('css/view.css')}}">

<div class="back">
    <button onclick="location.href='{{ url()->previous() }}'">< Back</button>
</div>

<main>
    <div class="product-card">
        <div class="product">
            <img src="{{ asset('img/' . $product->image) }}">
        </div>
        <div class="details">
            <h2>{{$product->category}} {{$product->top}} {{$product->name}}</h2>
            <p>{{$product->gender}} {{$product->size}}</p>
            <h3>€{{$product->price}}</h3>
            <button class="buy" type="button">Buy Now</button>
        </div>
    </div>
</main>
