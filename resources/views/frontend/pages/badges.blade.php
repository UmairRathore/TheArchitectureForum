@extends('layouts.frontend.app')

@section('content')

    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.partials.left-SideBar')
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="middull-content">
                        <ul class="page-nish">
                            <li>
                                <a href="{{route('home')}}">
                                    <i class="ri-home-8-line"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Badges
                            </li>
                        </ul>


                        <div class="badges-area">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="{{asset('frontend/assets/images/badges/badges-1.png')}}" alt="Image">
                                        <h3>Pify love badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="{{asset('frontend/assets/images/badges/badges-2.png')}}" alt="Image">
                                        <h3>Special badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="{{asset('frontend/assets/images/badges/badges-3.png')}}" alt="Image">
                                        <h3>Bronze badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="{{asset('frontend/assets/images/badges/badges-4.png')}}" alt="Image">
                                        <h3>Silver badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="{{asset('frontend/assets/images/badges/badges-5.png')}}" alt="Image">
                                        <h3>Gold badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="{{asset('frontend/assets/images/badges/badges-6.png')}}" alt="Image">
                                        <h3>Platinum badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="right-siderbar">
                        @include('layouts.frontend.partials.right-SideBar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->

@endsection
