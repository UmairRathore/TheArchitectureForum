
@extends('layouts.frontend.app')

@section('content')


    <!-- Start Page title Area -->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="page-title-content">
                        <h2>Top 7 server hosting platforms for everyone</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
                    <div class="page-title-list">
                        <ul>
                            <li>
                                <a href="blog.html" class="user-id">
                                    <img src="{{asset('assets/images/blog/user-1.jpg')}}" alt="Image">
                                    <span>Marissa Cress</span>
                                </a>
                            </li>
                            <li>
                                November 24, 2023
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page title Area -->

    <!-- Start Blog Details Area -->
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <p>Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit.</p>
                        <p>Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus   et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada.</p>

                        <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="Image">

                        <p>Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Proin eget tortor risus</p>

                        <blockquote>
                            “Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel ullamcorper sit amet ligula.”
                            <i class="ri-double-quotes-r"></i>
                        </blockquote>

                        <p>Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis.</p>

                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Proin eget tortor risus</p>

                        <ul class="social-icon">
                            <li>
                                <span>Share:</span>
                            </li>
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

                        <div class="leave-form">
                            <h3>Leave A Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" placeholder="Nofty">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="nofty@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Subject</label>
                                            <input type="text" class="form-control" placeholder="Your subject here">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Comment</label>
                                            <textarea name="message" class="form-control" id="message" rows="6" placeholder="Write your comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
                                                <label class="form-check-label" for="flexCheckDefault-1">
                                                    Save my name and email in this browser for the next time I comment.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="default-btn">Send Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-siderbar">
                        <div class="right-siderbar-common">
                            <div class="search-form">
                                <h3>
                                    <i class="ri-search-line"></i>
                                    Search
                                </h3>

                                <form>
                                    <input type="text" class="form-control" placeholder="Search Here">
                                    <button class="src-btn">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="right-siderbar-common">
                            <div class="categories">
                                <h3>
                                    <i class="ri-list-unordered"></i>
                                    Categories
                                </h3>

                                <ul>
                                    <li>
                                        <a href="blog-details.html">
                                            Technology
                                            <span>3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            Business
                                            <span>5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            Creative
                                            <span>8</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            Lifestyle
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            News
                                            <span>9</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            Photography
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            Inspiration
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            Project management
                                            <span>1</span>
                                        </a>
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
                                        <a href="most-answered.html">
                                            What could be UX design software?
                                        </a>
                                        <p>8 hours ago by <a href="user.html">Alan Woodson</a></p>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            All the new features that have been used in Windows 11
                                        </a>
                                        <p>11 hours ago by <a href="user.html">Juan McPhail</a></p>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            What is the most important thing in learning design?
                                        </a>
                                        <p>11 hours ago by <a href="user.html">Vickie White</a></p>
                                    </li>
                                    <li>
                                        <a href="most-answered.html">
                                            Which language is the most popular in the web right now?
                                        </a>
                                        <p>13 hours ago by <a href="user.html">Jose Merz</a></p>
                                    </li>
                                </ul>
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
                                        <a href="../../../frontend/pages/tags.html">
                                            discussion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            analytics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            life
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            computer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            interview
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            grammer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            convertion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../../../frontend/pages/tags.html">
                                            google
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->


@endsection
