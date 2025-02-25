<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Two || Villoz || HTML Template For Villa & Vacation Rentals</title>
   <!-- Favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
<link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
<meta name="description" content="Villoz is a modern HTML Template for accommodation, airbnb, booking, booking calendar, booking forms, commercial and residential, holiday booking, hotel booking, modern, rentals, reservation, responsive, room booking, travel agency, vacation rentals websites and businesses." />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- Reey Font -->
<link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}">

<!-- CSS Vendors -->
<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/villoz-icons/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />

<!-- Template Styles -->
<link rel="stylesheet" href="{{ asset('assets/css/villoz.css') }}" />

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        {{--header section starts--}}
        <div class="main-header">
            <header class="main-header__bottom main-header--two sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__logo">
                        <a href="index.html">
                            <img src="assets/images/logo-light.png" alt="Villoz HTML" width="125">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">


                            <li class="dropdown">
                                <a href="#">Pages</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('itempath') }}">Destination</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Villa</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="contact.html" class="villoz-btn villoz-btn--border main-header__btn">
                            <i>Start Booking</i>
                            <span>Start Booking</span>
                        </a><!-- /.thm-btn main-header__btn -->
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="cart.html" class="main-header__cart">
                            <i class="icon-shopping-cart" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.container-fluid -->
            </header><!-- /.main-header -->
        </div><!-- /.main-header -->
        {{--header section ends--}}
        
        @yield('content');

        {{--footer section starts--}}

        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__top">
                <div class="container">
                    <a href="index.html" class="main-footer__logo">
                        <img src="assets/images/logo-light.png" width="125" alt="Villoz HTML Template">
                    </a>
                    <div class="main-footer__social">
                        <a href="https://twitter.com">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="https://facebook.com">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://pinterest.com">
                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                            <span class="sr-only">Pinterest</span>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div><!-- /.main-footer__social -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <div class="row">
                            <div class="col-md-12 col-lg-7">
                                <div class="footer-widget footer-widget--newsletter">
                                    <h3 class="footer-widget__title">Sign up for Exclusive Offers</h3>
                                    <!-- /.footer-widget__title -->
                                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__form mc-form">
                                        <input type="text" placeholder="Enter email address">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </form><!-- /.footer-widget__form -->
                                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                                    <p class="footer-widget__copyright">© Copyright 2023 by <a href="index.html">Villoz HTML Template</a>
                                    </p>
                                    <!-- /.footer-widget__copyright -->
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-12 col-lg-7 -->
                            <div class="col-md-6 col-lg-2">
                                <div class="footer-widget footer-widget--links">
                                    <ul class="list-unstyled footer-widget__links">
                                        <li><a href="about.html">About </a></li>
                                        <li><a href="villa-grid-1.html">Our Villas</a></li>
                                        <li><a href="blog-list.html">News & Media</a></li>
                                        <li><a href="destination.html">Destinations</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul><!-- /.list-unstyled footer-widget__links -->
                                </div><!-- /.footer-widget footer-widget--links -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="footer-widget footer-widget--contact">
                                    <p class="footer-widget__text">88 Broklyn Golden Road Street,
                                        New York. USA</p><!-- /.footer-widget__text -->
                                    <ul class="list-unstyled footer-widget__contact">
                                        <li><a href="mailto:company@gmail.com">company@gmail.com</a></li>
                                        <li><a href="tel:+928800-8632">+92 (8800) - 8632</a></li>
                                    </ul><!-- /.list-unstyled footer-widget__links -->
                                </div><!-- /.footer-widget footer-widget--links -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

        {{--footer section ends--}}
        
    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@villoz.com">needhelp@villoz.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://facebook.com">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://pinterest.com">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="villoz-btn villoz-btn--base">
                    <i><i class="icon-magnifying-glass"></i></i>
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->


    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/tilt/tilt.jquery.js') }}"></script>
    <script src="{{ asset('assets/vendors/simpleParallax/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
    <!-- Template JS -->
    <script src="{{ asset('assets/js/villoz.js') }}"></script>
    
</body>

</html>