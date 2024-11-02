<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Little Cruisers - Daycare Center for Infants and Toddlers</title>

<!-- Open Graph / Facebook -->
    <meta property="og:title" content="Little Cruisers - Daycare Center for Infants and Toddlers">
    <meta property="og:description" content="Little Cruisers provides a nurturing environment with programs tailored for children aged 12 to 18 months. Join us to foster early learning through self-directed play.">
    <meta property="og:url" content="https://littlecruisers.ca">
    <meta property="og:image" content="assets/images/favicon.svg">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Little Cruisers - Daycare Center for Infants and Toddlers">
    <meta name="twitter:description" content="Nurturing childcare for children aged 12-18 months. Discover Little Cruisers, where learning is fostered through self-directed play in a warm, secure environment.">
    <meta name="twitter:image" content="assets/images/favicon.svg">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Little Cruisers is a welcoming childcare center providing tailored programs for children aged 12-18 months. Our self-directed play approach enriches early development in a secure environment.">
    <meta name="keywords" content="daycare, infant care, toddler programs, Little Cruisers childcare, early childhood development, self-directed play">
    <meta name="author" content="Little Cruisers Childcare Center">
    <meta name="robots" content="index, follow">

    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700&amp;family=Fredoka:wght@700&amp;family=Schoolbell&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/kidearn-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
     <!-- Boxicons CSS -->
     <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/kidearn.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.svg);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper" >
        <header class="main-header main-header--three sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="/">
                            <img src="assets/images/logo.svg" alt="The Little Cruisers" width="230">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{route('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('programs')}}">Programs</a>
                            </li>
                            <li><a href="{{route('rates-and-subsidy')}}">Rates & Subsidy</a></li>
                            <li>
                                <a href="{{route('parents-guide')}}">Parents Guide</a>
                            </li>
                            <li>
                                <a href="{{route('gallery')}}">Gallery</a>
                            </li>
                            <li><a href="{{route('contact-us')}}">Contact us</a></li>
                            <li>
                                <a href="{{route('careers')}}">Careers</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a class="main-header__call" href="tel: +15872543747">
                            <i class=" icon-call main-header__call__icon"></i>
                            <span class=" main-header__call__content">
                                <span class="main-header__call__text">Get In Touch</span><!-- /.main-header__call__text -->
                                <span class="main-header__call__number">+1 587-254-3747</span>
                                <!-- /.main-header__call__number -->
                            </span><!-- /.main-header__call__content -->
                        </a>

                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->

        @yield('content')

        <footer class="main-footer-two" style="background-image: url(assets/images/shapes/Footer.webp);">
            <div class="main-footer-two__bg"></div>
            <!-- /.main-footer-two__bg -->
            <div class="main-footer-two__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                           <div class="single-footer-widget">
                                <div class="logo" style="width:210px;">
                                    <a href="/">
                                        <img src="assets/images/logo.svg" class="black-logo" alt="image">
                                    </a>
                                </div>
                                
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Us</h3>

                        <ul class="footer-contact-info">
                            <li>
                            <i class="fas fa-phone-alt"></i>
                                <span>Phone</span>
                                <a href="tel:+15872543747"> +1 587-254-3747</a>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:info@littlecruisers.ca">info@littlecruisers.ca</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Address</span>
                                121 Main St S Unit 405, Airdrie, AB T4B 0P8, Canada
                            </li>
                            <li>
                                <i class="far fa-clock"></i>
                                <span>Hours of Operation</span>
                                Mon - Fri : 6:30am - 6:00pm
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget pl-5">
                        <h3>Quick Links</h3>

                        <ul class="quick-links">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{route('about-us')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('programs')}}">Programs</a>
                            </li>
                            <li>
                                <a href="{{route('contact-us')}}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{route('rates-and-subsidy')}}">Rates &amp; Subsidy</a>
                            </li>
                            <li>
                                <a href="{{route('parents-guide')}}">Parents Guide</a>
                            </li>
                            <li>
                                <a href="{{route('gallery')}}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{route('careers')}}">Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Map</h3>
                        <div class="map" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2495.1118705593785!2d-114.01703582415985!3d51.29066532651432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53715f6ef64fb941%3A0x6432efa1d11e3186!2s121%20Main%20St%20S%20Unit%20405%2C%20Airdrie%2C%20AB%20T4B%200P8%2C%20Canada!5e0!3m2!1sen!2s!4v1709142493454!5m2!1sen!2s" width="290" height="300" style="border-radius:15%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="main-footer-two__bottom">
                <div class="container">
                    <div class="main-footer-two__bottom__inner">
                        <p class="main-footer-two__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> Little Cruisers. All Rights Reserved. Developed by
                            <a href="https://bmgroupinc.com" class="designed-by" style="font-weight:bold;" target="_blank">BM_IT</a>
                        </p>

                    </div>
                </div>
            </div>
        </footer>
    </div>



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@littlecruisers.ca">info@littlecruisers.ca</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel: +15872543747">+1 587-254-3747</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="#">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="#">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="#">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="#">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>

    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>

    <div class="modal fade" id="getInTouch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background-color:rgba(0,0,0,0.3);backdrop-filter:blur(1px);">
                <div class="modal-body">
                    <button type="button" class="btn-close book-a-tour-btn-close" data-bs-dismiss="modal" aria-label="Close" style="position:absolute;right:15px;"></button>
                    <div class="container" style="width:75%;">
                        <div class="row">
                            <div class="quote-item" style="background:none;box-shadow:none;padding:0;">
                                <div class="content">
                                    <h3 style="text-align:center;color:white;">Get In Touch</h3>
                                </div>
                            </div>
                        </div>


                        <!-- Start Quote Area -->
                        <section class="quote-area pb-100 ">
                            <div class="container">
                                @include('get_in_touch_modal_form')
                            </div>
                        </section>
                        <!-- End Quote Area -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border:none;background:transparent;">
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="box-shadow: 0px 0px 10px 5px #3b8932 !important;border-radius: 30px;">
                            <div class="col-lg-12 book-a-tour-content-col" style="padding:0">
                                <div class="quote-item" style="border-radius:30px 30px 30px 30px;padding:50px 0 50px 0;">
                                    <div class="container-fluid text-center">
                                        @if(session()->has('success'))
                                            <h5>{{ session()->get('success') }}</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="border:none;background:transparent;">
                <div class="modal-body">
                    <div class="container">
                        <div class="row" style="box-shadow: 0px 0px 10px 5px #8f2929 !important;border-radius: 30px;">
                            <div class="col-lg-12 book-a-tour-content-col" style="padding:0">
                                <div class="quote-item" style="border-radius:30px 30px 30px 30px;padding:50px 0 50px 0;">
                                    <div class="container-fluid text-center">
                                        @if(session()->has('error'))
                                            <h5>{{ session()->get('error') }}</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="assets/vendors/simpleParallax/simpleParallax.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/kidearn.js"></script>
</body>


<!-- Mirrored from bracketweb.com/kidearn-html/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 21:44:29 GMT -->

</html>