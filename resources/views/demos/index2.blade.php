@extends('layout.layout')

@php
    $headTitle = 'Home Two';
    $header='false';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

    <!-- /.preloader -->

    <div class="page-wrapper">

        <header class="main-header-two clearfix">
            <div class="main-header-two__top">
                <div class="main-header-two__top-social-box">
                    <div class="container">
                        <div class="main-header-two__top-social-box-inner">
                            <p class="main-header-two__top-social-text"> <i class="fa fa-clock"></i> <span>Open
                                    Hours:</span> Mon – Sat: 08 am – 05 pm, Sunday: CLOSED</p>
                            <div class="main-header-two__top-menu-social-box">
                                <div class="main-header-two__top-menu-box">
                                    <ul class="list-unstyled main-header-two__top-menu">
                                        <li><a href="{{ route('makeaClaimDeath') }}">Make a claim</a></li>
                                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                    </ul>
                                </div>
                                <div class="main-header-two__top-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header-two__top-details">
                    <div class="container">
                        <div class="main-header-two__top-details-inner">
                            <div class="main-header-two__logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt=""></a>
                            </div>
                            <ul class="list-unstyled main-header-two__top-details-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <h5>Drop a line</h5>
                                        <p><a href="mailto:info@kmil.co.id">info@kmil.co.id</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone-call"></span>
                                    </div>
                                    <div class="text">
                                        <h5>Call for help</h5>
                                        <p><a href="tel:9200368090">0813-1629-7120</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <h5>30 commercial Road</h5>
                                        <p>Fratton, Indonesia</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-two__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu-two__wrapper-inner clearfix">
                            <div class="main-menu-two__left">
                                <div class="main-menu-two__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="current megamenu megamenu-clickable megamenu-clickable--toggler is-new-menu">
                                            <a href="{{ route('index') }}">Demos</a>
                                            <ul>
                                                <li>
                                                    <div class="megamenu-popup">
                                                        <span class="megamenu-clickable--close">
                                                            <a href="#"></a>
                                                        </span><!-- /.megamenu-clickable--close -->
                                                        <div class="megamenu-popup__content">
                                                            <div class="demos-one">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <span class="demos-one__new">new</span>
                                                                                <!-- /.demos-one__new -->
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-17-06-2023/demos/home-1-9.png') }}" alt="Home Dark">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index6') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('index6OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page 06</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <span class="demos-one__new">new</span>
                                                                                <!-- /.demos-one__new -->
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-17-06-2023/demos/home-1-10.png') }}" alt="Home Dark">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index7') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('index7OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page 07</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-7.png') }}" alt="Home Dark">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index4') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('index4OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page 04</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-8.png') }}" alt="Home Dark">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index5') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('index5OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page 05</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-1.png') }}" alt="Home Page 01">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('indexOnePage') }}" class="thm-btn">One Page
                                                                                        </a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page 01</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-2.png') }}" alt="Home Page 02">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index2') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('index2OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page 02</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-3.png') }}" alt="Home page 03">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('index3') }}" class="thm-btn">Multi
                                                                                            Page </a>
                                                                                        <a href="{{ route('index3OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home page
                                                                                        03</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-4.png') }}" alt="Home Boxed">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('indexBoxed') }}" class="thm-btn">View
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home boxed</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-5.png') }}" alt="Home Dark">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('indexDark') }}" class="thm-btn">View
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home dark</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demos-one__single">
                                                                                <div class="demos-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/update-10-02-2023/demos/home-1-6.png') }}" alt="Home Dark">
                                                                                    <div class="demos-one__buttons">
                                                                                        <a href="{{ route('indexRtl') }}#googtrans(en%7Car)" class="thm-btn">View
                                                                                            Page</a>
                                                                                    </div>
                                                                                    <!-- /.demos-one__buttons -->
                                                                                </div><!-- /.demos-one__image -->
                                                                                <div class="demos-one__text">
                                                                                    <h3>Home RTL</h3>
                                                                                </div><!-- /.demos-one__text -->
                                                                            </div><!-- /.demos-one__single -->
                                                                        </div><!-- /.col-md-6 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.container -->
                                                            </div><!-- /.demos-one -->
                                                        </div><!-- /.megamenu-popup__content -->
                                                    </div><!-- /.megamenu-popup -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">About Us</a>
                                            <ul>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li class="is-new-menu"><a href="{{ route('signIn') }}">Sign in</a></li>
                                                <li class="is-new-menu"><a href="{{ route('makeaClaimDeath') }}">Make a
                                                        claim</a>
                                                </li>
                                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                                <li><a href="{{ route('portfolioCarousel') }}">Portfolio carousel</a></li>
                                                <li><a href="{{ route('portfolioDetails') }}">Portfolio details</a></li>
                                                <li><a href="{{ route('teamPage') }}">Team</a></li>
                                                <li><a href="{{ route('teamCarousel') }}">Team carousel</a></li>
                                                <li><a href="{{ route('teamDetails') }}">Team details</a></li>
                                                <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                                <li><a href="{{ route('testimonialCarousel') }}">Teatimonials carousel</a>
                                                </li>
                                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                                <li><a href="{{ route('faq') }}">FAQs</a></li>
                                                <li><a href="{{ route('errorPage') }}">404 error</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Business Line </a>
                                            <ul>
                                                <li><a href="{{ route('insurance01') }}">Insurance 01</a></li>
                                                <li><a href="{{ route('insurance02') }}">Insurance 02</a></li>
                                                <li><a href="{{ route('insurance03') }}">Insurance 03</a></li>
                                                <li><a href="{{ route('carInsurance') }}">Stamping Parts</a></li>
                                                <li><a href="{{ route('lifeInsurance') }}">Industrial Parts</a></li>
                                                <li><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a>
                                                </li>
                                                <li><a href="{{ route('healthInsurance') }}">Sheet Metal Processing</a></li>
                                                <li><a href="{{ route('businessInsurance') }}">Special Purpose Machine</a></li>
                                                <li><a href="{{ route('fireInsurance') }}">Cutting Laser</a></li>
                                                <li><a href="{{ route('marriageInsurance') }}">Precision Parts</a></li>
                                                <li><a href="{{ route('travelInsurance') }}">Engineering Manufacturing</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('products') }}">Product</a>
                                            <ul>
                                                <li><a href="{{ route('products') }}">Product</a></li>
                                                <li><a href="{{ route('productDetails') }}">Shop details</a></li>
                                                <li><a href="{{ route('cart') }}">Cart</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Services</a>
                                            <ul>
                                                <li><a href="{{ route('news') }}">Services</a></li>
                                                <li><a href="{{ route('newsCarousel') }}">News carousel</a></li>
                                                <li><a href="{{ route('newsSidebar') }}">News right sidebar</a></li>
                                                <li class="is-new-menu"><a href="{{ route('newsSidebarLeft') }}">News left
                                                        sidebar</a></li>
                                                <li><a href="{{ route('newsDetails') }}">News details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu-two__right">
                                <div class="main-menu-two__search-box-get-quote">
                                    <div class="main-menu-two__search-box">
                                        <a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>
                                        <a href="{{ route('cart') }}" class="main-menu-two__cart  insur-two-icon-shopping-cart"></a>
                                    </div>
                                    <div class="main-menu-two__get-quote">
                                        <a href="{{ route('contact') }}" class="thm-btn main-menu-two__get-quote-btn">Get a
                                            Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-two clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-2-1.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="main-slider-two__inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-7">
                                        <div class="main-slider-two__content">
                                            <h2 class="main-slider-two__title">Let’s plan your <br> Jig & Fixtures</h2>
                                            <p class="main-slider-two__text">Phasellus condimentum laoreet turpis, ut
                                                tincid <br> sodales in. Integer leo arcu, mollis sit amet <br> tempor.
                                            </p>
                                            <div class="main-slider-two__btn-box">
                                                <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn">Let’s Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5">
                                        <div class="main-slider-two__right">
                                            <div class="main-slider-two__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                    <div class="main-slider-two__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider-two__video-text">Watch <br> How it Works</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-2-2.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="main-slider-two__inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-7">
                                        <div class="main-slider-two__content">
                                            <h2 class="main-slider-two__title">Let’s plan your <br> Jig & Fixtures</h2>
                                            <p class="main-slider-two__text">Phasellus condimentum laoreet turpis, ut
                                                tincid <br> sodales in. Integer leo arcu, mollis sit amet <br> tempor.
                                            </p>
                                            <div class="main-slider-two__btn-box">
                                                <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn">Let’s Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5">
                                        <div class="main-slider-two__right">
                                            <div class="main-slider-two__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                    <div class="main-slider-two__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider-two__video-text">Watch <br> How it Works</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-2-3.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="main-slider-two__inner">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-7">
                                        <div class="main-slider-two__content">
                                            <h2 class="main-slider-two__title">Let’s plan your <br> Jig & Fixtures</h2>
                                            <p class="main-slider-two__text">Phasellus condimentum laoreet turpis, ut
                                                tincid <br> sodales in. Integer leo arcu, mollis sit amet <br> tempor.
                                            </p>
                                            <div class="main-slider-two__btn-box">
                                                <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn">Let’s Get
                                                    Started</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5">
                                        <div class="main-slider-two__right">
                                            <div class="main-slider-two__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                    <div class="main-slider-two__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                                <h4 class="main-slider-two__video-text">Watch <br> How it Works</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature Two Start-->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset('assets/images/resources/feature-two-img-1.jpg') }}" alt="">
                            </div>
                            <div class="feature-two__content">
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <span class="icon-cash-flow"></span>
                                    </div>
                                    <div class="feature-two__text-box">
                                        <p class="feature-two__text"><a href="{{ route('about') }}">Cash flow <br> management</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset('assets/images/resources/feature-two-img-2.jpg') }}" alt="">
                            </div>
                            <div class="feature-two__content">
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <span class="icon-profits"></span>
                                    </div>
                                    <div class="feature-two__text-box">
                                        <p class="feature-two__text"><a href="{{ route('about') }}">Investment <br>
                                                opportunities</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__img">
                                <img src="{{ asset('assets/images/resources/feature-two-img-3.jpg') }}" alt="">
                            </div>
                            <div class="feature-two__content">
                                <div class="feature-two__content-inner">
                                    <div class="feature-two__icon">
                                        <span class="icon-insurance-2"></span>
                                    </div>
                                    <div class="feature-two__text-box">
                                        <p class="feature-two__text"><a href="{{ route('about') }}">protect against <br>
                                                uncertainties</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                </div>
            </div>
        </section>
        <!--Feature Two End-->

        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">About company</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get reliable & quick insurance for any purpose</h2>
                            </div>
                            <p class="about-two__text">KMIL delivers precision-engineered solutions for industries demanding accuracy and reliability.</p>
                            <ul class="list-unstyled about-two__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Pina & Associates Insurance</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Payment at Contingency</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Amount of Payment</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Large Number of Insurance</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('about') }}" class="thm-btn about-two__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__middle">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-two__awards-box">
                                    <div class="about-two__awards-inner">
                                        <h2 class="about-two__awards-year">28</h2>
                                        <p class="about-two__awards-content">National Awards Won</p>
                                        <div class="about-two__awards-shape-2">
                                            <img src="{{ asset('assets/images/shapes/about-two-awards-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="about-two__dots float-bob-y">
                                    <img src="{{ asset('assets/images/shapes/about-two-dots.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="about-two__counter">
                            <ul class="list-unstyled about-two__counter-list">
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000" data-stop="1234">00</h3>
                                        </div>
                                        <p class="about-two__counter-text-1">Projects completed</p>
                                        <p class="about-two__counter-text-2">Nulla viverra tortor eu nulla pulvinar
                                            dignissim.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000" data-stop="955">00</h3>
                                        </div>
                                        <p class="about-two__counter-text-1">Satisfied customers</p>
                                        <p class="about-two__counter-text-2">Nulla viverra tortor eu nulla pulvinar
                                            dignissim.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__counter-single">
                                        <div class="about-two__counter-count count-box">
                                            <h3 class="count-text" data-speed="4000" data-stop="100">00</h3>
                                            <span class="about-two__counter-percent">%</span>
                                        </div>
                                        <p class="about-two__counter-text-1">Claim success rates</p>
                                        <p class="about-two__counter-text-2">Nulla viverra tortor eu nulla pulvinar
                                            dignissim.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

        <!--Services Two Start-->
        <section class="services-two">
            <div class="services-two-shape-1" style="background-image: url('{{ asset('assets/images/shapes/services-two-shape-1.png') }}')"></div>
            <div class="container">
                <div class="services-two__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-two__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our services</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-5.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/shapes/section-title-shape-6.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">We Cover All Aspects of Precision Engineering and Metal Fabrication</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="services-two__top-right">
                                <p class="services-two__top-text">KMIL delivers precision-engineered solutions for industries demanding accuracy and reliability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-two__bottom">
                    <div class="row">
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-drive"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('carInsurance') }}">Stamping Parts</a></h3>
                                <p class="services-two__text">PT. Kurnia Mustika Indah Lestari ‘s custom metal stamping services deliver precision metal stampings from prototypes designed by our engineer through production quantities. We run stampings in high-volume, tight tolerance, precision stampings in Stainless Steel, Cold Rolled Steel, HLE Steel, Zinc plated steel, Aluminium Plated Steel, Alumunium, Brass and Copper. Our press machines have full feed lines and are die sensor protection ready. PT. Kurnia Mustika Indah Lestari runs nearly 30 million stampings per year at a 98% on-time delivery rate.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-family"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts</a></h3>
                                <p class="services-two__text">For years PT. Kurnia Mustika Indah Lestari has been dedicated to providing the best custom metal fabrication services available, and we continue to do so. We provide cutting, folding, welding, machining, punching, shearing, and casting processes depending on your needs. These accurate and durable tools provide our manufacturing based customers with the capability to produce precision parts for a wide variety of industries. Industrial Tool and Die serves industries including but not limited to Aerospace, Automotive, Medical, Commercial, and the Electrical Connector industry.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-home"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a></h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    rutrum metus et elit.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-heart-beat"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('healthInsurance') }}">Sheet Metal Processing</a>
                                </h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    rutrum metus et elit.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-briefcase"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('businessInsurance') }}">Special Purpose Machine</a>
                                </h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    rutrum metus et elit.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-fire"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('fireInsurance') }}">Cutting Laser</a></h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    rutrum metus et elit.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-ring"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('marriageInsurance') }}">Precision Parts</a>
                                </h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    rutrum metus et elit.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                        <!--Services Two Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="services-two__single">
                                <div class="services-two__icon-box">
                                    <div class="services-two__icon">
                                        <span class="icon-plane"></span>
                                    </div>
                                </div>
                                <h3 class="services-two__title"><a href="{{ route('travelInsurance') }}">Engineering Manufacturing</a>
                                </h3>
                                <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                    rutrum metus et elit.</p>
                            </div>
                        </div>
                        <!--Services Two Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->

        <!--Work Together Start-->
        <section class="work-together">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="work-together__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">We always help</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Let’s work together for all life’s moments</h2>
                            </div>
                            <div class="work-together__content-box">
                                <div class="work-together__img">
                                    <img src="{{ asset('assets/images/resources/work-together-img.jpg') }}" alt="">
                                </div>
                                <div class="work-together__text-box">
                                    <p class="work-together__text">Suspendisse finibus urna mauris, vitae consequat quam
                                        vel. Vestibulum leo ligula, vitae commodo nisl lorem ipsum is simply free text.
                                    </p>
                                </div>
                            </div>
                            <div class="work-together__progress">
                                <div class="work-together__progress-single">
                                    <h4 class="work-together__progress-title">Consultation</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="work-together__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4><span>?</span> Maecenas scelerisque nibh vitae turpis</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4><span>?</span> Nulla fermentum leo nibh, a vestibulum</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4><span>?</span> Quisque vel rutrum tortor, in rhoncus</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id
                                                quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis,
                                                sit amet mattis magna varius non.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Work Together End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__content">
                    <div class="cta-one__inner">
                        <div class="cta-one__left">
                            <h3 class="cta-one__title">Call to Our Team</h3>
                        </div>
                        <div class="cta-one__right">
                            <div class="cta-one__call">
                                <div class="cta-one__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="cta-one__call-number">
                                    <a href="tel:9200368090">0813-1629-7120</a>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                            <div class="cta-one__btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn cta-one__btn">Get a Quote</a>
                            </div>
                        </div>
                        <div class="cta-one__img">
                            <img src="{{ asset('assets/images/resources/cta-one-img.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Brand One Start-->
        <x-brandOne/>
        <!--Brand One End-->

        <!--Get Insurance Start-->
        <section class="get-insuracne-two">
            <div class="get-insuracne-two-shape-3 float-bob-x">
                <img src="{{ asset('assets/images/shapes/get-insuracne-two-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="get-insuracne-two__left">
                            <div class="get-insuracne-two__shape-box">
                                <div class="get-insuracne-two-shape-1" style="background-image: url('{{ asset('assets/images/shapes/get-insuracne-two-shape-1.png') }}')">
                                </div>
                                <div class="get-insuracne-two-shape-2">
                                    <img src="{{ asset('assets/images/shapes/get-insuracne-two-shape-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="get-insuracne-two__img">
                                <img src="{{ asset('assets/images/resources/get-insurance-two-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="get-insuracne-two__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Request a Free quote</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get a customized quote for your precision <br>manufacturing needs!</h2>
                            </div>
                            <div class="get-insuracne-two__tab clearfix">
                                <div class="get-insuracne-two__tab-box tabs-box clearfix">
                                    <div class="get-insuracne-two__inner clearfix">
                                        <div class="get-insuracne-two__tab-left">
                                            <ul class="tab-buttons clearfix list-unstyled">
                                                <li data-tab="#home" class="tab-btn active-btn">
                                                    <div class="get-insuracne-two__tab-btn-content">
                                                        <div class="get-insuracne-two__tab-icon">
                                                            <img src="{{ asset('assets/images/icon/get-insuracne-two-tab-icon-1.png') }}" alt="">
                                                        </div>
                                                        <div class="get-insuracne-two__tab-text-box">
                                                            <p class="get-insuracne-two__tab-text">Home <br> insurance
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li data-tab="#vehicles" class="tab-btn">
                                                    <div class="get-insuracne-two__tab-btn-content">
                                                        <div class="get-insuracne-two__tab-icon">
                                                            <img src="{{ asset('assets/images/icon/get-insuracne-two-tab-icon-2.png') }}" alt="">
                                                        </div>
                                                        <div class="get-insuracne-two__tab-text-box">
                                                            <p class="get-insuracne-two__tab-text">Vehicles <br>
                                                                insurance</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li data-tab="#life" class="tab-btn">
                                                    <div class="get-insuracne-two__tab-btn-content">
                                                        <div class="get-insuracne-two__tab-icon">
                                                            <img src="{{ asset('assets/images/icon/get-insuracne-two-tab-icon-3.png') }}" alt="">
                                                        </div>
                                                        <div class="get-insuracne-two__tab-text-box">
                                                            <p class="get-insuracne-two__tab-text">Life <br> insurance
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li data-tab="#business" class="tab-btn">
                                                    <div class="get-insuracne-two__tab-btn-content">
                                                        <div class="get-insuracne-two__tab-icon">
                                                            <img src="{{ asset('assets/images/icon/get-insuracne-two-tab-icon-4.png') }}" alt="">
                                                        </div>
                                                        <div class="get-insuracne-two__tab-text-box">
                                                            <p class="get-insuracne-two__tab-text">Dies <br>
                                                                Marking</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="get-insuracne-two__tab-right">
                                            <div class="tabs-content">
                                                <!--tab-->
                                                <div class="tab active-tab" id="home">
                                                    <div class="get-insuracne-two__content">
                                                        <form class="get-insuracne-two__form">
                                                            <div class="get-insuracne-two__content-box">
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="text" placeholder="Full name" name="name">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="email" placeholder="Email address" name="email">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <select class="selectpicker" aria-label="Default select example">
                                                                        <option selected>Select type of insurance
                                                                        </option>
                                                                        <option value="1">Stamping Parts</option>
                                                                        <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                        <option value="3">Jig & Fixtures</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__progress">
                                                                <div class="get-insuracne-two__progress-single">
                                                                    <h4 class="get-insuracne-two__progress-title">Limits
                                                                        of Balance:</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="70%">
                                                                            <div class="count-text"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="get-insuracne-two__balance-box">
                                                                        <p class="get-insuracne-two__balance">$90000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__content-bottom">
                                                                <button type="submit" class="thm-btn get-insuracne-two__btn">Get a Quote
                                                                    Now</button>
                                                                <div class="get-insuracne-two__content-bottom-text-box">
                                                                    <p>Been here before?</p>
                                                                    <h5>Review your quotes.</h5>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                                <div class="tab" id="vehicles">
                                                    <div class="get-insuracne-two__content">
                                                        <form class="get-insuracne-two__form">
                                                            <div class="get-insuracne-two__content-box">
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="text" placeholder="Full name" name="name">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="email" placeholder="Email address" name="email">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <select class="selectpicker" aria-label="Default select example">
                                                                        <option selected>Select type of insurance
                                                                        </option>
                                                                        <option value="1">Stamping Parts</option>
                                                                        <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                        <option value="3">Jig & Fixtures</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__progress">
                                                                <div class="get-insuracne-two__progress-single">
                                                                    <h4 class="get-insuracne-two__progress-title">Limits
                                                                        of Balance:</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="70%">
                                                                            <div class="count-text"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="get-insuracne-two__balance-box">
                                                                        <p class="get-insuracne-two__balance">$90000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__content-bottom">
                                                                <button type="submit" class="thm-btn get-insuracne-two__btn">Get a Quote
                                                                    Now</button>
                                                                <div class="get-insuracne-two__content-bottom-text-box">
                                                                    <p>Been here before?</p>
                                                                    <h5>Review your quotes.</h5>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                                <div class="tab" id="life">
                                                    <div class="get-insuracne-two__content">
                                                        <form class="get-insuracne-two__form">
                                                            <div class="get-insuracne-two__content-box">
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="text" placeholder="Full name" name="name">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="email" placeholder="Email address" name="email">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <select class="selectpicker" aria-label="Default select example">
                                                                        <option selected>Select type of insurance
                                                                        </option>
                                                                        <option value="1">Stamping Parts</option>
                                                                        <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                        <option value="3">Jig & Fixtures</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__progress">
                                                                <div class="get-insuracne-two__progress-single">
                                                                    <h4 class="get-insuracne-two__progress-title">Limits
                                                                        of Balance:</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="70%">
                                                                            <div class="count-text"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="get-insuracne-two__balance-box">
                                                                        <p class="get-insuracne-two__balance">$90000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__content-bottom">
                                                                <button type="submit" class="thm-btn get-insuracne-two__btn">Get a Quote
                                                                    Now</button>
                                                                <div class="get-insuracne-two__content-bottom-text-box">
                                                                    <p>Been here before?</p>
                                                                    <h5>Review your quotes.</h5>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                                <div class="tab" id="business">
                                                    <div class="get-insuracne-two__content">
                                                        <form class="get-insuracne-two__form">
                                                            <div class="get-insuracne-two__content-box">
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="text" placeholder="Full name" name="name">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <input type="email" placeholder="Email address" name="email">
                                                                </div>
                                                                <div class="get-insuracne-two__input-box">
                                                                    <select class="selectpicker" aria-label="Default select example">
                                                                        <option selected>Select type of insurance
                                                                        </option>
                                                                        <option value="1">Stamping Parts</option>
                                                                        <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                        <option value="3">Jig & Fixtures</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__progress">
                                                                <div class="get-insuracne-two__progress-single">
                                                                    <h4 class="get-insuracne-two__progress-title">Limits
                                                                        of Balance:</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="70%">
                                                                            <div class="count-text"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="get-insuracne-two__balance-box">
                                                                        <p class="get-insuracne-two__balance">$90000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-two__content-bottom">
                                                                <button type="submit" class="thm-btn get-insuracne-two__btn">Get a Quote
                                                                    Now</button>
                                                                <div class="get-insuracne-two__content-bottom-text-box">
                                                                    <p>Been here before?</p>
                                                                    <h5>Review your quotes.</h5>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Get Insurance End-->

        <!--Process Start-->
        <section class="process">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">work process</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Our easy work process <br> in 4 steps</h2>
                </div>
                <div class="process__inner">
                    <div class="process-shape-1">
                        <img src="{{ asset('assets/images/shapes/process-shape-1.png') }}" alt="">
                    </div>
                    <div class="row">
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-select"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">Select insurance</h3>
                                    <p class="process__text">Lorem Ipsum is simply free dumy text of the printing and
                                        amet piscing</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-2">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-meeting"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">Schedule meeting</h3>
                                    <p class="process__text">Lorem Ipsum is simply free dumy text of the printing and
                                        amet piscing</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-3">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-agreement"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">Meet agent</h3>
                                    <p class="process__text">Lorem Ipsum is simply free dumy text of the printing and
                                        amet piscing</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-4">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-insurance-agent"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">Get insurance</h3>
                                    <p class="process__text">Lorem Ipsum is simply free dumy text of the printing and
                                        amet piscing</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                    </div>
                </div>
                <div class="process__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="process__contact">
                                <div class="process__input-box">
                                    <input type="text" placeholder="Don’t hesitate, contact us for better future life.">
                                    <button type="submit" class="process__btn">Get a Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Process End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="testimonial-two-shape-1" style="background-image: url('{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="testimonial-two__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">testimonials</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">PHILOSOPHY
                            </div>
                            <p class="testimonial-two__text">PT. Kurnia Mustika Indah Lestari believes in the power of norms and karma.
