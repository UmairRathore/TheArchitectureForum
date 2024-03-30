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

                <div class="col-lg-9">
                    @if(isset($User['user']))
                    <div class="user.profile-area">
                        <div class="profile-content d-flex justify-content-between align-items-center">
                            <div class="profile-img">
                                @if(isset($User['user']->profile_image))
                                    <img src="{{asset($User['user']->profile_image)}}" alt="Image">
                                @else
                                    <img src="{{asset('frontend/assets/images/user/profile-img.jpg')}}" alt="Image">
                                @endif
                                <h3>{{$User['user']->name}}</h3>
                                <span>Member Since {{ $User['user']->created_at->format('Y-m-d') }}</span>
                                {{--                                <span>Last seen this week</span>/--}}
                                <span>{{$User['user']->student_or_worker}}</span>
                                <span>{{$User['user']->student_or_worker_workplace}}</span>
                                <span>{{$User['user']->location}}</span>
                                <button class="followers-btn">{{$User['user']->followers}} Followers</button>
                                <button class="followers-btn">{{$User['user']->following}} Following</button>
                            </div>

                            @if(auth()->check() && $User['user']->id == auth()->user()->id)
                                <div class="edit-btn">
                                    <a href="{{route('user.edit.profile')}}" class="default-btn">Edit profile</a>
                                </div>
                            @endif
                        </div>

                        <div class="profile-achive">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-achive">
                                        @if(!$User['user']->answers->isEmpty())
                                        <h2>{{$User['user']->answers}}</h2>
                                        @else
                                        <h2>0</h2>
                                        @endif
                                            <span>Answers</span>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-achive">
                                        @if(!$User['user']->questions->isEmpty())
                                            <h2>{{$User['user']->questions}}</h2>
                                        @else
                                            <h2>0</h2>
                                        @endif
                                        <span>Question</span>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-achive">
                                        <h2>124</h2>
                                        <span>Best answers</span>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-achive">
                                        <h2>2M</h2>
                                        <span>Reached</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(isset($User['user']->about_me))
                            <div class="about">
                                <h3>About</h3>
                                <p>
                                    {{$User['user']->about_me}}
                                </p>
                            </div>
                        @else
                            <div class="about">
                                <h3>About</h3>
                                <span>Hello</span>
                                <p>Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat faucibus orci luctus et ultrices posuere .</p>
                                <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Proin eget tortor risus blandit aliquet elit, eget tincidunt nibh.</p>
                            </div>
                        @endif

                                                <div class="badges">
                                                    <h3>Badges</h3>

                                                    <div class="row justify-content-center">
                                                        <div class="col-xl-3 col-sm-6">
                                                            <div class="single-badges-box">
                                                                <img src="{{asset('frontend/assets/images/badge/badge-3.png')}}" alt="Image">
                                                                <h3>Bronze badges</h3>
                                                                <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="top-tags">
                                                    <div class="tag-title d-flex justify-content-between">
                                                        <h3>Top tags</h3>
                                                        <a href="{{route('tags')}}" class="read-more">View all tags</a>
                                                    </div>

                                                    <ul>
                                                        <li>
                                                            <span class="tag-cate">discussion</span>
                                                            <span class="tag-score">0 score</span>
                                                            <span class="tag-score">0 posts</span>
                                                            <span class="tag-score">0 posts %</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="top-posts">
                                                    <div class="d-flex justify-content-between">
                                                        <h3>Top posts</h3>

                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="view-all-tab" data-bs-toggle="tab" data-bs-target="#view-all" type="button" role="tab" aria-controls="view-all" aria-selected="true">View All</button>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="view-all" role="tabpanel" aria-labelledby="view-all-tab">
                                                            <ul>
                                                                <li class="d-flex justify-content-between">
                                                                    <div class="top-posts-list">
                                                                        <i class="ri-chat-2-fill"></i>
                                                                        <span class="count">21</span>
                                                                        <span>What could be UX design software?</span>
                                                                    </div>
                                                                    @if(auth()->check() && $User['user']->id == auth()->user()->id)
                                                                    <p>
                                                                        <span>8 hours ago</span> by
                                                                        <a href="{{route('user.profile',[auth()->user()->id])}}">
                                                                            Alan Woodson</a>
                                                                    </p>
                                                                    @else
                                                                        <p>
                                                                            <span>8 hours ago</span> by
                                                                            <a href="{{route('user.profile',[$User['user']->id])}}">
                                                                                Alan Woodson</a>
                                                                        </p>
                                                                    @endif


                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->
@endsection
