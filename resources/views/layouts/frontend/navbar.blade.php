<div class="mobile-responsive-nav">
    <div class="container">
        <div class="mobile-responsive-menu">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="desktop-nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo">
            </a>

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('about')}}" class="nav-link">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">
                            Blog
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{asset('blog')}}" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('blog-details')}}" class="nav-link">Blog Details</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{asset('contact-us')}}" class="nav-link">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">
                            Pages
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{asset('activity')}}" class="nav-link">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('referrals')}}" class="nav-link">Referrals</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('privacy.policy')}}" class="nav-link">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('terms.conditions')}}" class="nav-link">Terms & Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('coming.soon')}}" class="nav-link">Coming Soon</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{asset('404')}}" class="nav-link">404 Page</a>
                            </li>
                        </ul>
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
                        <li>
                            <a href="{{asset('log-in')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="active">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('sign-up')}}" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </div>
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
                            <a href="{{asset('login')}}" data-bs-toggle="modal" data-bs-target="#exampleModal-3" class="active">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('usersignup')}}" data-bs-toggle="modal" data-bs-target="#exampleModal-4">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
