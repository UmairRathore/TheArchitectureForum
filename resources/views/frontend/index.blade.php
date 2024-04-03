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
                            <div class="modal-body mx-auto" style="padding: 20px;">
                                <form class="your-answer-form" id="questionModalForm">
                                    @csrf
                                    <div class="form-group">
                                        <h3>Create a question</h3>
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="topic"></label>
                                        <select name="topic" class="form-select form-control" id="topic">
                                            <option selected disabled>Select Topic</option>
                                            @if(isset($data['topics']))
                                                @foreach($data['topics'] as $topic)
                                                    <option value="{{$topic->id}}">{{$topic->title}}</option>
                                                @endforeach
                                            @else
                                                <option value="">no topics available</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags"> Tags (Add
                                            {{--                                    /p to 5 *// --}}
                                            tags to describe what your question is about)</label>
                                        <select class="form-select form-control" name="tags[]" id="tags" multiple="multiple">
                                            <option selected disabled>Select Tag</option>
                                            @if(isset($data['tags']))
                                                @foreach($data['tags'] as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                                @endforeach
                                            @else
                                                <option value="">No tags available</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-6">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description"  class="form-control form-control-lg" placeholder="Enter Description">{{ old('Description') }}</textarea>
{{--                                      --}}
                                    </div>
                                    <div class="form-group">
                                        <div  class="file-upload-account-info btn btn-primary" style="color: white; background-color: black">
                                            <label class="upload">
                                                <i class="ri-link">
                                                    <input type="file" name="file" id="file-2" class="inputfile">
                                                    Upload Photo
                                                </i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="default-btn">Post your Question</button>
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
                                @if(isset($data['questions']))
{{--                                    {{dd($data['questions'])}}--}}
                                    @foreach($data['questions'] as $question)
{{--                                        {{dd($question)}}--}}
                                        <div class="single-qa-box like-dislike">
                                            <div class="d-flex">
                                                <div class="link-unlike flex-shrink-0">
                                                    <a
                                                        href="{{route('user.profile',[$question->user_id])}}"
                                                    >
                                                        @if(isset($question->userProfileImage))
                                                        <img src="{{asset($question->userProfileImage)}}" alt="Image">
                                                        @else
                                                        <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                                            @endif
                                                    </a>
<div id="voteingdiv">
                                                    <div class="donet-like-list">
                                                        <!-- Upvote Button -->
                                                        <button class="like-unlink-count like" data-question-id="{{ $question->id }}" data-vote-type="up">
                                                            <i class="ri-thumb-up-fill"></i>
                                                            <span id>{{ $question->questionUpVote ?? '0' }}</span>
                                                        </button>

                                                    </div>

                                                    <div class="donet-like-list">
                                                        <!-- Downvote Button -->
                                                        <button class="like-unlink-count dislike" data-question-id="{{ $question->id }}" data-vote-type="down">
                                                            <i class="ri-thumb-down-fill"></i>
                                                            <span>{{ $question->questionDownVote ?? '0' }}</span>
                                                        </button>

                                                    </div>
</div>
                                                </div>

                                                <div class="flex-grow-1 ms-3">
                                                    <ul class="graphic-design">
                                                        <li>
                                                            <a href="{{route('user.profile',[$question->user_id])}}">
                                                            {{$question->name}}</a>
                                                        </li>
                                                        <li>
                                                            <span>Latest Answer: {{ \Carbon\Carbon::parse($question->created_at)->diffForHumans() }}</span>
                                                        </li>
                                                        <li>
                                                            <span>In:</span>
                                                            <a
                                                               class="graphic">
                                                                 {{$question->topicName}}
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <h3>
                                                        <a href="{{route('questions')}}">
                                                            {{ $question->title }}
                                                        </a>
                                                    </h3>

                                                    <p>
                                                        {{ $question->description}}
                                                    </p>


                                                    <ul class="tag-list">
                                                        @foreach($question->tags as $tag)
                                                        <li>
                                                            <a href="#">{{$tag->title}}</a>
                                                        </li>
                                                        @endforeach
{{--                                                        <li>--}}
{{--                                                            <a href="#">Photoshop</a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#">--}}
{{--                                                                --}}{{--                                                       <a href="{{route('tags')}}">--}}
{{--                                                                Analytics</a>--}}
{{--                                                        </li>--}}
                                                    </ul>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <ul class="anser-list">
                                                            <li>
                                                                <a href="#">
                                                                    {{$question->totalVotes}} Vote
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

                                                        <a href="{{route('oneQuestion',[$question->id])}}" class="default-btn">
                                                            Answer
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
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
                                @endif


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
<!-- End Mail Content Area -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<!-- Include CKEditor script -->


<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>


<script>
        ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
        console.error(error);
    });

    $(document).ready(function() {
        $('#questionModalForm').submit(function(event) {
            event.preventDefault();

            // Retrieve CKEditor instance and its content
            var editor = ClassicEditor.instances.description;
            var descriptionContent = editor.getData();

            // Create FormData object and append form data
            var formData = new FormData();
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            formData.append('title', $('#title').val());
            formData.append('category', $('#category').val());
            formData.append('tags', $('#tags').val());
            formData.append('topic', $('#topic').val());
            formData.append('description', descriptionContent); // Append CKEditor content
            formData.append('file', $('#file-2')[0].files[0]);

            // Make AJAX request
            $.ajax({
                url: '{{ route('store.questions') }}', // Specify your server endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    // Show success message using Toastr.js or any other notification library
                    toastr.success('Question posted successfully');
                    // Optionally, reset the form after successful submission
                    $('#questionModalForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Show error message using Toastr.js or any other notification library
                    toastr.error('An error occurred while posting question');
                }
            });
        });
    });



    $(document).ready(function() {
        $('#tags').select2({
            placeholder: "Select tags",
            maximumSelectionLength: 5
        });
    });
    $(document).ready(function() {
        $('.like-unlink-count').on('click', function() {
            var questionId = $(this).data('question-id');
            var voteType = $(this).data('vote-type');

            $.ajax({
                url: '/questions/' + questionId + '/vote',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    vote_type: voteType
                },
                success: function(response) {
                   console.dir(response);
                    alert(response);


                    if(response.error)
                    {
                        toastr.error(response.error);
                    }else
                    {
                        toastr.success(response.message);


                        $('#progressbar').css('width', '0%').attr('aria-valuenow', 0);
                        $('#crossbutton').hide();
                    }
                },
                error: function(xhr, status, error) {
                    // Show error message using toastr
                    toastr.error(xhr.responseJSON.error);

                    // Reset the progress bar and hide the cross button
                    $('#progressbar').css('width', '0%').attr('aria-valuenow', 0);
                    $('#crossbutton').hide();
                }
            });
        });
    });



</script>
