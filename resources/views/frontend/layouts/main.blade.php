<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets1/css/animate.min.css">
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/fontawsome.min.css">
    <link rel="stylesheet" href="assets1/fonts/font/flaticon.css">
    <link rel="stylesheet" href="assets1/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets1/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets1/css/nice-select.min.css">
    <link rel="stylesheet" href="assets1/css/barfiller.min.css">
    <link rel="stylesheet" href="assets1/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets1/css/odometer.min.css">
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/responsive.css">
    <title>Izan - Software & SaaS Startup HTML Template</title>
    <link rel="icon" type="image/png" href="assets1/images/fav-icon.png">
</head>

<body>

    <div class="topbar topbar-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="topbar-left-side">
                        <ul>
                            <li><i class="fas fa-phone-alt"></i> <a href="tel:+13454567877">+1-3454-5678-77</a></li>
                            <li><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/LFFvE4dNnyq67gGeA">2976 Sunrise Avenue, Las Vegas, USA</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="topbar-right-side">
                        <div class="account">
                            <a href="{{ route('login') }}"><i class="fas fa-user"></i> Login</a>
                        </div>
                        <div class="header-social-icons">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area header-area-2">
        <div class="navbar-area">

            <div class="main-responsive-nav">
                <div class="container">
                    <div class="mobile-nav">
                        <a href="index.html" class="logo"><img src="assets1/images/logo.png" alt="logo" /></a>
                        <div class="menu-sidebar-1 menu-small-device">
                            <div class="call-button">
                                <i class="fas fa-headset"></i>
                                <p>Have Any <span>Questions?</span></p>
                                <a href="tel:+980045647823">+980-045-647-823</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets1/images/logo.png" alt="logo" />
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item plus-icon">
                                    <a href="{{ route('homepage') }}" class="nav-link active">Home </a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="index.html" class="nav-link">Home Page 1</a></li>
                                        <li class="nav-item"><a href="index-2.html" class="nav-link active">Home Page 2</a></li>
                                        <li class="nav-item"><a href="index-3.html" class="nav-link">Home Page 3</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">About Us </a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index-2.html#" class="nav-link dropdown-toggle">Services <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="services.html" class="nav-link">Services 01</a></li>
                                                <li class="nav-item"><a href="services-2.html" class="nav-link">Services 02</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="service-details.html" class="nav-link">Service Details</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('services') }}" class="nav-link">Servieces</a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                                        <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                        <li class="nav-item"><a href="team.html" class="nav-link">Our Team</a></li>
                                        <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing Plan</a></li>
                                        <li class="nav-item"><a href="profile-authentication.html" class="nav-link">My Account</a></li>
                                        <li class="nav-item"><a href="error.html" class="nav-link">404 Error</a></li>

                                        <li class="nav-item"><a href="privacy.html" class="nav-link">Privacy Policy</a></li>
                                        <li class="nav-item"><a href="terms.html" class="nav-link">Terms & Conditions</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pricing') }}" class="nav-link">Pricing </a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="case.html" class="nav-link">Case Study</a></li>
                                        <li class="nav-item"><a href="case-details.html" class="nav-link">Case Details</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('support') }}" class="nav-link">Support </a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="case.html" class="nav-link">Case Study</a></li>
                                        <li class="nav-item"><a href="case-details.html" class="nav-link">Case Details</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                                    {{-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog Grid</a></li>
                                        <li class="nav-item"><a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a></li>
                                        <li class="nav-item"><a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a></li>
                                        <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link">Contact Us</a></li>
                            </ul>
                            <div class="menu-sidebar menu-sidebar-1">
                                <a class="default-button-3 default-button-3-h" href="{{ route('login') }}">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                <div class="call-button">
                                    <i class="fas fa-headset"></i>
                                    <p>Have Any <span>Questions?</span></p>
                                    <a href="tel:+980045647823">+980-045-647-823</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


@yield('content')


    <div class="footer footer-2 ptb-100 bg-000000">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-logo-area">
                        <a href="index.html"><img src="assets1/images/white-log.png" alt="image"></a>
                        <p>Lorem ipsum dolor sit amet, consec tetur elit eiusmod tempor incididunt labore dolore magna aliqua consec tetur adipis cing elite sed do labor.</p>
                        <div class="footer-social-icons">
                            <span>Follow Us:</span>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-contact-list">
                        <h3>Get In Touch</h3>
                        <div class="footer-content-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5>Location:</h5>
                            <p><a href="https://goo.gl/maps/LFFvE4dNnyq67gGeA">2976 Sunrise Avenue, Las Vegas, USA</a></p>
                        </div>
                        <div class="footer-content-card">
                            <i class="fas fa-envelope"></i>
                            <h5>Email:</h5>
                            <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#55262025253a2721153c2f343b7b363a38"><span class="__cf_email__" data-cfemail="e5969095958a9791a58c9f848bcb868a88">[email&#160;protected]</span></a></p>
                        </div>
                        <div class="footer-content-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h5>Phone:</h5>
                            <p><a href="tel:+13454567877">+1-3454-5678-77</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-quick-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="about.html" target="_blank"><i class="fas fa-angle-right"></i> <span>About</span></a></li>
                            <li><a href="services.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Our Services</span></a></li>
                            <li><a href="testimonial.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Testimonials</span></a></li>
                            <li><a href="team.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Our Team</span></a></li>
                            <li><a href="blog.html" target="_blank"><i class="fas fa-angle-right"></i> <span>Our Blog</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-links footer-newsletter">
                        <h3>Subscribe</h3>
                        <p>Subscribe To Our Newsletter To Get Our Update News!</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                            <button class="btn" type="button"><i class="far fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="copyright copyright-2 bg-000000">
        <div class="container">
            <p>Copyright @2021. <strong>Izan</strong> All Rights Reserved By <a target="_blank" href="https://hibootstrap.com/">HiBootstrap</a></p>
        </div>
    </div>

    <div class="go-top"><i class="fab fa-airbnb"></i></div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/TweenMax.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/barfiller.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
