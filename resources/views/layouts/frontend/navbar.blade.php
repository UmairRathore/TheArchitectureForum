<div class="mobile-responsive-nav">
    <div class="container">
        <div class="mobile-responsive-menu">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('frontend/assets/logo.jpg')}}" alt="logo">
{{--                    <img src="{{asset('frontend/assets/rotatedlogo.jpg')}}" alt="logo">--}}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="desktop-nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <div style="position: absolute; left: 20px; top: 40px; z-index: 1000; border: 3px solid white; padding: 0; margin: 0; width: 120px; height: 115px">
                <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend/assets/logo.jpg') }}" alt="logo" style="max-width: 100%; max-height: 100%;  transition: transform 0.3s ease;">
                </a>
            </div>

            <li class="nav-item" style="list-style-type: none;">
                <p style="color:  white;">The Architecture Forum</p>
            </li>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">


                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">
                            Read
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{route('ask.questions')}}" class="nav-link">New Discussion</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link">Forum</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">
                            Connect
                        </a>

                        <ul class="dropdown-menu">
<!--                           --><?php
//                            $topics = \App\Models\Topic::all();
//                            ?>
{{--                            /@foreach($topics as $topic)--}}
                            <li class="nav-item">
                                <a href="#" class="nav-link">Architecture</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">Interior</a>
                            </li>
{{--                                @endforeach--}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">
                            Work
                        </a>

                        <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('user.portfolio')}}" class="nav-link">Portfolio</a>
                                </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                    <li class="nav-item">
                        <a href="{{route('about')}}" class="nav-link">About Us</a>
                    </li>


                </ul>

                <div class="others-options">
                    <ul>
                        <li>
                            <form class="search-box">
                                <input type="text" name="Search" placeholder="Search for..." class="form-control">

                                <button type="submit" class="search-btn">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </li>

                        @if(auth()->check())
                            @if(auth()->user()->role == 'admin')

                                <li>
                                    <a href="{{route('backend.index')}}">
                                        Dashboard
                                    </a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="{{route('login')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="active">
                                    Log in
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                    Sign up
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                @if(auth()->check())
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle" >
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('user.edit.profile') }}" class="nav-link">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a role="button"  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </nav>
    </div>
</div>

<div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">
                <div class="circle circle-one"></div>
                <div class="circle circle-two"></div>
                <div class="circle circle-three"></div>
            </div>
        </div>

        <div class="container">
            <div class="option-inner">
                <div class="others-options justify-content-center d-flex align-items-center">
                    <ul>
                        <li>
                            <form class="search-box">
                                <input type="text" name="Search" placeholder="Search for..." class="form-control">

                                <button type="submit" class="search-btn">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </li>
                        <li>
                            <a href="{{route('login')}}" data-bs-toggle="modal" data-bs-target="#exampleModal-3" class="active">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="{{route('register')}}" data-bs-toggle="modal" data-bs-target="#exampleModal-4">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
