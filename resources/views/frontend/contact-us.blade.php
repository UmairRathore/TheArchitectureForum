@extends('layouts.frontend.app')

@section('content')

    <!-- Start Page title Area -->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2">
                </div>
                <div class="col-lg-4 col-md-2">
                    <div class="page-title-content">
                        <h2>Contact us</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2">
                    <div class="page-title-list">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="active">
                                Contact us
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page title Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h2>Get in touch</h2>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nofty">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="nofty@gmail.com">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Phone No</label>
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="+1(514)-984-4455">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Subject</label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check ps-0">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input
                                                    name="gridCheck"
                                                    value="I agree to the terms and privacy policy."
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck"
                                                    required
                                                >

                                                <label class="form-check-label" for="gridCheck">
                                                    I agree to the <a href="{{route('user.agreement')}}">Terms of user agreement</a> and <a href="{{route('privacy.policy')}}">Privacy Policy</a>
                                                </label>
                                                <div class="help-block with-errors gridCheck-error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="contacts-info">
                        <h2>Contact informaton</h2>

                        <ul class="address">
                            <li>
                                <span>Call:</span>
                                <a href="tel:+1-719-504-1984">+1 719-504-1984</a>
                            </li>
                            <li>
                                <span>Email:</span>
                                <a href="mailto:pify@gmail.com">pify@gmail.com</a>
                            </li>
                            <li class="location">
                                <span>Address:</span>
                                2958 Horizon Circle University Place, WA 98466
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>


        </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection
