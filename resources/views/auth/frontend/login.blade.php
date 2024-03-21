
@extends('layouts.frontend.app')

@section('content')



<!-- Start Page title Area -->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-4">
                <div class="page-title-content">
                    <h2>Login</h2>
                </div>
            </div>

            <div class="col-lg-6 col-md-8">
                <div class="page-title-list">
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="active">
                            Login
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page title Area -->

<div class="login-area ptb-100">
    <div class="container">
        <form class="user-form">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <a href="https://www.google.com/" target="_blank" class="or-login google">
                        Google
                    </a>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <a href="https://www.facebook.com/" target="_blank" class="or-login facebook">
                        Facebook
                    </a>
                </div>

                <div class="col-12">
                    <span class="or">Or</span>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>User name or email</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                </div>

                <div class="col-12">
                    <div class="login-action">
                        <span class="forgot-login">
									<a href="register.html">Forgot Password?</a>
								</span>
                    </div>
                </div>

                <div class="col-12">
                    <button class="default-btn" type="submit">
                        Log In
                    </button>
                </div>

                <div class="col-12">
                    <p class="create">Don't have an account? <a href="sign-up.html">Sign Up</a></p>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
