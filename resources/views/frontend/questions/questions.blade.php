@extends('layouts.frontend.app')

@section('content')

    <!-- Start Mail Content Area -->
    <div class="main-content-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-menu-wrap">
                        @include('layouts.frontend.partials.left-SideBar')
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
                                        <a href="{{route('user.profile',[$question->user_id])}}">
                                            @if(isset($question->userProfileImage))
                                                <img src="{{asset($question->userProfileImage)}}" alt="Image">
                                            @else
                                                <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                            @endif
                                        </a>
                                        <div id="voteingdiv">
                                            <div class="donet-like-list">
                                                <!-- Upvote Button -->
                                                <button class="like-unlink-count like" data-question-id="{{ $question->id }}" data-vote-type="up" data-vote="question">
                                                    <i class="ri-thumb-up-fill"></i>
                                                    <span id>{{ $question->questionUpVote ?? '0' }}</span>
                                                </button>

                                            </div>

                                            <div class="donet-like-list">
                                                <!-- Downvote Button -->
                                                <button class="like-unlink-count dislike"
                                                        data-question-id="{{ $question->id }}" data-vote-type="down" data-vote="question">
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
                                            {!! $question->description !!}

                                        </p>


                                        <ul class="tag-list">
                                            @foreach($question->tags as $tag)
                                                <li>
                                                    <a href="#">{{$tag->title}}</a>
                                                </li>
                                            @endforeach

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

                            <ul class="answerss d-flex justify-content-between align-items-center">
                                <li>
                                    <h3>{{$counts}} Answers</h3>
                                </li>
{{--                                <li>--}}
{{--                                    <select class="form-select" aria-label="Default select example">--}}
{{--                                        <option selected>All answer</option>--}}
{{--                                        <option value="1">One</option>--}}
{{--                                        <option value="2">Two</option>--}}
{{--                                        <option value="3">Three</option>--}}
{{--                                    </select>--}}
{{--                                </li>--}}
                            </ul>

                            @if(isset($answers))
                                @foreach($answers as $answer)
                            <div class="answer-question-details like-dislike">
                                <div class="d-flex">
                                    <div class="link-unlike flex-shrink-0">
                                        <a href="{{route('user.profile',[$answer->user_id])}}">
                                            @if(isset($answer->userProfileImage))
                                                <img src="{{asset($answer->userProfileImage)}}" alt="Image">
                                            @else
                                                <img src="{{asset('frontend/assets/images/user/user-1.jpg')}}" alt="Image">
                                            @endif
                                        </a>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count like" data-answer-id="{{ $answer->id }}" data-vote-type="up" data-vote="answer">
                                                <i class="ri-thumb-up-fill"></i>
                                                <span id>{{ $answer->answerUpVote ?? '0' }}</span>
                                            </button>

                                        </div>

                                        <div class="donet-like-list">
                                            <button class="like-unlink-count dislike" data-answer-id="{{ $answer->id }}" data-vote-type="down" data-vote="answer">
                                                <i class="ri-thumb-down-fill"></i>
                                                <span>{{ $answer->answerDownVote ?? '0' }}</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <ul class="latest-answer-list">
                                            <li>
                                                <a href="{{route('user.profile',[$answer->user_id])}}">
                                                    {{$answer->name}}</a>
                                            </li>
                                            <li>
                                                <span>Latest Answer: {{ \Carbon\Carbon::parse($answer->created_at)->diffForHumans() }}</span>
                                            </li>
                                            <li class="reports">
                                                <a href="{{route('referral')}}" class="report">
                                                    <i class="ri-error-warning-line"></i>
                                                    Report
                                                </a>
                                            </li>
                                        </ul>

                                        <p>
{!! $answer->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                            @else
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

                                @endif



                            <form class="your-answer-form" id="answerForm">
                                <div class="form-group">
                                    <h3>Your Answer</h3>
                                </div>
                                <input type="hidden" name="questionID" id="questionID" value="{{$question->id}}">
                                <div class="col-md-12 mb-6">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description"  class="form-control form-control-lg" placeholder="Enter Description">{{ old('Description') }}</textarea>
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
                                    <button type="button" id="answerSubmit" class="default-btn">Post your answer</button>
                                </div>
                            </form>
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
@section('answer')
    <script>
        window.onload = function() {
            var descriptionTextarea = document.querySelector('#description');
            if (descriptionTextarea) {
                ClassicEditor
                    .create(descriptionTextarea)
                    .then(editor => {
                        console.log('Editor initialized');
                        setupAjax(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            } else {
                console.error("Textarea with id 'description' not found.");
            }
        };
        @if(auth()->check())
        function setupAjax(editor) {
            $('#answerSubmit').click(function(event) {
                event.preventDefault();

                if (editor) {
                    var descriptionContent = editor.getData();
                    console.log(descriptionContent);

                    var formData = new FormData();
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                    formData.append('questionID', $('#questionID').val());

                    formData.append('description', descriptionContent); // Append CKEditor content
                    formData.append('file', $('#file-2')[0].files[0]);

                    $.ajax({
                        url: '{{ route('store.answers') }}', // Specify your server endpoint
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            console.log(response);
                            toastr.success('answers posted successfully');
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            toastr.error('An error occurred while posting question');
                        }
                    });
                } else {
                    console.error("CKEditor instance not available");
                }
            });
        }
        $(document).ready(function() {
            $('.like-unlink-count').on('click', function() {
                var answerId = $(this).data('answer-id');
                var questionId = $(this).data('question-id');
                var voteType = $(this).data('vote-type');
                var vote = $(this).data('vote');

                if(vote === 'answer')
                {
                $.ajax({
                    url: '/answers/' + answerId + '/vote',
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

                } else if(vote === 'question')
                {
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
                }
            });
        });
        @else
        $('#answerSubmit').click(function(event) {
            toastr.success('Please Login first');
        });
        $('.like-unlink-count').on('click', function() {
        toastr.success('Please Login first');
        });
        @endif
    </script>
@endsection
