
@extends('layouts.frontend.app')

@section('content')

    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.components.leftSideBar')
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
                                Communities
                            </li>
                        </ul>



                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/programing.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Programmers</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/education.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Education</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Unfollow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/graphic-design.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Graphic design</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/woman.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Physical fitness</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/language.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Language</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/history.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">History</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/sports.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Sports</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/computer-science.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Computer science</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/management.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Management</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/technology.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Technology</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/company.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Company</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/data-science.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Data science</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/analytics.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Analytics</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box">
                                    <img src="{{asset('frontend/assets/images/communities/video-production.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Video production</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6">
                                <div class="single-communities-box mb-0">
                                    <img src="{{asset('frontend/assets/images/communities/engineering.png')}}" alt="Image">
                                    <h3>
                                        <a href="{{route('communities')}}">Engineering</a>
                                    </h3>
                                    <ul class="d-flex justify-content-between">
                                        <li>538 Followers</li>
                                        <li>
                                            <button class="active">Follow</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="right-siderbar">
                        @include('layouts.frontend.components.rightSideBar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->

@endsection
