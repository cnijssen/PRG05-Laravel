@include('layouts.app')
<link rel="stylesheet" href="{{asset('css/user.css')}}">

<h1>Register</h1>

<form method="post">
        @csrf 
        @method('put')
        <div class="insert">
            <label>Name</label>
            <input type="text" name="user" autocomplete="off" />
        </div>
        <div class="insert">
            <label>E-mail</label>
            <input type="email" name="email" autocomplete="off" />
        </div>
        <div class="insert">
            <label>Password</label>
            <input type="password" name="password" autocomplete="off" />
        </div>
        <div class="insert">
            <label>Confirm Password</label>
            <input type="password" name="password" autocomplete="off" />
        </div>

        <div class="login">
            <input type="submit" value="Create Account" />
        </div>
</form>



