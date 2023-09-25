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
            <h4>Sneaker listed by: <span>Corné Nijssen</span></h4>
            <h2>Nike {{$product->category}} {{$product->top}}<br><span1>{{$product->name}}</span1></h2>
            <p>{{$product->gender}} {{$product->size}}</p>
            <h3>€{{$product->price}}</h3>
            <button class="buy" type="button">Buy Now</button>
        </div>
    </div>
</main>
