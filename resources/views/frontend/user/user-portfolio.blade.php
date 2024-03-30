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
                @if(auth()->user()->id)
                    <div class="col-lg-9">
                        <div class="edit-profile-area">
                            <div class="profile-content d-flex justify-content-between align-items-center">
                                <div class="profile-img">
                                    @if(auth()->user()->image)
                                        <img src="{{asset(auth()->user()->image)}}" alt="Image">
                                    @else
                                        <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                    @endif
                                    <h3>{{auth()->user()->name}}</h3>
                                    <span>{{auth()->user()->created_at}}</span>
                                    {{--                                <span>Last seen this week</span>/--}}
                                    <span>{{auth()->user()->student_or_worker}}</span>
                                    <span>{{auth()->user()->student_or_worker_workplace}}</span>
                                    <span>Country</span>
                                    <button class="followers-btn">45 Followers</button>
                                    <button class="followers-btn">12 Following</button>
                                </div>

                                <div class="edit-btn">
                                    <button id="openPdfBtn" class="default-btn">Click this to see Portfolio</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($user->id != auth()->user()->id)
                    <div class="col-lg-9">
                        <div class="edit-profile-area">
                            <div class="profile-content d-flex justify-content-between align-items-center">
                                <div class="profile-img">
                                    @if($user->image)
                                        <img src="{{asset($user->image)}}" alt="Image">
                                    @else
                                        <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                    @endif
                                    <h3>{{$user->name}}</h3>
                                    <span>{{$user->created_at}}</span>
                                    {{--                                <span>Last seen this week</span>/--}}
                                    <span>{{$user->student_or_worker}}</span>
                                    <span>{{$user->student_or_worker_workplace}}</span>
                                    <span>Country</span>
                                    <button class="followers-btn">45 Followers</button>
                                    <button class="followers-btn">12 Following</button>
                                </div>

                                <div class="edit-btn">
                                    {{--                                <a href="{{route('user.edit.profile')}}" class="default-btn">--}}
                                    Edit profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endif
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var openPdfBtn = document.getElementById('openPdfBtn');

            openPdfBtn.addEventListener('click', function () {
                var pdfPath = 'path/to/your/pdf/file.pdf';

                window.open('/pdf-viewer?url=' + encodeURIComponent(pdfPath), '_blank');
            });
        });

    </script>

@endsection