We are trying to provide the best services to our customers and employees by listening, so as to find the best solutions for both.

We want to exceed and serve our employees as well as our clients, to provide them with opportunities and skills to grow in the business.</p>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonial-two__right">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 0,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                                <div class="testimonial-two__wrap">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two-shape-2">
                                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-two__content-box">
                                                <h5 class="testimonial-two__client-name">Rudiyanto Boen</h5>
                                                <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                    senectus netus et malesuada fames ac turp egestas.</p>
                                            </div>
                                            <div class="testimonial-two__client-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__founder-box">
                                            <div class="testimonial-two__founder">
                                                <p class="testimonial-two__founder-text">CEO & Co founder</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-two__client-img-box">
                                                <div class="testimonial-two__client-img">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                                                </div>
                                                <div class="testimonial-two__quote">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two-shape-2">
                                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-two__content-box">
                                                <h5 class="testimonial-two__client-name">Illusio Melani Lim</h5>
                                                <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                    senectus netus et malesuada fames ac turp egestas.</p>
                                            </div>
                                            <div class="testimonial-two__client-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__founder-box">
                                            <div class="testimonial-two__founder">
                                                <p class="testimonial-two__founder-text">Top Management</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-two__client-img-box">
                                                <div class="testimonial-two__client-img">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                                                </div>
                                                <div class="testimonial-two__quote">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__wrap">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two-shape-2">
                                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-two__content-box">
                                                <h5 class="testimonial-two__client-name">Elim Kurniawan</h5>
                                                <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                    senectus netus et malesuada fames ac turp egestas.</p>
                                            </div>
                                            <div class="testimonial-two__client-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__founder-box">
                                            <div class="testimonial-two__founder">
                                                <p class="testimonial-two__founder-text">Top Management</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-two__client-img-box">
                                                <div class="testimonial-two__client-img">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                                                </div>
                                                <div class="testimonial-two__quote">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two-shape-2">
                                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-two__content-box">
                                                <h5 class="testimonial-two__client-name">Fridolin</h5>
                                                <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                    senectus netus et malesuada fames ac turp egestas.</p>
                                            </div>
                                            <div class="testimonial-two__client-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__founder-box">
                                            <div class="testimonial-two__founder">
                                                <p class="testimonial-two__founder-text">Director of Operations</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-two__client-img-box">
                                                <div class="testimonial-two__client-img">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-3-4.jpg') }}" alt="">
                                                </div>
                                                <div class="testimonial-two__quote">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-two__wrap">
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two-shape-2">
                                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-two__content-box">
                                                <h5 class="testimonial-two__client-name">A. Yudhiana</h5>
                                                <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                    senectus netus et malesuada fames ac turp egestas.</p>
                                            </div>
                                            <div class="testimonial-two__client-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__founder-box">
                                            <div class="testimonial-two__founder">
                                                <p class="testimonial-two__founder-text">General Manager</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-two__client-img-box">
                                                <div class="testimonial-two__client-img">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                                                </div>
                                                <div class="testimonial-two__quote">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-two__single">
                                        <div class="testimonial-two__single-inner">
                                            <div class="testimonial-two-shape-2">
                                                <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-two__content-box">
                                                <h5 class="testimonial-two__client-name">A. Yudhiana</h5>
                                                <p class="testimonial-two__text-2">Pellentesque habitant morbi tristique
                                                    senectus netus et malesuada fames ac turp egestas.</p>
                                            </div>
                                            <div class="testimonial-two__client-review">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__founder-box">
                                            <div class="testimonial-two__founder">
                                                <p class="testimonial-two__founder-text">General Manager</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="testimonial-two__client-img-box">
                                                <div class="testimonial-two__client-img">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                                                </div>
                                                <div class="testimonial-two__quote">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--News Two Start-->
        <section class="news-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">recent news feed</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Latest news & articles <br> from the blog</h2>
                </div>
                <div class="row">
                    <!--News Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-two__single">
                            <div class="news-two__img">
                                <img src="{{ asset('assets/images/blog/news-2-1.jpg') }}" alt="">
                                <div class="news-two__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-two__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <h3 class="news-two__title"><a href="{{ route('newsDetails') }}">Certificate Handover Ceremony by TUVNORD Indonesia</a></h3>
                                <div class="news-two__client">
                                    <div class="news-two__client-img">
                                        <img src="{{ asset('assets/images/blog/news-two-client-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="news-two__client-content">
                                        <p>by Admin</p>
                                        <h5>15 March, 2022</h5>
                                    </div>
                                </div>
                                <div class="news-two__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Two Single End-->
                    <!--News Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-two__single">
                            <div class="news-two__img">
                                <img src="{{ asset('assets/images/blog/news-2-2.jpg') }}" alt="">
                                <div class="news-two__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-two__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <h3 class="news-two__title"><a href="{{ route('newsDetails') }}">Corporate Annual Meeting</a></h3>
                                <div class="news-two__client">
                                    <div class="news-two__client-img">
                                        <img src="{{ asset('assets/images/blog/news-two-client-img-2.jpg') }}" alt="">
                                    </div>
                                    <div class="news-two__client-content">
                                        <p>by Admin</p>
                                        <h5>15 March, 2022</h5>
                                    </div>
                                </div>
                                <div class="news-two__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Two Single End-->
                    <!--News Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-two__single">
                            <div class="news-two__img">
                                <img src="{{ asset('assets/images/blog/news-2-3.jpg') }}" alt="">
                                <div class="news-two__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-two__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-two__content">
                                <h3 class="news-two__title"><a href="{{ route('newsDetails') }}">PT. KMIL Delivers Engineering Excellence for Tenaris Project in West Java</a></h3>
                                <div class="news-two__client">
                                    <div class="news-two__client-img">
                                        <img src="{{ asset('assets/images/blog/news-two-client-img-3.jpg') }}" alt="">
                                    </div>
                                    <div class="news-two__client-content">
                                        <p>by Admin</p>
                                        <h5>15 March, 2022</h5>
                                    </div>
                                </div>
                                <div class="news-two__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Two Single End-->
                </div>
            </div>
        </section>
        <!--News Two End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe src="https://www.google.com/maps/place/Pt+Kurnia+Mustika+Indah+Lestari/@-6.14474,106.720715,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f7f93c5d0683:0x42fd79f109ee0985!8m2!3d-6.14474!4d106.720715!16s%2Fg%2F1hc30mx29!5m1!1e2?entry=ttu&g_ep=EgoyMDI1MDQwMi4xIKXMDSoASAFQAw%3D%3D" class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->
        

@endsection 