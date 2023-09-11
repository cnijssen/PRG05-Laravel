<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/view.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&C Sneakers</title>

</head>
<body>
<div class="back">
    <button onclick="location.href='{{ route('shop')}}'">< Back</button>
</div>

<main>
    <div class="product-card">
        <div class="product">
            <img src="{{ asset('img/' . $product->image) }}">
        </div>
        <div class="details">
            <h2>{{$product->category}} {{$product->top}} - {{$product->name}}</h2>
            <p>{{$product->gender}} {{$product->size}}</p>
            <h3>€ {{$product->price}}</h3>
            <button class="buy" type="button">Buy Now</button>
        </div>
    </div>

</main>
</body>
</html>