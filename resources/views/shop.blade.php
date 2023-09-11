<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&C Sneakers</title>
</head>
<body>
<nav class="header">
        <h1>C&C SNEAKERS</h1>
        <a class="logo" href="{{route('home')}}"><img src="img/C&C.png"></a>
        <nav class="links">
            <a href='shop'>Shop</a>
            <a href='about'>About</a>
        </nav>
    </nav>

    <form id="form">
        <input type="search" id="query" name="q" placeholder="Search...">
        <button>Search</button>
    </form>

    <div class="profile">
        <img src="img/Profile.jpg">
    </div>

    <div class="filter1">
        <button class="men">Men's</button>
        <button class="women">Women's</button>
    </div>

    <div class="filter2">
        <button>Air Jordan</button>
        <button>Air Max</button>
        <button>Low</button>
        <button>High</button>
    </div>

    <div class="line"></div>
    
        <div class="sneaker-list">
            @foreach($products->sortByDesc('created_at') as $product)
            <div class="card">
                <img src="img/{{$product->image}}">
                <h2>{{$product->category}} {{$product->top}}<br>{{$product->name}}</h2>
                <p>{{$product->gender}} {{$product->size}}</p>
                <button onclick="location.href='{{route('view', ['product' => $product])}}'">View</button>
                <button onclick="location.href='{{route('product.edit', ['product' => $product])}}'">Edit</button>
                <h3>€ {{$product->price}}</h3>
                <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                </form>
            </div>
            @endforeach
        </div>

    <div class="create">
        <button onclick="location.href='{{route('product.create')}}'">Add New Product</button>
    </div>


    <nav class="footer">
        <h1>C&C Sneakers</h1>
        <p>CONTACT</p>
        <p>cenc.sneakers@gmail.com</p>
    </nav>
    
</body>
</html>
