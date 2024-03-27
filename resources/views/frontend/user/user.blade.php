
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
                                User
                            </li>
                        </ul>



                        <div class="wew-user-area">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-15.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Marilyn Grant</a>
                                                </h3>
                                                <p>United Kingdom</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>394</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-16.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Jeremy Conant</a>
                                                </h3>
                                                <p>Italy</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>333</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-17.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Amy Stearns</a>
                                                </h3>
                                                <p>California</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>318</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-18.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Alpha Gabriel</a>
                                                </h3>
                                                <p>Seattle, USA</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>14</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-19.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Darlene Robles</a>
                                                </h3>
                                                <p>Australia</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>44</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-20.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Joan Jones</a>
                                                </h3>
                                                <p>Thailand</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>84</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-21.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Gordon Wasser</a>
                                                </h3>
                                                <p>Virginia Beach</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>94</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-22.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Charles Shaw</a>
                                                </h3>
                                                <p>Nederland</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>33</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-23.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Keith Fisher</a>
                                                </h3>
                                                <p>United Kingdom</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>312</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-24.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">John Mathis</a>
                                                </h3>
                                                <p>Seattle, USA</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>39</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-25.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Emma Desai</a>
                                                </h3>
                                                <p>Trent, USA</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>54</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-26.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Stephen Felix</a>
                                                </h3>
                                                <p>Edinburgh, UK</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>34</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-27.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Darrell Elia</a>
                                                </h3>
                                                <p>Russia</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>34</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-28.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Ellen Jasper</a>
                                                </h3>
                                                <p>Ireland</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>94</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-29.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Kevin Paul</a>
                                                </h3>
                                                <p>Chile</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>99</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-30.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Randall Bell</a>
                                                </h3>
                                                <p>Philadelphia</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>59</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-30.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Kim Perez</a>
                                                </h3>
                                                <p>Italy</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>77</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-31.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Amanda Hess</a>
                                                </h3>
                                                <p>USA</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>259</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-32.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Eileen Lynch</a>
                                                </h3>
                                                <p>Netherlands</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>394</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="single-new-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('frontend/assets/images/user/user-33.jpg')}}" alt="Image">
                                            </div>

                                            <div class="flex-grow-1 ms-3">
                                                <h3>
                                                    <a href="{{route('user.profile')}}">Terry Speer</a>
                                                </h3>
                                                <p>United States</p>
                                            </div>
                                        </div>

                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <p><span>357</span> questions</p>
                                            </li>
                                            <li>
                                                <a href="{{route('user.profile')}}" class="default-btn">Follow</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="pagination-area mt-0">
                                        <a href="{{route('user')}}" class="next page-numbers">
                                            <i class="ri-arrow-left-line"></i>
                                        </a>
                                        <span class="page-numbers current" aria-current="page">1</span>
                                        <a href="{{route('user')}}" class="page-numbers">2</a>
                                        <a href="{{route('user')}}" class="page-numbers">3</a>

                                        <a href="{{route('user')}}" class="next page-numbers">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
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
