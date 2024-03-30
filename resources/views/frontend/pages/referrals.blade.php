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

                <div class="col-lg-9">
                    <div class="referrals-area">
                        <div class="referrals-content">
                            <h3>Spread the word with friends. Earn points.</h3>
                            <p>We have a number of ways to help spread the word to your friends and family, Choose whatever works best for you.</p>

                            <form class="referrals-form">
                                <div class="fprm-group">
                                    <label>Send a referral by email.</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Send and email">

                                    <button type="submit" class="default-btn">
                                        Send
                                    </button>
                                </div>

                                <div class="fprm-group">
                                    <label>Copy and paste your referral link anywhere.</label>
                                    <input type="text" class="form-control copy" name="email" id="text" placeholder="https://www.Pify/demo/themes/invite=ldASsui0asDOfs89JTJ">

                                    <button class="default-btn">
                                        Copy
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-referrals">
                                    <h2>14</h2>
                                    <span>Invitations Sent</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-referrals">
                                    <h2>7</h2>
                                    <span>Pending</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-referrals">
                                    <h2>2</h2>
                                    <span>Completed</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-referrals">
                                    <h2>100</h2>
                                    <span>Earned</span>
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
