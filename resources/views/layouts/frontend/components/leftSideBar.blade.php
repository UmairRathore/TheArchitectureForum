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
															Forum
														</span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="#" class="has-arrow box-style">
                                    <i class="ri-question-answer-fill"></i>
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
                        </ul>
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
                        <a href="{{route('badge')}}" class="box-style">
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
															Support
														</span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="{{route('user.profile')}}">
                                    <span class="menu-title">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user')}}">
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
                        <a href="#" class="has-arrow box-style">
                            <i class="ri-user-line"></i>
                            <span class="menu-title">
															Topic
														</span>
                        </a>
                        <ul class="sidemenu-nav-second-level">
                            <li>
                                <a href="{{route('user.profile')}}">
                                    <span class="menu-title">Architecture</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user')}}">
                                    <span class="menu-title">Interior Design</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">CAD</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">3D</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">Graphics</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">Portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">School</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ask.questions')}}">
                                    <span class="menu-title">Work</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('badge')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															Content Policy
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('badge')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															Privacy Policy
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('badge')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															User Agreement
														</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('badge')}}" class="box-style">
														<span class="menu-title">
															<i class="ri-award-line"></i>
															Portfolio
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



                </ul>
            </nav>
        </div>
    </div>
</div>
