<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/C&C.png') }}">
    <title>C&C Sneakers</title>
</head>
<body>

<nav class="header">
    <h2>C&C SNEAKERS</h2>
    <a class="logo" href="{{route('home')}}"><img src="{{ asset('img/C&C.png') }}"></a>
    <nav class="links">
        <a class="shop" onclick="location.href='{{route('shop')}}'">Shop</a>
        <a class="about" onclick="location.href='{{route('about')}}'">About</a>
        <a class="login" onclick="location.href='{{route('login')}}'">Login</a>
    </nav>
    <div class="profile">
            <img src="{{ asset('img/Profile.jpg') }}" onclick="location.href='{{route('profile')}}'">
    </div>
</nav>
</body>
</html>