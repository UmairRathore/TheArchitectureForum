
@extends('layouts.frontend.app')

@section('content')


    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
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
                                                <a href="../../html/frontendhtml/pify/index.html" class="box-style">
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
                                                        <a href="all-queations.html">
                                                            <span class="menu-title">All questions</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="queations-details.html">
                                                            <span class="menu-title">questions details</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="communities.html" class="box-style">
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
                                                        <a href="most-answered.html">
                                                            <span class="menu-title">Most answered</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="most-answered-details.html">
                                                            <span class="menu-title">Most answered details</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="unanswered.html" class="box-style">
														<span class="menu-title">
															<i class="ri-checkbox-circle-line"></i>
															Unanswered
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="most-visited.html" class="box-style">
														<span class="menu-title">
															<i class="ri-eye-line"></i>
															Most visited
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="polls.html" class="box-style">
														<span class="menu-title">
															<i class="ri-bar-chart-fill"></i>
															Polls
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="faq.html" class="box-style">
														<span class="menu-title">
															<i class="ri-hq-line"></i>
															FAQs
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="groups.html" class="box-style active">
														<span class="menu-title">
															<i class="ri-group-2-line"></i>
															Groups
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="education.html" class="box-style">
														<span class="menu-title">
															<i class="ri-book-line"></i>
															Education
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="technology.html" class="box-style">
														<span class="menu-title">
															<i class="ri-file-shield-2-line"></i>
															Technology
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tags.html" class="box-style">
														<span class="menu-title">
															<i class="ri-price-tag-line"></i>
															Tags
														</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="badges.html" class="box-style">
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
                                                        <a href="user.html">
                                                            <span class="menu-title">User</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="user-profile.html">
                                                            <span class="menu-title">User profile</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="ask-questions.html">
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
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="middull-content">
                        <ul class="page-nish">
                            <li>
                                <a href="../../html/frontendhtml/pify/index.html">
                                    <i class="ri-home-8-line"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Groups
                            </li>
                        </ul>

                        <form class="aq-form">
                            <i class="ri-search-line"></i>
                            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
                            <button class="aq-btn">
                                Ask Question
                            </button>
                        </form>

                        <div class="group-content">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="assets/images/group/group-1.jpg" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="assets/images/group/sub-1.jpg" alt="Image">
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

                                <div class="col-xl-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="assets/images/group/group-2.jpg" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="assets/images/group/sub-2.jpg" alt="Image">
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

                                <div class="col-xl-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="assets/images/group/group-3.jpg" alt="Image">
                                            <span>10 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="assets/images/group/sub-3.jpg" alt="Image">
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

                                <div class="col-xl-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="assets/images/group/group-4.jpg" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="assets/images/group/sub-4.jpg" alt="Image">
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

                                <div class="col-xl-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="assets/images/group/group-5.jpg" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="assets/images/group/sub-5.jpg" alt="Image">
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

                                <div class="col-xl-6 col-md-6">
                                    <div class="single-group-box">
                                        <div class="group-img">
                                            <img src="assets/images/group/group-6.jpg" alt="Image">
                                            <span>8 hours ago</span>
                                        </div>

                                        <div class="group-content">
                                            <div class="group-sub-img">
                                                <img src="assets/images/group/sub-6.jpg" alt="Image">
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
                    <div class="right-siderbar mt-0">
                        <div class="right-siderbar-common">
                            <a href="ask-questions.html" class="default-btn">
                                Ask a question
                            </a>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="category">
                                <h3>
                                    <i class="ri-list-unordered"></i>
                                    Categories
                                </h3>

                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select category</option>
                                    <option value="1">Discussion</option>
                                    <option value="2">Language</option>
                                    <option value="3">Analytics</option>
                                </select>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="discussions">
                                <h3>
                                    <i class="ri-speaker-line"></i>
                                    Top Discussions
                                </h3>

                                <ul>
                                    <li>
                                        <a href="most-answered.html">
                                            The idea of how I will share my profile on social sites
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            Discuss the rules for maintaining all the employees in the company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            The best way to choose between a job and a business
                                        </a>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            Which is the most important UIUX in terms of design?
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="answer-count">
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span>Questions</span>
                                        <span class="count">435</span>
                                    </li>
                                    <li>
                                        <span>Answers</span>
                                        <span class="count">435</span>
                                    </li>
                                    <li>
                                        <span>Best answers</span>
                                        <span class="count">324</span>
                                    </li>
                                    <li>
                                        <span>Users</span>
                                        <span class="count">2K</span>
                                    </li>
                                    <li>
                                        <span>Posts</span>
                                        <span class="count">852</span>
                                    </li>
                                    <li>
                                        <span>Comments</span>
                                        <span class="count">57</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="recent-post">
                                <h3>
                                    <i class="ri-discuss-line"></i>
                                    Recent post
                                </h3>

                                <ul>
                                    <li>
                                        <a href="most-answered.html">
                                            What could be UX design software?
                                        </a>
                                        <p>8 hours ago by <a href="user.html">Alan Woodson</a></p>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            All the new features that have been used in Windows 11
                                        </a>
                                        <p>11 hours ago by <a href="user.html">Juan McPhail</a></p>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            What is the most important thing in learning design?
                                        </a>
                                        <p>11 hours ago by <a href="user.html">Vickie White</a></p>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            Which language is the most popular in the web right now?
                                        </a>
                                        <p>13 hours ago by <a href="user.html">Jose Merz</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="top-members">
                                <h3>
                                    <i class="ri-discuss-line"></i>
                                    Top members
                                </h3>

                                <ul>
                                    <li>
                                        <a href="groups.html">
                                            <img src="assets/images/user/user-8.jpg" alt="Image">
                                            <p>Yong Spears <span>(5k Points)</span></p>
                                            <span>99 Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="groups.html">
                                            <img src="assets/images/user/user-9.jpg" alt="Image">
                                            <p>Denise Jones <span>(4k Points)</span></p>
                                            <span>85 Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="groups.html">
                                            <img src="assets/images/user/user-10.jpg" alt="Image">
                                            <p>Dennis Rogers <span>(3k Points)</span></p>
                                            <span>80 Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="groups.html">
                                            <img src="assets/images/user/user-11.jpg" alt="Image">
                                            <p>Naomi Barnett <span>(1k Points)</span></p>
                                            <span>60 Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="groups.html">
                                            <img src="assets/images/user/user-12.jpg" alt="Image">
                                            <p>Mary Wenger <span>(952 Points)</span></p>
                                            <span>50 Questions</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="ads">
                                <a href="groups.html">
                                    <img src="assets/images/ad.jpg" alt="Image">
                                </a>

                                <a href="groups.html" class="default-btn">
                                    Learn More
                                </a>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="trending-tags">
                                <h3>
                                    <i class="ri-price-tag-3-line"></i>
                                    Trending Tags
                                </h3>

                                <ul>
                                    <li>
                                        <a href="tags.html">
                                            discussion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            analytics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            life
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            computer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            interview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            grammer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            convertion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tags.html">
                                            google
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->

@endsection
