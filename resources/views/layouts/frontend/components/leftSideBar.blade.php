<div class="sidemenu-wrap d-flex justify-content-between align-items-center">
    <h3>Pify Sidebar Menu</h3>
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
															<i class="ri-home-8-line"></i>
															Home
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="has-arrow box-style">
                            <i class="ri-question-line"></i>
                            <span class="menu-title">
															Questions
														</span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="{{route('all.questions')}}">
                                    <span class="menu-title">All questions</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('questions')}}">
                                    <span class="menu-title">questions details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('communities')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-links-line"></i>
															Communities
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="has-arrow box-style">
                            <i class="ri-question-answer-fill"></i>
                            <span class="menu-title">
															Most answered
														</span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="{{route('most.answered')}}">
                                    <span class="menu-title">Most answered</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('most.detail.answered')}}">
                                    <span class="menu-title">Most answered details</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('unanswered')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-checkbox-circle-line"></i>
															Unanswered
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('most.visited.answered')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-eye-line"></i>
															Most visited
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('polls')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-bar-chart-fill"></i>
															Polls
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('faq')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-hq-line"></i>
															FAQs
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('groups')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-group-2-line"></i>
															Groups
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('education')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-book-line"></i>
															Education
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('technology')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-file-shield-2-line"></i>
															Technology
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-price-tag-line"></i>
															Tags
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('badges')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															Badges
														</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="has-arrow box-style">
                            <i class="ri-user-line"></i>
                            <span class="menu-title">
															User
														</span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="{{route('user')}}">
                                    <span class="menu-title">User</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user.profile')}}">
                                    <span class="menu-title">User profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">Ask a questions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
