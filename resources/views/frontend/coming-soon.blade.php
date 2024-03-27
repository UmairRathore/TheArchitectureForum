
@extends('layouts.frontend.app')

@section('content')


    <!-- Start Coming Soon Area -->
    <div class="coming-soon-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="coming-soon-content">
                    <h2>Coming Soon</h2>

                    <div id="timer" class="flex-wrap d-flex justify-content-center">
                        <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                    </div>

                    <form class="newsletter-form" data-toggle="validator">
                        <div class="form-group">
                            <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                        </div>

                        <button type="submit" class="default-btn">
                            Subscribe
                            <i class="flaticon-next"></i>
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                        <p>If you would like to be notified when your app is live, Please subscribe to our mailing list.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Coming Soon Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>

@endsection
