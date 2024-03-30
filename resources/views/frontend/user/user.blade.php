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
                                User
                            </li>
                        </ul>
                        <div class="wew-user-area">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">

                                        @if(isset($users))

                                            @foreach($users as $user)
                                                <div class="single-new-user">
                                                    <div class="d-flex align-items-center">
                                                        @if($user->profile_image)
                                                            <div class="flex-shrink-0">
                                                                <img src="{{asset($user->profile_image)}}" alt="Image" style="size: 20px 10px">
                                                            </div>
                                                        @else
                                                            <div class="flex-shrink-0">
                                                                <img src="{{asset('frontend/assets/images/user/user-15.jpg')}}" alt="Image">
                                                            </div>
                                                        @endif

                                                        <div class="flex-grow-1 ms-3">
                                                            <h3>
                                                                <a href="{{route('user.profile',$user->id)}}">{{$user->name}}</a>
                                                            </h3>
                                                            <p>{{$user->country}}</p>
                                                        </div>
                                                    </div>

                                                    <ul class="d-flex justify-content-between align-items-center">
                                                        <li>
                                                            @if(isset($user->questionsCount))
                                                                <p><span>{{$user->questionsCount}}</span> questions</p>
                                                            @else
                                                                <p><span>0</span> questions</p>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <a href="{{route('user.profile',$user->id)}}">{{$user->name}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endforeach

                                        @else

                                            <p>No users found.</p>
                                        @endif
                                        @if($users->count() < 5)
                                            <!-- Placeholder rows to maintain layout -->
                                            @for($i = $users->count(); $i < 5; $i++)
                                                <div class="single-new-user" style="border: none;">
                                                    <!-- Placeholder content -->
                                                </div>
                                            @endfor
                                        @endif

                                        <div class="pagination-area mt-0">
                                            <!-- Pagination -->
                                            <!-- Previous Page Link -->
                                            @if ($users->onFirstPage())
                                                <span class="disabled page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </span>
                                            @else
                                                <a href="{{ $users->previousPageUrl() }}" class="page-numbers">
                                                    <i class="ri-arrow-left-line"></i>
                                                </a>
                                            @endif

                                            <!-- Pagination Elements -->
                                            @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                                <a href="{{ $url }}" class="page-numbers{{ $page === $users->currentPage() ? ' current' : '' }}">
                                                    {{ $page }}
                                                </a>
                                            @endforeach

                                            <!-- Next Page Link -->
                                            @if ($users->hasMorePages())
                                                <a href="{{ $users->nextPageUrl() }}" class="next page-numbers">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            @else
                                                <span class="disabled page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </span>
                                            @endif
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
