
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
                                                <a href="index.html" class="box-style">
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
                                                <a href="groups.html" class="box-style">
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

                                            <li class="mm-active">
                                                <a href="user.html" class="has-arrow box-style">
                                                    <i class="ri-user-line"></i>
                                                    <span class="menu-title active">
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
                                                            <span class="menu-title active">User profile</span>
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

                <div class="col-lg-9">
                    <div class="user-profile-area">
                        <div class="profile-content d-flex justify-content-between align-items-center">
                            <div class="profile-img">
                                <img src="assets/images/user/profile-img.jpg" alt="Image">
                                <h3>Rosemary Hamm</h3>
                                <span>Member since 1 years ago</span>
                                <span>Last seen this week</span>
                                <button class="followers-btn">45 Followers</button>
                                <button class="followers-btn">12 Following</button>
                            </div>

                            <div class="edit-btn">
                                <a href="edit-profile.html" class="default-btn">Edit profile</a>
                            </div>
                        </div>

                        <div class="profile-achive">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-achive">
                                        <h2>1984</h2>
                                        <span>Answers</span>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-achive">
                                        <h2>507</h2>
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

                        <div class="about">
                            <h3>About</h3>
                            <span>Hello</span>
                            <p>Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat faucibus orci luctus et ultrices posuere .</p>
                            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Proin eget tortor risus blandit aliquet elit, eget tincidunt nibh.</p>
                        </div>

                        <div class="badges">
                            <h3>Badges</h3>

                            <div class="row justify-content-center">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="assets/images/badges/badges-3.png" alt="Image">
                                        <h3>Bronze badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="assets/images/badges/badges-4.png" alt="Image">
                                        <h3>Silver badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="assets/images/badges/badges-5.png" alt="Image">
                                        <h3>Gold badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="single-badges-box">
                                        <img src="assets/images/badges/badges-6.png" alt="Image">
                                        <h3>Platinum badges</h3>
                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top-tags">
                            <div class="tag-title d-flex justify-content-between">
                                <h3>Top tags</h3>
                                <a href="tags.html" class="read-more">View all tags</a>
                            </div>

                            <ul>
                                <li>
                                    <span class="tag-cate">discussion</span>
                                    <span class="tag-score">0 score</span>
                                    <span class="tag-score">0 posts</span>
                                    <span class="tag-score">0 posts %</span>
                                </li>
                                <li>
                                    <span class="tag-cate">language</span>
                                    <span class="tag-score">0 score</span>
                                    <span class="tag-score">0 posts</span>
                                    <span class="tag-score">0 posts %</span>
                                </li>
                                <li>
                                    <span class="tag-cate">analytics</span>
                                    <span class="tag-score">0 score</span>
                                    <span class="tag-score">0 posts</span>
                                    <span class="tag-score">0 posts %</span>
                                </li>
                                <li>
                                    <span class="tag-cate">convertion</span>
                                    <span class="tag-score">0 score</span>
                                    <span class="tag-score">0 posts</span>
                                    <span class="tag-score">0 posts %</span>
                                </li>
                                <li>
                                    <span class="tag-cate">computer</span>
                                    <span class="tag-score">0 score</span>
                                    <span class="tag-score">0 posts</span>
                                    <span class="tag-score">0 posts %</span>
                                </li>
                                <li>
                                    <span class="tag-cate">grammer</span>
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

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="question-tab" data-bs-toggle="tab" data-bs-target="#question" type="button" role="tab" aria-controls="question" aria-selected="false">Question</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="answers-tab" data-bs-toggle="tab" data-bs-target="#answers" type="button" role="tab" aria-controls="answers" aria-selected="false">Answers</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="newest-tab" data-bs-toggle="tab" data-bs-target="#newest" type="button" role="tab" aria-controls="newest" aria-selected="false">Newest</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="votes-tab" data-bs-toggle="tab" data-bs-target="#votes" type="button" role="tab" aria-controls="votes" aria-selected="false">Votes</button>
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
                                            <p><span>8 hours ago</span> by <a href="user-profile.html">Alan Woodson</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">5</span>
                                                <span>What is the most important thing in learning design?</span>
                                            </div>
                                            <p><span>10 hours ago</span> by <a href="user-profile.html">Juan McPhail</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">13</span>
                                                <span>All the new features that have been used in Windows 11</span>
                                            </div>
                                            <p><span>11 hours ago</span> by <a href="user-profile.html">Vickie White</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">10</span>
                                                <span>Which language is the most popular in the web right now?</span>
                                            </div>
                                            <p><span>13 hours ago</span> by <a href="user-profile.html">Jose Merz</a></p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="question" role="tabpanel" aria-labelledby="question-tab">
                                    <ul>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">21</span>
                                                <span>What could be UX design software?</span>
                                            </div>
                                            <p><span>8 hours ago</span> by <a href="user-profile.html">Alan Woodson</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">5</span>
                                                <span>What is the most important thing in learning design?</span>
                                            </div>
                                            <p><span>10 hours ago</span> by <a href="user-profile.html">Juan McPhail</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">13</span>
                                                <span>All the new features that have been used in Windows 11</span>
                                            </div>
                                            <p><span>11 hours ago</span> by <a href="user-profile.html">Vickie White</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">10</span>
                                                <span>Which language is the most popular in the web right now?</span>
                                            </div>
                                            <p><span>13 hours ago</span> by <a href="user-profile.html">Jose Merz</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="answers" role="tabpanel" aria-labelledby="answers-tab">
                                    <ul>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">21</span>
                                                <span>What could be UX design software?</span>
                                            </div>
                                            <p><span>8 hours ago</span> by <a href="user-profile.html">Alan Woodson</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">5</span>
                                                <span>What is the most important thing in learning design?</span>
                                            </div>
                                            <p><span>10 hours ago</span> by <a href="user-profile.html">Juan McPhail</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">13</span>
                                                <span>All the new features that have been used in Windows 11</span>
                                            </div>
                                            <p><span>11 hours ago</span> by <a href="user-profile.html">Vickie White</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">10</span>
                                                <span>Which language is the most popular in the web right now?</span>
                                            </div>
                                            <p><span>13 hours ago</span> by <a href="user-profile.html">Jose Merz</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="newest" role="tabpanel" aria-labelledby="newest-tab">
                                    <ul>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">21</span>
                                                <span>What could be UX design software?</span>
                                            </div>
                                            <p><span>8 hours ago</span> by <a href="user-profile.html">Alan Woodson</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">5</span>
                                                <span>What is the most important thing in learning design?</span>
                                            </div>
                                            <p><span>10 hours ago</span> by <a href="user-profile.html">Juan McPhail</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">13</span>
                                                <span>All the new features that have been used in Windows 11</span>
                                            </div>
                                            <p><span>11 hours ago</span> by <a href="user-profile.html">Vickie White</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">10</span>
                                                <span>Which language is the most popular in the web right now?</span>
                                            </div>
                                            <p><span>13 hours ago</span> by <a href="user-profile.html">Jose Merz</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="votes" role="tabpanel" aria-labelledby="votes-tab">
                                    <ul>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">21</span>
                                                <span>What could be UX design software?</span>
                                            </div>
                                            <p><span>8 hours ago</span> by <a href="user-profile.html">Alan Woodson</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">5</span>
                                                <span>What is the most important thing in learning design?</span>
                                            </div>
                                            <p><span>10 hours ago</span> by <a href="user-profile.html">Juan McPhail</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">13</span>
                                                <span>All the new features that have been used in Windows 11</span>
                                            </div>
                                            <p><span>11 hours ago</span> by <a href="user-profile.html">Vickie White</a></p>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <div class="top-posts-list">
                                                <i class="ri-chat-2-fill"></i>
                                                <span class="count">10</span>
                                                <span>Which language is the most popular in the web right now?</span>
                                            </div>
                                            <p><span>13 hours ago</span> by <a href="user-profile.html">Jose Merz</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->
@endsection
