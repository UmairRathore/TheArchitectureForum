<!doctype html>
<html lang="zxx">
<head>
    @include('layouts.frontend.head')
</head>

<body>
<!-- Start Preloader Area -->
{{--<div class="preloader" id="loader-style">--}}
{{--    <div class="preloader-wrap">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
  @include('layouts.frontend.navbar')
</div>
<!-- End Navbar Area -->
@yield('content')

@include('layouts.frontend.footer')





<!-- Start Log In Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
											<a href="{{asset('forgetpassword')}}">Forgot Password?</a>
										</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Log In
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">Don't have an account? <a href="{{route('register')}}">Join us </a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enad Log In Modal -->

<!-- Start Sign Up Modal -->
<div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                                <label>User name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="name">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="{{route('terms.conditions')}}">Terms of Use</a> and <a href="{{route('privacy.policy')}}">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Sign up
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">Already on disilab?  <a href="{{route('login')}}">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enad Sign Up Modal -->

<!-- Start Log In Modal -->
<div class="modal fade" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Log In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
											<a href="{{asset('forgetpassword')}}">Forgot Password?</a>
										</span>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Log In
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enad Log In Modal -->

<!-- Start Sign Up Modal -->
<div class="modal fade" id="exampleModal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                                <label>User name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="name">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
                                    <label class="form-check-label" for="flexCheckDefault-2">
                                        I agree to the <a href="{{route('terms.conditions')}}">Terms of Use</a> and <a href="{{route('privacy.policy')}}">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                Sign up
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="create">Already on disilab?  <a href="{{route('login')}}">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enad Sign Up Modal -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-fill"></i>
    <i class="ri-arrow-up-s-fill"></i>
</div>
<!-- End Go Top Area -->





<!-- Links of JS File -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/toastr.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/meanmenu.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/metismenu.js')}}"></script>
<script src="{{asset('frontend/assets/js/editor.js')}}"></script>
<script src="{{asset('frontend/assets/js/like-dislike.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>
</html>
