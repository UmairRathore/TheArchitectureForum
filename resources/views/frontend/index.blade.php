@extends('layouts.frontend.app')


@section('content')
{{--<!-- Start Banner Area -->--}}
{{--<div class="banner-area">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="banner-content">--}}
{{--                    <h1>Pify</h1>--}}
{{--                    <h3>Share & grow the world's <span>knowledge</span>!</h3>--}}
{{--                    <p>We want to connect with people who will share their knowledge from one person to another.</p>--}}
{{--                    <a href="{{route('user')}}" class="default-btn">--}}
{{--                        Create a free team--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-6 pe-0">--}}
{{--                <div class="banner-img">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/banner-img.png')}}" alt="Image">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/shape-1.png')}}" alt="Image" class="shape shape-1">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/shape-2.png')}}" alt="Image" class="shape shape-2">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/shape-3.png')}}" alt="Image" class="shape shape-3">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/shape-4.png')}}" alt="Image" class="shape shape-4">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/shape-5.png')}}" alt="Image" class="shape shape-5">--}}
{{--                    <img src="{{asset('frontend/assets/images/banner/shape-6.png')}}" alt="Image" class="shape shape-6">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- End Banner Area -->--}}

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
                    <form class="aq-form">
                        <i class="ri-search-line"></i>
                        <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
                        <button class="aq-btn">
                            Ask Question
                        </button>
                    </form>

                    <ul class="nav nav-tabs questions-tabs d-flex justify-content-between" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="recent-questions-tab" data-bs-toggle="tab" data-bs-target="#recent-questions" type="button" role="tab" aria-controls="recent-questions" aria-selected="true">
                                Recent Questions
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="most-answered-tab" data-bs-toggle="tab" data-bs-target="#most-answered" type="button" role="tab" aria-controls="most-answered" aria-selected="false">
                                Most Answered
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="unanswered-question-tab" data-bs-toggle="tab" data-bs-target="#unanswered-question" type="button" role="tab" aria-controls="unanswered-question" aria-selected="false">
                                Unanswered Question
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="featured-question-tab" data-bs-toggle="tab" data-bs-target="#featured-question" type="button" role="tab" aria-controls="featured-question" aria-selected="false">
                                Featured Question
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent-questions" role="tabpanel" aria-labelledby="recent-questions-tab">
                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>50</span>
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

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

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
                                                        50 Vote
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-2.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>25</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Adam  Garrison</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 15 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Programming
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Teaching high school students various computer systems is a resource for the future
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        25 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        647 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-3.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>30</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>4</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Yvonne Cox</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 16 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Conversion
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        30 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-4.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>20</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Nelson Koch</a>
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

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        20 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        4 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        974 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-5.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>15</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>5</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">James Sardina</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 19 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                In the case of a human being, learning how many languages is logical is mentioned
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        15 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        3 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        735 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-6.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>40</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Judith Maddox</a>
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
                                                Why do people of different countries celebrate their New Year in different ways?
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">l
                                                    Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        40 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        2 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        374 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-7.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>35</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>6</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Rick Thrasher</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 22 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                What is the requirement of a student's e-book for conducting educational activities?
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        35 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
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

                            <div class="pagination-area">
                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="{{route('all.questions')}}" class="page-numbers">2</a>
                                <a href="{{route('all.questions')}}" class="page-numbers">3</a>

                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="most-answered" role="tabpanel" aria-labelledby="most-answered-tab">
                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                        </a>
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

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-2.jpg')}}" alt="Image">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Adam  Garrison</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 15 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Programming
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Teaching high school students various computer systems is a resource for the future
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        2 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        647 Views
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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-3.jpg')}}" alt="Image">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Yvonne Cox</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 16 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Conversion
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
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
                                                        1 Answer
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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-4.jpg')}}" alt="Image">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Nelson Koch</a>
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

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        43 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        4 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        974 Views
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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-5.jpg')}}" alt="Image">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">James Sardina</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 19 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                In the case of a human being, learning how many languages is logical is mentioned
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        35 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        3 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        735 Views
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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-6.jpg')}}" alt="Image">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Judith Maddox</a>
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
                                                Why do people of different countries celebrate their New Year in different ways?
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">l
                                                    Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        32 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        2 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        374 Views
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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-7.jpg')}}" alt="Image">
                                        </a>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Rick Thrasher</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 22 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                What is the requirement of a student's e-book for conducting educational activities?
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
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
                                                        1 Answer
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

                                            <a href="{{route('most.answered')}}" class="default-btn bg-ea4335">
                                                Question
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pagination-area">
                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="{{route('all.questions')}}" class="page-numbers">2</a>
                                <a href="{{route('all.questions')}}" class="page-numbers">3</a>

                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="unanswered-question" role="tabpanel" aria-labelledby="unanswered-question-tab">
                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>20</span>
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
                                                        20 Vote
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-2.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>22</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Adam  Garrison</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 15 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Programming
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Teaching high school students various computer systems is a resource for the future
                                            </a>
                                        </h3>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        22 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        647 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-3.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>21</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>4</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Yvonne Cox</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 16 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Conversion
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
                                            </a>
                                        </h3>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        21 Vote
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-4.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>24</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Nelson Koch</a>
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

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
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
                                                    <a href="{{route('most.visited.answered')}}">
                                                        974 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-5.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>35</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>5</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">James Sardina</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 19 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                In the case of a human being, learning how many languages is logical is mentioned
                                            </a>
                                        </h3>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        35 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        735 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-6.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>20</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Judith Maddox</a>
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
                                                Why do people of different countries celebrate their New Year in different ways?
                                            </a>
                                        </h3>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">l
                                                    Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        20 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        374 Views
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

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-7.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>43</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>6</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Rick Thrasher</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 22 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                What is the requirement of a student's e-book for conducting educational activities?
                                            </a>
                                        </h3>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        43 Vote
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

                            <div class="pagination-area">
                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="{{route('all.questions')}}" class="page-numbers">2</a>
                                <a href="{{route('all.questions')}}" class="page-numbers">3</a>

                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="featured-question" role="tabpanel" aria-labelledby="featured-question-tab">
                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>22</span>
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

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

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
                                                        22 Vote
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-2.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>25</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Adam  Garrison</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 15 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Programming
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Teaching high school students various computer systems is a resource for the future
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        25 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        647 Views
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-3.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>21</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>4</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Yvonne Cox</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 16 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Conversion
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                Here are some examples of how to prevent Kindle ebook text images from expanding from a PDF file.
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        21 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-4.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>20</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Nelson Koch</a>
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

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        20 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        4 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        974 Views
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-5.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>21</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>5</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">James Sardina</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 19 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                In the case of a human being, learning how many languages is logical is mentioned
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        21 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        3 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        735 Views
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-6.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>45</span>
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
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Judith Maddox</a>
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
                                                Why do people of different countries celebrate their New Year in different ways?
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">l
                                                    Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        45 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        2 Answer
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.visited.answered')}}">
                                                        374 Views
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="single-qa-box like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user')}}">
                                            <img src="{{asset('frontend/assets/images/user/user-7.jpg')}}" alt="Image">
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span>50</span>
                                            </button>
                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>6</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="graphic-design">
                                            <li>
                                                <a href="{{route('user')}}">Rick Thrasher</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: 22 hours ago</span>
                                            </li>
                                            <li>
                                                <span>In:</span>
                                                <a href="{{route('tags')}}" class="graphic">
                                                    Language
                                                </a>
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('questions')}}">
                                                What is the requirement of a student's e-book for conducting educational activities?
                                            </a>
                                        </h3>

                                        <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus rutrum congue leo eget malesuada tincidunt.</p>

                                        <ul class="tag-list">
                                            <li>
                                                <a href="{{route('tags')}}">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Language</a>
                                            </li>
                                            <li>
                                                <a href="{{route('tags')}}">Analytics</a>
                                            </li>
                                        </ul>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="anser-list">
                                                <li>
                                                    <a href="{{route('polls')}}">
                                                        50 Vote
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('most.answered')}}">
                                                        1 Answer
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
                                <span class="featured">Featured</span>
                            </div>

                            <div class="pagination-area">
                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-left-line"></i>
                                </a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="{{route('all.questions')}}" class="page-numbers">2</a>
                                <a href="{{route('all.questions')}}" class="page-numbers">3</a>

                                <a href="{{route('all.questions')}}" class="next page-numbers">
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
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
