
@extends('layouts.frontend.app')

@section('content')


    <!-- Start Page title Area -->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="page-title-content">
                        <h2>404!</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
                    <div class="page-title-list">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                404!
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page title Area -->

    <!-- Start 404 Error Page Area -->
    <div class="error-area ptb-100">
        <div class="container">
            <div class="error-content">
                <img src="assets/images/404.png" alt="Image">

                <a href="index.html" class="default-btn">
                    Go To Home
                </a>
            </div>
        </div>
    </div>
    <!-- End 404 Error Page Area -->

@endsection
