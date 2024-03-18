
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
                                                <a href="all-queations.html" class="has-arrow box-style">
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

                <div class="col-lg-9">
                    <div class="summary-area">
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
                                <a href="../../html/frontendhtml/pify/edit-profile.html" class="default-btn">Edit profile</a>
                            </div>
                        </div>

                        <div class="summary-tabs">
                            <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="true">Summary</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="answers-tab" data-bs-toggle="tab" data-bs-target="#answers" type="button" role="tab" aria-controls="answers" aria-selected="false">Answers</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="questions-tab" data-bs-toggle="tab" data-bs-target="#questions" type="button" role="tab" aria-controls="questions" aria-selected="false">Questions</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tags-tab" data-bs-toggle="tab" data-bs-target="#tags" type="button" role="tab" aria-controls="tags" aria-selected="false">Tags</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="badges-tab" data-bs-toggle="tab" data-bs-target="#badges" type="button" role="tab" aria-controls="badges" aria-selected="false">Badges</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bookmarks-tab" data-bs-toggle="tab" data-bs-target="#bookmarks" type="button" role="tab" aria-controls="bookmarks" aria-selected="false">Bookmarks</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="actions-tab" data-bs-toggle="tab" data-bs-target="#actions" type="button" role="tab" aria-controls="actions" aria-selected="false">Actions</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="following-tab" data-bs-toggle="tab" data-bs-target="#following" type="button" role="tab" aria-controls="following" aria-selected="false">Following</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bounties-tab" data-bs-toggle="tab" data-bs-target="#bounties" type="button" role="tab" aria-controls="bounties" aria-selected="false">Bounties</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="votes-tab" data-bs-toggle="tab" data-bs-target="#votes" type="button" role="tab" aria-controls="votes" aria-selected="false">Votes</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="reputation-tab" data-bs-toggle="tab" data-bs-target="#reputation" type="button" role="tab" aria-controls="reputation" aria-selected="false">Reputation</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary-tab">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Answers (0)</h3>
                                                <p>You have not <a href="all-queations.html">answered</a> any questions</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Badges (0)</h3>
                                                <p>You have no <a href="all-queations.html">badges</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Questions (0)</h3>
                                                <p>You have not asked any <a href="all-queations.html">questions</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Bookmarks (0)</h3>
                                                <p>You have no <a href="all-queations.html">bookmarked</a> questions.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>following posts (12)</h3>
                                                <p>You are  <a href="all-queations.html">following 12 posts.</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Active bounties (0)</h3>
                                                <p>You have no <a href="all-queations.html">active bounties</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Account (1)</h3>
                                                <p>English Language Usage</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Votes (0)</h3>
                                                <p>You have not cast any <a href="all-queations.html">votes</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Tags (0)</h3>
                                                <p>You have not participated in any <a href="all-queations.html">tags</a></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Reputation (1)</h3>
                                                <p>You have no recent <a href="all-queations.html">reputation</a> changes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="answers" role="tabpanel" aria-labelledby="answers-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Answers (0)</h3>
                                                <p>You have not <a href="all-queations.html">answered</a> any questions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Questions (0)</h3>
                                                <p>You have not asked any <a href="all-queations.html">questions</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Tags (0)</h3>
                                                <p>You have not participated in any <a href="all-queations.html">tags</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="badges" role="tabpanel" aria-labelledby="badges-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Badges (0)</h3>
                                                <p>You have no <a href="badges.html">badges</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bookmarks" role="tabpanel" aria-labelledby="bookmarks-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Bookmarks (0)</h3>
                                                <p>You have no <a href="badges.html">bookmarked</a> questions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="actions" role="tabpanel" aria-labelledby="actions-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Account (1)</h3>
                                                <p>English Language Usage</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>following posts (12)</h3>
                                                <p>You are  <a href="user-profile.html">following 12 posts.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bounties" role="tabpanel" aria-labelledby="bounties-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Active bounties (0)</h3>
                                                <p>You have no <a href="all-queations.html">active bounties</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="votes" role="tabpanel" aria-labelledby="votes-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Votes (0)</h3>
                                                <p>You have not cast any <a href="most-visited.html">votes</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reputation" role="tabpanel" aria-labelledby="reputation-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-summary">
                                                <h3>Reputation (1)</h3>
                                                <p>You have no recent <a href="all-queations.html">reputation</a> changes</p>
                                            </div>
                                        </div>
                                    </div>
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
