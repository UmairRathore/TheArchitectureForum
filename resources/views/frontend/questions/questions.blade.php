
@extends('layouts.frontend.app')

@section('content')


    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.components.leftSideBar')
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
                            <li>
                                Question
                            </li>
                            <li class="active">
                                Question Details
                            </li>
                        </ul>



                        <div class="question-details-area">
                            <div class="question-details-content like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>4974</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>25</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Teresa Klein</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 14 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Graphic design
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                If you open Illustrator by dragging the Photoshop file, why it becomes a JPG file
                                            </a>
                                        </h3>

                                        <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada.</p>

                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>

                                        <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id posuere blandit. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>

                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Photoshop</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        24 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        2 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        658 Views
                                                    </a>
                                                </li>
                                                <li>
                                                    <ul class="qa-share">
                                                        <li class="share-option">
																<span>
																	<i class="ri-share-fill"></i>
																</span>

                                                            <ul class="social-icon">
                                                                <li>
                                                                    <a href="https://www.facebook.com/" target="_blank">
                                                                        <i class="ri-facebook-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.twitter.com/" target="_blank">
                                                                        <i class="ri-twitter-line"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.linkedin.com/" target="_blank">
                                                                        <i class="ri-linkedin-fill"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://www.instagram.com/" target="_blank">
                                                                        <i class="ri-instagram-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <a href="{{route('most.answered')}}" class="default-btn">
                                                Answer
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="answerss d-flex justify-content-between align-items-center">
                                <li>
                                    <h3>2 Answers</h3>
                                </li>
                                <li>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>All answer</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                            </ul>

                            <div class="answer-question-details like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-13.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>197</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>2</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="latest-answer-list">
                                            <li>
                                                <a href="{{route('user')}}">Elsa Feldman</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 2 hours ago</span>
                                            </li>
                                            <li class="reports">
                                                <a href="{{route('referral')}}" class="report">
                                                    <i class="ri-error-warning-line"></i>
                                                    Report
                                                </a>
                                            </li>
                                        </ul>

                                        <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada Donec velit neque.</p>

                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="answer-question-details like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-14.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>84</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>1</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="latest-answer-list">
                                            <li>
                                                <a href="{{route('user')}}">Lance Loftis</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 5 hours ago</span>
                                            </li>
                                            <li class="reports">
                                                <a href="{{route('referral')}}" class="report">
                                                    <i class="ri-error-warning-line"></i>
                                                    Report
                                                </a>
                                            </li>
                                        </ul>

                                        <p>Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada Donec velit neque.</p>

                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                                    </div>
                                </div>
                            </div>

                            <form class="your-answer-form">
                                <div class="form-group">
                                    <h3>Your Answer</h3>
                                </div>
                                <div class="form-group">
                                    <div id="txtEditor"></div>
                                </div>
                                <div class="form-group">
                                    <h3>Post as a guest</h3>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="default-btn">Post your answer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="right-siderbar">
                        @include('layouts.frontend.components.rightSideBar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->

@endsection
