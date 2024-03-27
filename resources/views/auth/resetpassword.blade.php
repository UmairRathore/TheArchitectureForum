<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>
    <link rel="stylesheet" href="{{asset('auth/css/Login.css')}}" />
</head>
<body>
<div class="login-wrapper">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <form method="post" action="{{ route('submitresetpassword') }}" class="custom-form">
        @csrf
        <p class="custom-form-title">Enter email and new password</p>
        <div class="input-container">
            <input type="email" name="email" placeholder="Enter email" />
            <input type="hidden" name="token" value="{{$token}}" placeholder="Enter email" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <div class="input-container">
            <input type="password" name="password_confirmation" placeholder="Enter confirm password" />
        </div>
        <button type="submit" class="submit" style="background-color: black; color: white">Reset password</button>


    </form></div>
</body>
</html>
