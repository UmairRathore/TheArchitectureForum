<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{('auth/css/Login.css')}}" />
</head>
<body>
<div class="login-wrapper">
    <form method="post" action="{{ route('userregistration') }}" class="custom-form">
        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Display other types of errors -->
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        @csrf
        <p class="custom-form-title">Sign up account</p>
        <div class="input-container">
            <input type="text" name="fname" placeholder="Enter First Name" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="text" name="lname" placeholder="Enter Last Name" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="email" name="email" placeholder="Enter email" />
            <span> </span>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Enter password" />
        </div>
        <div class="input-container">
            <input type="password" name="password_confirmation" placeholder="Enter confirm password" />
        </div>
        <button type="submit" class="submit" style="background-color: black; color: white">Sign up</button>

        <p class="signup-link">
            Already have an account?
            <a href="{{ route('login') }}">Sign in</a>
        </p>
    </form>
</div>
</body>
</html>
