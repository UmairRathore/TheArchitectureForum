<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{('auth/css/Login.css')}}" />
</head>
<body>
<div class="login-wrapper">
    <form method="post" action="{{ route('postlogin') }}" class="custom-form">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
        @csrf
        <p class="custom-form-title">Sign in to your account</p>
        <div class="input-container">
            <input type="email" name="email" placeholder="Enter email" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <button type="submit" class="submit" style="background-color: black; color: white">Sign in</button>

        <p class="signup-link">
            No account?
            <a href="{{ route('register') }}">Register Account Here</a>

        </p>

        <p class="signup-link">
            Forgot Password?
            <a href="{{ route('forgetpassword') }}">Recover Password</a>
        </p>
    </form></div>
</body>
</html>
