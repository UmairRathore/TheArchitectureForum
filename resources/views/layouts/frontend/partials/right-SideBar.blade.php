<div class="right-siderbar-common">
    <a href="{{route('ask.questions')}}" class="default-btn">
        Ask a question
    </a>
</div>

<div class="right-siderbar-common">
    <div class="category">
        <h3>
            <i class="ri-list-unordered"></i>
            Topics
            <?php
            $topics = \App\Models\Topic::all();
            ?>
        </h3>

        <select class="form-select" aria-label="Default select example">
            <option selected disabled>Select Topic</option>
            @foreach($topics as $topic)
                <option value="{{$topic->id}}">{{$topic->title}}</option>
            @endforeach
        </select>
    </div>
</div>

{{--        //top discussion will be the most answered questiosn--}}
{{--        check question_id, count max in answers table--}}
{{--        and also answer_id max in answers table--}}
<div class="right-siderbar-common">
    <div class="discussions">
        <h3>
            <i class="ri-speaker-line"></i>
            Top Discussions
        </h3>
        <?php
        $top = \App\Models\Question::select('questions.*')
            ->join('answers', 'answers.question_id', '=', 'questions.id')
            ->join('answer_comments', 'answer_comments.answer_id', '=', 'answers.id')
            ->selectRaw('COUNT(answer_comments.id) AS total_answers')
            ->groupBy('questions.id') // Group by non-aggregated columns
            ->orderByDesc('total_answers')
            ->limit(5)
            ->get();
        ?>
        <ul>
            @if($top->isNotEmpty())
                @foreach($top as $question)
                    <li>
                        <a href="{{ route('questions') }}">
                            {{ $question->title }}
                        </a>
                    </li>
                @endforeach
            @else
                <li>
                    No top discussions
                </li>
            @endif
        </ul>
    </div>
</div>

{{--        every total on the db--}}
<div class="right-siderbar-common">
    <div class="answer-count">
        <ul class="d-flex flex-wrap">
            <li>
                {{-- Total questions --}}
                <?php
                $totalQuestions = \App\Models\Question::count();
                ?>
                <span>Questions</span>
                <span class="count">{{ $totalQuestions }}</span>
            </li>
            <li>
                {{-- Total Answers --}}
                <?php
                $totalAnswers = \App\Models\Answer::count();
                ?>
                <span>Answers</span>
                <span class="count">{{ $totalAnswers }}</span>
            </li>
            <li>
                {{-- Best Answers --}}
                <?php
                $bestAnswers = \App\Models\Answer::where('vote', 1)->count();
                ?>
                <span>Best answers</span>
                <span class="count">{{ $bestAnswers }}</span>
            </li>
            <li>
                {{-- Total Users --}}
                <?php
                $totalUsers = \App\Models\User::count();
                ?>
                <span>Users</span>
                <span class="count">{{$totalUsers}}K</span>
            </li>
            <li>
                {{-- Total Posts (questions + answers --}}
                <?php
                $totalPosts = \App\Models\Question::with('answers')->count();
                ?>
                <span>Posts</span>
                <span class="count">{{$totalPosts}}</span>
            </li>
            <li>
                {{-- Total Comments (comments on answers) --}}
                <?php
                $totalComments = \App\Models\Answer::with('comments')->count();
                ?>
                <span>Comments</span>
                <span class="count">{{$totalComments}}</span>
            </li>
        </ul>
    </div>
</div>

<div class="right-siderbar-common">
    <div class="recent-post">
        <h3>
            <i class="ri-discuss-line"></i>
            Recent post
            {{--                    4 recents questions title, created at and user_id->name --}}
            <?php
            $recentQuestions = \App\Models\Question::with('users')->latest()->take(4)->get();
            ?>
        </h3>

        <ul>
            @if(isset($recentQuestions))
                @foreach($recentQuestions as $recentQuestion)
                    <li>
                        <a href="{{route('most.answered')}}">
                            {{$recentQuestion->title}}
                        </a>
                        <p>{{$recentQuestion->created_at}}8 hours ago by <a href="{{route('user')}}">{{$recentQuestion->user->name}}</a></p>
                    </li>
                @endforeach
            @else
                <li>
                    <a href="#">
                        No recent Questions
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>

<div class="right-siderbar-common">
    <div class="top-members">
        <h3>
            <i class="ri-discuss-line"></i>
            {{--                    5 users with most follwings count--}}
            Top members
            <?php
            $users = \App\Models\User::orderBy('following', 'desc')->take(5)->get();
            ?>
        </h3>

        <ul>
            @if(isset($users))
                @foreach($users as $user)
                    <li>
                        <a href="{{route('groups')}}">
                            @if($user->profile_image)
                                <img src="{{asset($user->profile_image)}}" alt="Image" style="max-height: 30px;">
                            @else
                                <img src="{{asset('frontend/assets/images/user/user-8.jpg')}}" alt="Image" style="max-height: 30px;">
                            @endif
                            <p>{{$user->name}} <span>(5k Points)</span></p>
                            <span>99 Questions</span>
                        </a>
                    </li>
                @endforeach
            @else
                <li>
                    <a href="#">
                        <img src="{{asset('frontend/assets/images/user/user-8.jpg')}}" alt="Image" style="max-height: 30px;">

                        <p>No top memeber <span>(5k Points)</span></p>
                        <span>99 Questions</span>
                    </a>
                </li>
            @endif

        </ul>
    </div>
</div>


<div class="right-siderbar-common">
    <div class="trending-tags">
        <h3>
            <i class="ri-price-tag-3-line"></i>
            Trending Tags
            {{--                    last 5 tag_id in in most answers count, also check answers--}}
        </h3>
        <?php
        $tags = \App\Models\Tag::all();
        ?>
        <ul>
            @foreach($tags as $tag)
                <li>
                    <a href="{{route('tags')}}">
                        {{$tag->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>












{{--//BACKUP--}}
{{--<div class="right-siderbar-common">--}}
{{--    <a href="{{route('ask.questions')}}" class="default-btn">--}}
{{--        Ask a question--}}
{{--    </a>--}}
{{--</div>--}}

{{--<div class="right-siderbar-common">--}}
{{--    <div class="category">--}}
{{--        <h3>--}}
{{--            <i class="ri-list-unordered"></i>--}}
{{--            Topics--}}
{{--        </h3>--}}

{{--        <select class="form-select" aria-label="Default select example">--}}
{{--            <option selected disabled>Select Topic</option>--}}
{{--            @foreach($rightSideBar['topics'] as $topic)--}}
{{--                <option value="{{$topic->id}}">{{$topic->title}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}
{{--</div>--}}

{{--        //top discussion will be the most answered questiosn--}}
{{--        check question_id, count max in answers table--}}
{{--        and also answer_id max in answers table--}}
{{--<div class="right-siderbar-common">--}}
{{--    <div class="discussions">--}}
{{--        <h3>--}}
{{--            <i class="ri-speaker-line"></i>--}}
{{--            Top Discussions--}}
{{--        </h3>--}}
{{--        <h3>Top Discussions</h3>--}}
{{--        <ul>--}}
{{--            @if($rightSideBar['top']->isNotEmpty())--}}
{{--                @foreach($rightSideBar['top'] as $question)--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('questions') }}">--}}
{{--                            {{ $question->title }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <li>--}}
{{--                    No top discussions--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}

{{--        every total on the db--}}
{{--<div class="right-siderbar-common">--}}
{{--    <div class="answer-count">--}}
{{--        <ul class="d-flex flex-wrap">--}}
{{--            <li>--}}
{{--                --}}{{-- Total questions --}}
{{--                <span>Questions</span>--}}
{{--                <span class="count">{{ $rightSideBar['totalQuestions'] }}</span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                --}}{{-- Total Answers --}}
{{--                <span>Answers</span>--}}
{{--                <span class="count">{{ $rightSideBar['totalAnswers'] }}</span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                --}}{{-- Best Answers --}}

{{--                <span>Best answers</span>--}}
{{--                <span class="count">{{ $rightSideBar['bestAnswers'] }}</span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                --}}{{-- Total Users --}}

{{--                <span>Users</span>--}}
{{--                <span class="count">{{$rightSideBar['totalUsers']}}</span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                --}}{{-- Total Posts (questions + answers --}}
{{--                <span>Posts</span>--}}
{{--                <span class="count">{{$rightSideBar['totalPosts']}}</span>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                --}}{{-- Total Comments (comments on answers) --}}
{{--                <span>Comments</span>--}}
{{--                <span class="count">{{$rightSideBar['totalComments']}}</span>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="right-siderbar-common">--}}
{{--    <div class="recent-post">--}}
{{--        <h3>--}}
{{--            <i class="ri-discuss-line"></i>--}}
{{--            Recent post--}}

{{--        </h3>--}}

{{--        <ul>--}}
{{--            @if(isset($rightSideBar['recentQuestions']))--}}
{{--                @foreach($rightSideBar['recentQuestions'] as $recentQuestion)--}}
{{--                    <li>--}}
{{--                        <a href="{{route('most.answered')}}">--}}
{{--                            {{$recentQuestion->title}}--}}
{{--                        </a>--}}
{{--                        <p>{{$recentQuestion->created_at}}8 hours ago by <a href="{{route('user')}}">{{$recentQuestion->user->name}}</a></p>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        No recent Questions--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="right-siderbar-common">--}}
{{--    <div class="top-members">--}}
{{--        <h3>--}}
{{--            <i class="ri-discuss-line"></i>--}}
{{--            --}}{{--                    5 users with most follwings count--}}
{{--            Top members--}}
{{--        </h3>--}}

{{--        <ul>--}}
{{--            @if(isset($rightSideBar['topUsers']))--}}
{{--                @foreach($rightSideBar['topUsers'] as $user)--}}
{{--                    <li>--}}
{{--                        <a href="{{route('groups')}}">--}}
{{--                            @if($user->profile_image)--}}
{{--                                <img src="{{asset($user->profile_image)}}" alt="Image" style="max-height: 30px;">--}}
{{--                            @else--}}
{{--                                <img src="{{asset('frontend/assets/images/user/user-8.jpg')}}" alt="Image" style="max-height: 30px;">--}}
{{--                            @endif--}}
{{--                            <p>{{$user->name}} <span>(5k Points)</span></p>--}}
{{--                            <span>99 Questions</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <img src="{{asset('frontend/assets/images/user/user-8.jpg')}}" alt="Image" style="max-height: 30px;">--}}

{{--                        <p>No top memeber <span>(5k Points)</span></p>--}}
{{--                        <span>99 Questions</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endif--}}

{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="right-siderbar-common">--}}
{{--    <div class="trending-tags">--}}
{{--        <h3>--}}
{{--            <i class="ri-price-tag-3-line"></i>--}}
{{--            Trending Tags--}}
{{--            --}}{{--                    last 5 tag_id in in most answers count, also check answers--}}
{{--        </h3>--}}
{{--        <ul>--}}
{{--            @foreach($rightSideBar['tags'] as $tag)--}}
{{--                <li>--}}
{{--                    <a href="{{route('tags')}}">--}}
{{--                        {{$tag->title}}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
{{--//BACKUP--}}
