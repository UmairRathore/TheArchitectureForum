
@extends('layouts.frontend.app')

@section('content')



    <!-- Start Page title Area -->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="page-title-content">
                        <h2>Blog</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
                    <div class="page-title-list">
                        <ul>
                            <li>
                                <a href="{{('home')}}">Home</a>
                            </li>
                            <li class="active">
                                Blog
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page title Area -->

    <!-- Start Blog Area -->
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <a href="{{route('blog.details')}}">
                            <img src="{{asset('frontend/assets/images/blog/blog-1.jpg')}}" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <img src="{{asset('frontend/assets/images/blog/user-1.jpg')}}" alt="Image">
                                        <span>Marissa Cress</span>
                                    </a>
                                </li>
                                <li>
                                    November 24, 2023
                                </li>
                            </ul>

                            <h3>
                                <a href="{{route('blog.details')}}">
                                    Top 7 server hosting platforms for everyone
                                </a>
                            </h3>

                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <a href="{{route('blog.details')}}">
                            <img src="{{asset('frontend/assets/images/blog/blog-2.jpg')}}" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <img src="{{asset('frontend/assets/images/blog/user-2.jpg')}}" alt="Image">
                                        <span>Marissa Cress</span>
                                    </a>
                                </li>
                                <li>
                                    November 23, 2023
                                </li>
                            </ul>

                            <h3>
                                <a href="{{route('blog.details')}}">
                                    Mapping the path from the new journey
                                </a>
                            </h3>

                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <a href="{{route('blog.details')}}">
                            <img src="{{asset('frontend/assets/images/blog/blog-3.jpg')}}" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <img src="{{asset('frontend/assets/images/blog/user-3.jpg')}}" alt="Image">
                                        <span>Marissa Cress</span>
                                    </a>
                                </li>
                                <li>
                                    November 22, 2023
                                </li>
                            </ul>

                            <h3>
                                <a href="{{route('blog.details')}}">
                                    How you can write social questions and answers
                                </a>
                            </h3>

                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <a href="{{route('blog.details')}}">
                            <img src="{{asset('frontend/assets/images/blog/blog-4.jpg')}}" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <img src="{{asset('frontend/assets/images/blog/user-4.jpg')}}" alt="Image">
                                        <span>Marissa Cress</span>
                                    </a>
                                </li>
                                <li>
                                    November 21, 2023
                                </li>
                            </ul>

                            <h3>
                                <a href="{{route('blog.details')}}">
                                    This is the important thing when I write social questions and answers
                                </a>
                            </h3>

                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <a href="{{route('blog.details')}}">
                            <img src="{{asset('frontend/assets/images/blog/blog-5.jpg')}}" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <img src="{{asset('frontend/assets/images/blog/user-5.jpg')}}" alt="Image">
                                        <span>Marissa Cress</span>
                                    </a>
                                </li>
                                <li>
                                    November 20, 2023
                                </li>
                            </ul>

                            <h3>
                                <a href="{{route('blog.details')}}">
                                    How do we fix WordPress security issues without any hassle
                                </a>
                            </h3>

                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <a href="{{route('blog.details')}}">
                            <img src="{{asset('frontend/assets/images/blog/blog-6.jpg')}}" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <a href="{{route('blog')}}">
                                        <img src="{{asset('frontend/assets/images/blog/user-6.jpg')}}" alt="Image">
                                        <span>Marissa Cress</span>
                                    </a>
                                </li>
                                <li>
                                    November 19, 2023
                                </li>
                            </ul>

                            <h3>
                                <a href="{{route('blog.details')}}">
                                    Adding over a million subscribers across Daily Social Questions and Answers
                                </a>
                            </h3>

                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="pagination-area mt-0 mb-0">
                        <a href="{{route('blog')}}" class="next page-numbers">
                            <i class="ri-arrow-left-line"></i>
                        </a>
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="{{route('blog')}}" class="page-numbers">2</a>
                        <a href="{{route('blog')}}" class="page-numbers">3</a>

                        <a href="{{route('blog')}}" class="next page-numbers">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

@endsection
