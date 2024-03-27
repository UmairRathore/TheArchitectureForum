
@extends('layouts.frontend.app')

@section('content')

    <!-- Start Page title Area -->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="page-title-content">
                        <h2>Contact us</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
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
            </div>
        </div>
    </div>
    <!-- End Page title Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                                                    I agree to the <a href="{{route('terms.conditions')}}">Terms</a> and <a href="{{route('privacy.policy')}}">Privacy Policy</a>
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
                </div>

                <div class="col-lg-6">
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

                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2713.893524676537!2d-122.58847098419128!3d47.140352028062196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54910702082dcf29%3A0x93d011f7cb28f1ba!2zSG9yaXpvbiBTdCwgSm9pbnQgQmFzZSBMZXdpcy1NY0Nob3JkLCBXQSwg4Kau4Ka-4Kaw4KeN4KaV4Ka_4KaoIOCmr-CngeCmleCnjeCmpOCmsOCmvuCmt-CnjeCmn-CnjeCmsA!5e0!3m2!1sbn!2sbd!4v1641898735703!5m2!1sbn!2sbd"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection
