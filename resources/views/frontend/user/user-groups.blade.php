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
                                Groups
                            </li>
                        </ul>


                        <div class="group-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="{{asset('frontend/assets/images/group/group-1.jpg')}}" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="{{asset('frontend/assets/images/group/sub-1.jpg')}}" alt="Image">
                                                <h3>Education</h3>
                                                <span>Public group</span>
                                            </div>

                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <h4>10</h4>
                                                    <span>Post</span>
                                                </li>
                                                <li>
                                                    <h4>5</h4>
                                                    <span>User</span>
                                                </li>
                                            </ul>

                                            <button class="group-btn">
                                                Join group
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="{{asset('frontend/assets/images/group/group-2.jpg')}}" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="{{asset('frontend/assets/images/group/sub-2.jpg')}}" alt="Image">
                                                <h3>Graphic design</h3>
                                                <span>Public group</span>
                                            </div>

                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <h4>25</h4>
                                                    <span>Post</span>
                                                </li>
                                                <li>
                                                    <h4>9</h4>
                                                    <span>User</span>
                                                </li>
                                            </ul>

                                            <button class="group-btn">
                                                Join group
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="{{asset('frontend/assets/images/group/group-3.jpg')}}" alt="Image">
                                            <span>10 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="{{asset('frontend/assets/images/group/sub-3.jpg')}}" alt="Image">
                                                <h3>Development</h3>
                                                <span>Public group</span>
                                            </div>

                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <h4>17</h4>
                                                    <span>Post</span>
                                                </li>
                                                <li>
                                                    <h4>3</h4>
                                                    <span>User</span>
                                                </li>
                                            </ul>

                                            <button class="group-btn">
                                                Join group
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="{{asset('frontend/assets/images/group/group-4.jpg')}}" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="{{asset('frontend/assets/images/group/sub-4.jpg')}}" alt="Image">
                                                <h3>Education</h3>
                                                <span>Public group</span>
                                            </div>

                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <h4>9</h4>
                                                    <span>Post</span>
                                                </li>
                                                <li>
                                                    <h4>4</h4>
                                                    <span>User</span>
                                                </li>
                                            </ul>

                                            <button class="group-btn">
                                                Join group
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="{{asset('frontend/assets/images/group/group-5.jpg')}}" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="{{asset('frontend/assets/images/group/sub-5.jpg')}}" alt="Image">
                                                <h3>Education</h3>
                                                <span>Public group</span>
                                            </div>

                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <h4>13</h4>
                                                    <span>Post</span>
                                                </li>
                                                <li>
                                                    <h4>2</h4>
                                                    <span>User</span>
                                                </li>
                                            </ul>

                                            <button class="group-btn">
                                                Join group
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="{{asset('frontend/assets/images/group/group-6.jpg')}}" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="{{asset('frontend/assets/images/group/sub-6.jpg')}}" alt="Image">
                                                <h3>Travel</h3>
                                                <span>Public group</span>
                                            </div>

                                            <ul class="d-flex justify-content-between">
                                                <li>
                                                    <h4>16</h4>
                                                    <span>Post</span>
                                                </li>
                                                <li>
                                                    <h4>6</h4>
                                                    <span>User</span>
                                                </li>
                                            </ul>

                                            <button class="group-btn">
                                                Join group
                                            </button>
                                        </div>
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
