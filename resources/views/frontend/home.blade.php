@extends('frontend.layouts.main')

@section('content')


<div class="home-banner">
    <div class="shapes">
        <img class="shape1" src="assets1/images/shape/dot-1.png" alt="shape">
        <img class="shape2" src="assets1/images/shape/dot-2.png" alt="shape">
        <img class="shape3" src="assets1/images/shape/dot-3.png" alt="shape">
        <img class="shape4" src="assets1/images/shape/cross.png" alt="shape">
        <img class="shape5" src="assets1/images/shape/dot-1.png" alt="shape">
        <img class="shape6" src="assets1/images/shape/dot-2.png" alt="shape">
        <img class="shape7" src="assets1/images/shape/dot-3.png" alt="shape">
        <img class="shape8" src="assets1/images/shape/cross.png" alt="shape">
        <img class="shape9" src="assets1/images/shape/banner-circle.png" alt="shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-text-area-2 pr-20">
                    <h6>AWARD WINNING COMPANY!</h6>
                    <h1>Fastest-growing Sellers’ Network
                    </h1>
                    <p>40000+ happy clients and counting

                    </p>
                    <a class="default-button-3" href="services.html">Our Services <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-img-2">
                    <img src="assets1/images/banner/banner-img-2.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg col-md-4 col-sm-4 col-6">
            <div class="fun-facts-card">
                <h2><span class="odometer odometer-auto-theme" data-count="40000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">0000</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0000</span></span></span></span></span></div></span>+</h2>
                <p>Happy Clients</p>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-4 col-6">
            <div class="fun-facts-card">
                <h2><span class="odometer odometer-auto-theme" data-count="40000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">25</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">0</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>+</h2>
                <p>Countries</p>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-4 col-6">
            <div class="fun-facts-card">
                <h2><span class="odometer odometer-auto-theme" data-count="40000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">50</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">29</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">000</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0000</span></span></span></span></span></div></span>+</h2>
                <p>Pincode Covered</p>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-4 col-6">
            <div class="fun-facts-card">
                <h2><span class="odometer odometer-auto-theme" data-count="40000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2M</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">00</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">M</span></span></span></span></span></div></span>+</h2>
                <p>Transactions Everyday</p>
            </div>
        </div>

        <div class="col-lg col-md-4 col-sm-4 col-6">
            <div class="fun-facts-card">
                <h2><span class="odometer odometer-auto-theme" data-count="40000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">50</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">00</span></span></span></span></span></div></span>+</h2>
                <p>Happy Clients</p>
            </div>
        </div>
    </div>
</div>

<div class="service pt-100">
    <div class="container">
        <div class="default-section-title default-section-title-2 default-section-title-middle">
            <h6>Services</h6>
            <h3>Need Quick Assistance?</h3>
            <h5>Schedule a call with our expert</h5>
            <div class="row pt-4 pb-4">
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <button class="btn btn-primary" type="submit"><span>Send Message</span></button>
                    <div id="msgSubmit" class="h6 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <h5>Or Call us (Toll Free) at: 011-411-79555</h5>

        </div>
    </div>
</div>

