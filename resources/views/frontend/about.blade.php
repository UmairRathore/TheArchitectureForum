@extends('layouts.frontend.app')

@section('content')
{{--    <!-- Start About Banner Area -->--}}
{{--    <div class="about-banner-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="about-banner-content">--}}
{{--                        <span class="top-title">Who we are</span>--}}
{{--                        <h2>Our job is to empower the world through the development of technology through combined knowledge.</h2>--}}
{{--                        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec sollicitudin molestie malesuada pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus magna.</p>--}}
{{--                        <p>Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-5">--}}
{{--                    <div class="about-banner-img">--}}
{{--                        <img src="{{asset('frontend/assets/images/banner-img.png')}}" alt="Image">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End About Banner Area -->--}}

    <!-- Start Monthly User Area -->
<div class="main-content-area ptb-100">
        <div class="container">
            <div class="monthly-user-bg pt-100 pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-monthly-item">
                            <h3>10+ million</h3>
                            <span>Monthly visitors to our network</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-monthly-item">
                            <h3>2 Million</h3>
                            <span>Questions asked to-date</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-monthly-item">
                            <h3>1000+</h3>
                            <span>Customer companies for all products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- End Monthly User Area -->

    <!-- Start Why Choose Us Area -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-img">
                        <img src="{{asset('frontend/assets/images/choose-img.png')}}" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-content">
                        <span class="top-title">Why choosing Pify</span>
                        <h2>The main reason why you choose it is that we share our knowledge at the doorsteps of the world</h2>
                        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec sollicitudin molestie malesuada.</p>

                        <ul>
                            <li>
                                <h3>First priority customer mindset</h3>
                                <p>Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus.</p>
                            </li>
                            <li>
                                <h3>Be transparent</h3>
                                <p>Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<div>

</div>
    <!-- End Why Choose Us Area -->
</div>


@endsection
