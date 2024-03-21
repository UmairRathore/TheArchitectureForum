
        <div class="right-siderbar-common">
            <a href="{{route('ask.questions')}}" class="default-btn">
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
                        <a href="{{route('most.answered')}}">
                            The idea of how I will share my profile on social sites
                        </a>
                    </li>
                    <li>
                        <a href="{{route('most.answered')}}">
                            Discuss the rules for maintaining all the employees in the company
                        </a>
                    </li>
                    <li>
                        <a href="{{route('most.answered')}}">
                            The best way to choose between a job and a business
                        </a>
                    </li>
                    <li>
                        <a href="{{route('most.answered')}}">
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
                        <a href="{{route('most.answered')}}">
                            What could be UX design software?
                        </a>
                        <p>8 hours ago by <a href="{{route('user')}}">Alan Woodson</a></p>
                    </li>
                    <li>
                        <a href="{{route('most.answered')}}">
                            All the new features that have been used in Windows 11
                        </a>
                        <p>11 hours ago by <a href="{{route('user')}}">Juan McPhail</a></p>
                    </li>
                    <li>
                        <a href="{{route('most.answered')}}">
                            What is the most important thing in learning design?
                        </a>
                        <p>11 hours ago by <a href="{{route('user')}}">Vickie White</a></p>
                    </li>
                    <li>
                        <a href="{{route('most.answered')}}">
                            Which language is the most popular in the web right now?
                        </a>
                        <p>13 hours ago by <a href="{{route('user')}}">Jose Merz</a></p>
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
                        <a href="{{route('groups')}}">
                            <img src="{{asset('assets/images/user/user-8.jpg')}}" alt="Image">
                            <p>Yong Spears <span>(5k Points)</span></p>
                            <span>99 Questions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('groups')}}">
                            <img src="{{asset('assets/images/user/user-9.jpg')}}" alt="Image">
                            <p>Denise Jones <span>(4k Points)</span></p>
                            <span>85 Questions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('groups')}}">
                            <img src="{{asset('assets/images/user/user-10.jpg')}}" alt="Image">
                            <p>Dennis Rogers <span>(3k Points)</span></p>
                            <span>80 Questions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('groups')}}">
                            <img src="{{asset('assets/images/user/user-11.jpg')}}" alt="Image">
                            <p>Naomi Barnett <span>(1k Points)</span></p>
                            <span>60 Questions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('groups')}}">
                            <img src="{{asset('assets/images/user/user-12.jpg')}}" alt="Image">
                            <p>Mary Wenger <span>(952 Points)</span></p>
                            <span>50 Questions</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-siderbar-common">
            <div class="ads">
                <a href="{{route('most.detail.answered')}}">
                    <img src="{{asset('assets/images/ad.jpg')}}" alt="Image">
                </a>

                <a href="{{route('most.detail.answered')}}" class="default-btn">
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
                        <a href="{{route('tags')}}">
                            discussion
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            analytics
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            company
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            life
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            computer
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            interview
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            grammer
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            convertion
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags')}}">
                            google
                        </a>
                    </li>
                </ul>
            </div>
        </div>