<div class="service service-3 ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <h6>OUR SERVICES</h6>
            <h3>It’s Simple, Quick, and Transparent</h3>
            <h5>Journey to progress begins here</h5>
        </div>
        <div class="section-content">
            <div class="row justify-content-center g-0">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="service-card-3">
                        <div class="service-card-icon-area">
                            <i class="flaticon-content"></i>
                        </div>
                        <h4><a href="service-details.html">Sign Up
                            with NimbusPost</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="service-card-3">
                        <div class="service-card-icon-area">
                            <i class="flaticon-pie-chart"></i>
                        </div>
                        <h4><a href="service-details.html">Complete Your KYC</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="service-card-3">
                        <div class="service-card-icon-area">
                            <i class="flaticon-customer"></i>
                        </div>
                        <h4><a href="service-details.html">Recharge Your Account</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="service-card-3">
                        <div class="service-card-icon-area">
                            <i class="flaticon-update"></i>
                        </div>
                        <h4><a href="service-details.html">Start Shipping With Us</a></h4>
                    </div>
                </div>
            </div>
            <div class="pagination mt-30">
                <div class="col-md-12 col-sm-12 col-12">
                    <button class="default-button" type="submit"><span>Start Free Trail</span></button>
                    <div id="msgSubmit" class="h6 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assets1/images/about/a2.png" alt="image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text-area pl-20">
                    <div class="default-section-title default-section-title-2">
                        <h6>ABOUT US</h6>
                        <h3>Izan is The Most Powerful SAAS Solution</h3>
                    </div>
                    <p>Best Strategic planning dolor sit amet consectetur adipis cing elit. Scelerisque amet odio velit auctor. nam elit nulla eget sodales dui pulvinar. Best Strategic planning dolor sit sectetur morethe Scelerisque amet odio velit eu
                        auctor.
                    </p>
                    <div class="about-list">
                        <ul>
                            <li>Lorem ipsum dolor sit amet into consectetur adipis cing elit</li>
                            <li>Amet into consectetur best strategic planning sit.</li>
                            <li>Best odio velit auctor nam elit nulla eget sodales dui pulvinar.</li>
                        </ul>
                    </div>
                    <a class="default-button-3" href="about.html">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="features ptb-100 bg-f9faff">
    <div class="container">
        <div class="default-section-title default-section-title-2 default-section-title-middle">
            <h6>Features</h6>
            <h3>We Have Some Easy Way to Features Working</h3>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/022-language.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Product Engineering</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/023-driver-license.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">License Management</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/024-data.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Real Time & Data</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/025-browser.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Automatic Updates</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/026-compliant.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Quality Product</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/029-fair.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Access Benefits</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="intro ptb-100">
    <div class="container">
        <div class="intro-content">
            <div class="shape">
                <img class="shape3" src="assets1/images/shape/shape3.png" alt="image">
                <img class="shape4" src="assets1/images/shape/shape4.png" alt="image">
            </div>
            <div class="default-section-title default-section-title-2 default-section-title-middle">
                <h6>Intro</h6>
                <h3>Powerful Services Offered in SAAS Development</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="intro-video">
                            <img src="assets1/images/intro-bg.png" alt="image">
                            <div class="play-button">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=FkqoOkor9T8"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-bottom-card-area pt-70">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card features-card-2">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/028-analytics.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Better Comparison</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card features-card-2">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/029-fair.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Breaking The Rules</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="features-card features-card-2">
                        <div class="features-card-img">
                            <img src="assets1/images/icons/030-pencil.png" alt="image">
                        </div>
                        <div class="features-card-text-area">
                            <h4><a href="about.html">Faster Enrollments</a></h4>
                            <p>Building it before the de dolor sit full fledged application is openlir that always payset goden</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="app-integration pb-100">
    <div class="container">
        <div class="default-section-title default-section-title-2 default-section-title-middle">
            <h6>APPS</h6>
            <h3>150+ App Intregration To Makes More Productive</h3>
        </div>
        <div class="section-content">
            <div class="first-row">
                <div class="app-icon" data-speed="0.1" data-revert="true">
                    <img src="assets1/images/icons/014-search.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.2" data-revert="true">
                    <img src="assets1/images/icons/015-playstore.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.1" data-revert="true">
                    <img src="assets1/images/icons/017-microsoft.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.2" data-revert="true">
                    <img src="assets1/images/icons/016-chrome.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.1" data-revert="true">
                    <img src="assets1/images/icons/018-skype.png" alt="logo">
                </div>
            </div>
            <div class="second-row">
                <div class="app-icon" data-speed="0.1" data-revert="true">
                    <img src="assets1/images/icons/019-pinterest.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.2" data-revert="true">
                    <img src="assets1/images/icons/020-envato.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.1" data-revert="true">
                    <img src="assets1/images/icons/021-instagram.png" alt="logo">
                </div>
                <div class="app-icon" data-speed="0.2" data-revert="true">
                    <img src="assets1/images/icons/039-whatsapp-1.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial testimonial-2-bg bg-f9faff ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-2 default-section-title-middle">
            <h6>TESTIMONIALS</h6>
            <h3>Join Hundreds Of Successful Organizations</h3>
        </div>
        <div class="section-content">
            <div class="testimonial-slider-area-2 owl-carousel">
                <div class="testimonial-card-2">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-header-2">
                        <img src="assets1/images/testimonial/tc1.jpg" alt="image">
                        <div class="testimonial-footer-text">
                            <h4>Devid Miler</h4>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="testimonial-card-text-2">
                        <p>But building it before the evull-fledged applicao eius mod tempor dunt ut ore et dolore magna aliqua. enim ad min im veniam, quis nostrud xercitati mco laboris nisi amet magna.</p>
                        <div class="stars">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-2">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-header-2">
                        <img src="assets1/images/testimonial/tc3.jpg" alt="image">
                        <div class="testimonial-footer-text">
                            <h4>Linkon Alan</h4>
                            <p>Engineer</p>
                        </div>
                    </div>
                    <div class="testimonial-card-text-2">
                        <p>But building it before the evull-fledged applicao eius mod tempor dunt ut ore et dolore magna aliqua. enim ad min im veniam, quis nostrud xercitati mco laboris nisi amet magna.</p>
                        <div class="stars">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-2">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-header-2">
                        <img src="assets1/images/testimonial/tc2.jpg" alt="image">
                        <div class="testimonial-footer-text">
                            <h4>Jack Abraham</h4>
                            <p>Designer</p>
                        </div>
                    </div>
                    <div class="testimonial-card-text-2">
                        <p>But building it before the evull-fledged applicao eius mod tempor dunt ut ore et dolore magna aliqua. enim ad min im veniam, quis nostrud xercitati mco laboris nisi amet magna.</p>
                        <div class="stars">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-2">
                    <i class="fas fa-quote-right"></i>
                    <div class="testimonial-header-2">
                        <img src="assets1/images/testimonial/tc4.jpg" alt="image">
                        <div class="testimonial-footer-text">
                            <h4>Abraham Tomas</h4>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="testimonial-card-text-2">
                        <p>But building it before the evull-fledged applicao eius mod tempor dunt ut ore et dolore magna aliqua. enim ad min im veniam, quis nostrud xercitati mco laboris nisi amet magna.</p>
                        <div class="stars">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="why-we pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="why-we-img-2">
                    <img src="assets1/images/why-we/ww2.png" alt="image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="why-we-text-area-2 pl-20">
                    <div class="default-section-title default-section-title-2">
                        <h6>Choose</h6>
                        <h3>One Of The Three Main Categories Of SASS Solution</h3>
                    </div>
                    <p>We esent fermentum elit sed libero egestas ullamcorper. auris pharetra set dolor labore magna nulla id augue auctor placerat. proin tortor leo, convallis a mi a, feugiate aliqua sit amet aliquam dui. cursus auctor nisl non vulputate
                        insididunt ipsum jaber quite amet.</p>
                    <div class="progress-bar-area">
                        <div id="bar1" class="barfiller">
                            <span class="label">Pixel Perfect Design</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                        <div id="bar2" class="barfiller">
                            <span class="label">Unique & Minimal Design</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="85"></span>
                        </div>
                        <div id="bar3" class="barfiller">
                            <span class="label">24/7 Free Online Support</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="fun-facts pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg col-md-4 col-sm-4 col-6">
                <div class="fun-facts-card">
                    <h2><span class="odometer" data-count="10">00</span>k<sup>+</sup></h2>
                    <p>Project Completed</p>
                </div>
            </div>
            <div class="col-lg col-md-4 col-sm-4 col-6">
                <div class="fun-facts-card">
                    <h2><span class="odometer" data-count="25">00</span>k<sup>+</sup></h2>
                    <p>Years Of Experience</p>
                </div>
            </div>
            <div class="col-lg col-md-4 col-sm-4 col-6">
                <div class="fun-facts-card">
                    <h2><span class="odometer" data-count="76">00</span>k<sup>+</sup></h2>
                    <p>Running Project</p>
                </div>
            </div>
            <div class="col-lg col-md-4 col-sm-4 col-6">
                <div class="fun-facts-card">
                    <h2><span class="odometer" data-count="30">00</span>k<sup>+</sup></h2>
                    <p>Team Member</p>
                </div>
            </div>
            <div class="col-lg col-md-4 col-sm-4 col-6">
                <div class="fun-facts-card">
                    <h2><span class="odometer" data-count="03">00</span>k<sup>+</sup></h2>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog ptb-100 bg-f9faff">
    <div class="container">
        <div class="default-section-title default-section-title-2 default-section-title-middle">
            <h6>BLOG</h6>
            <h3>Our Popular Blog Post</h3>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets1/images/blog/b1.jpg" alt="image"></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="fas fa-user"></i> By Admin</li>
                                    <li><i class="far fa-comments"></i> No Comments</li>
                                    <li><i class="far fa-calendar-alt"></i> 01 July 2021</li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Some Important Rules To Start A New Business</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets1/images/blog/b3.jpg" alt="image"></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="fas fa-user"></i> By Admin</li>
                                    <li><i class="far fa-comments"></i> No Comments</li>
                                    <li><i class="far fa-calendar-alt"></i> 03 July 2021</li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Know Top Ten Rules For Corporate Business</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card blog-card-2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets1/images/blog/b2.jpg" alt="image"></a>
                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="fas fa-user"></i> By Admin</li>
                                    <li><i class="far fa-comments"></i> No Comments</li>
                                    <li><i class="far fa-calendar-alt"></i> 01 July 2021</li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Why Would You Need Some New Business</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
