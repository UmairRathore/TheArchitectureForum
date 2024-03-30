<div class="sidemenu-wrap d-flex justify-content-between align-items-center">
    <h3>The architecture Forum Sidebar Menu</h3>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="ri-menu-line"></i>
    </button>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="left-sidebar">
            <nav class="sidebar-nav" data-simplebar>
                <ul id="sidebar-menu" class="sidebar-menu">
                    <li>
                        <a href="{{route('home')}}" class="box-style">
                            <span class="menu-title">
                                <i class="ri-eye-line"></i>
                                Popular
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="has-arrow box-style">
                            <i class="ri-user-line"></i>
                            <span class="menu-title">
                                Topics
                            </span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            @if(isset($leftSidebarData))
                        @foreach($leftSidebarData  as $topic)
                                <li>
                                    <a href="{{route('tags')}}">
                                        <span class="menu-title">{{$topic->title}}</span>
                                    </a>
                                </li>
                            @endforeach
                                @else
                                <li>
                                    <a href="#">
                                        <span class="menu-title">No Topics Available</span>
                                    </a>
                                </li>
                                @endif


                        </ul>
                    </li>
                    <li>
                        <a href="#" class="has-arrow box-style">
                            <i class="ri-user-line"></i>
                            <span class="menu-title">
                                Support
                            </span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="{{route('about')}}">
                                    <span class="menu-title">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">Advertise</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">Help</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('faq')}}" class="box-style">
                            <span class="menu-title">
                                <i class="ri-question-line"></i>
                                FAQs
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('badge')}}" class="box-style">
                            <span class="menu-title">
                                <i class="ri-award-line"></i>
                                Badges
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('content.policy')}}" class="box-style">
                            <span class="menu-title">
                                <i class="ri-home-8-line"></i>
                                Content Policy
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('privacy.policy')}}" class="box-style">
                            <span class="menu-title">
                                <i class="ri-home-8-line"></i>
                                Privacy Policy
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.agreement')}}" class="box-style">
                            <span class="menu-title">
                                <i class="ri-home-8-line"></i>
                                User Agreement
                            </span>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
    </div>
</div>
