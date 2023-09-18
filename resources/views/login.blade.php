@include('layouts.app')
<link rel="stylesheet" href="{{asset('css/user.css')}}">

<h1>Login</h1>

<form method="post">
        @csrf 
        @method('put')
        <div class="insert">
            <label>E-mail</label>
            <input type="email" name="name" autocomplete="off" />
        </div>
        <div class="insert">
            <label>Password</label>
            <input type="password" name="name" autocomplete="off" />
        </div>

        <div class="login">
            <input type="submit" value="Login" />
        </div>
</form>


<h2>No account yet? Join us here:</h2>
<div class="register">
    <button onclick="location.href='{{ route('register') }}'">Register</button>
</div>



