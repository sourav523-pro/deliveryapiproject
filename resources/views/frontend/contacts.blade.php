@extends('frontend.layouts.main')

@section('content')

<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-area bg-f9faff pr-20">
                    <div class="default-section-title">
                        <h6>Contact Us</h6>
                        <h3>How Can We Help You?</h3>
                    </div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12">
                                <button class="default-button" type="submit"><span>Send Message</span></button>
                                <div id="msgSubmit" class="h6 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="google-map pt-30">
                    <iframe class="g-map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2371.0813443498755!2d-113.4208817841543!3d53.53846178001977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s25%2F50%20Street%20Here%20United%20For%20Australia!5e0!3m2!1sen!2sbd!4v1626086534014!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-card-area pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Our Address:</h5>
                    <p><a href="https://goo.gl/maps/9sYMkTHSbEd1xmZr8">25 Ridge Franklin, US 1593</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="contact-card">
                    <i class="fas fa-envelope-open-text"></i>
                    <h5>Our Email:</h5>
                    <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#f1828481819e8385b1988b909fdf929e9c"><span class="__cf_email__" data-cfemail="20535550504f525460495a414e0e434f4d">[email&#160;protected]</span></a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="contact-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h5>Our Phone:</h5>
                    <p><a href="tel:031163472">031-16-3472</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
