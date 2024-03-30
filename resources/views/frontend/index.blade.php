@extends('layouts.frontend.app')


@section('content')


    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container" style="margin-bottom: 20px">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <img src="{{asset('frontend/assets/images/badges/badges-1.png')}}" class="card-img-top" alt="Image 1" style="max-width: 35%; height: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Question 1</h5>
                                        <p class="card-text">Answer of the this question is no 1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <img src="{{asset('frontend/assets/images/badges/badges-1.png')}}" class="card-img-top" alt="Image 1" style="max-width: 35%; height: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Question 2</h5>
                                        <p class="card-text">Answer of the this question is no 2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <img src="{{asset('frontend/assets/images/badges/badges-1.png')}}" class="card-img-top" alt="Image 1" style="max-width: 35%; height: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Question 1</h5>
                                        <p class="card-text">Answer of the this question is no 2</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items as needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div>


        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.partials.left-SideBar')
                    </div>
                </div>
                <div class="modal fade" id="askQuestionModal" tabindex="-1" aria-labelledby="askQuestionModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="askQuestionModalLabel">Create a Question</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body mx-auto" style="padding: 20px; text-align: center;">
                                <form class="your-answer-form">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-select form-control" id="category" aria-label="Default select example">
                                            <option selected>Select category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags (Add up to 5 tags to describe what your question is about)</label>
                                        <input type="text" class="form-control" id="tags">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <div id="txtEditor"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="file-upload-account-info">
                                            <input type="file" name="file" id="file-2" class="inputfile">
                                            <label class="upload">
                                                <i class="ri-link"></i>
                                                Upload Photo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="background-color: black; color: white; border-block-color: black">Post your answer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="middull-content">
                        <form class="aq-form">
                            <i class="ri-search-line"></i>
                            <input type="text" class="form-control" placeholder="Have a question? Ask or enter a search">
                            <button type="button" class="aq-btn" data-bs-toggle="modal" data-bs-target="#askQuestionModal">
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
                                                    <a href="{{route('user')}}">Adam Garrison</a>
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
                                                    <a href="{{route('user')}}">Adam Garrison</a>
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
                                                    <a href="{{route('user')}}">Adam Garrison</a>
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
                                                    <a href="{{route('user')}}">Adam Garrison</a>
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
                        @include('layouts.frontend.partials.right-SideBar')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mail Content Area -->
@endsection
