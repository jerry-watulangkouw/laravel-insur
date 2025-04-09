@extends('layout.layout')

@php
    $headTitle = 'Jig & Fixtures';
    $header = 'false';
    $css= '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '">';
    $css2= '<link rel="stylesheet" href="' . asset('assets/css/insur-dark.css') . '">';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
               <script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner">
                        <div class="main-header__top-address">
                            <ul class="list-unstyled main-header__top-address-list">
                                <li>
                                    <i class="icon">
                                        <span class="icon-pin"></span>
                                    </i>
                                    <div class="text">
                                        <p>Jl. Cendrawasih Raya No.10, Cengkareng Barat, Jakarta, Indonesia</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="icon">
                                        <span class="icon-email"></span>
                                    </i>
                                    <div class="text">
                                        <p><a href="mailto:info@kmil.co.id">info@kmil.co.id</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-menu-box">
                                <ul class="list-unstyled main-header__top-menu">
                                    <li><a href="{{ route('makeaClaimDeath') }}">Make a claim</a></li>
                                    <li><a href="{{ route('faq') }}"> FAQs</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                </ul>
                            </div>
                            <div class="main-header__top-social-box">
                                <div class="main-header__top-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/dark-mode/light-logo.png') }}" width="143"
                                            alt=""></a>
                                </div>
                                <div class="main-menu__main-menu-box">
                                    <div class="main-menu__main-menu-box-inner">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li
                                                class="current megamenu megamenu-clickable megamenu-clickable--toggler is-new-menu">
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
                                                                                    <span
                                                                                        class="demos-one__new">new</span>
                                                                                    <!-- /.demos-one__new -->
                                                                                    <div class="demos-one__image">
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-17-06-2023/demos/home-1-9.png') }}"
                                                                                            alt="Home Dark">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index6') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('index6OnePage') }}"
                                                                                                class="thm-btn">One
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
                                                                                    <span
                                                                                        class="demos-one__new">new</span>
                                                                                    <!-- /.demos-one__new -->
                                                                                    <div class="demos-one__image">
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-17-06-2023/demos/home-1-10.png') }}"
                                                                                            alt="Home Dark">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index7') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('index7OnePage') }}"
                                                                                                class="thm-btn">One
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-7.png') }}"
                                                                                            alt="Home Dark">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index4') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('index4OnePage') }}"
                                                                                                class="thm-btn">One
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-8.png') }}"
                                                                                            alt="Home Dark">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index5') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('index5OnePage') }}"
                                                                                                class="thm-btn">One
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-1.png') }}"
                                                                                            alt="Home Page 01">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('indexOnePage') }}"
                                                                                                class="thm-btn">One Page
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-2.png') }}"
                                                                                            alt="Home Page 02">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index2') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('index2OnePage') }}"
                                                                                                class="thm-btn">One
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-3.png') }}"
                                                                                            alt="Home page 03">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('index3') }}"
                                                                                                class="thm-btn">Multi
                                                                                                Page </a>
                                                                                            <a href="{{ route('index3OnePage') }}"
                                                                                                class="thm-btn">One
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-4.png') }}"
                                                                                            alt="Home Boxed">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('indexBoxed') }}"
                                                                                                class="thm-btn">View
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-5.png') }}"
                                                                                            alt="Home Dark">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('indexDark') }}"
                                                                                                class="thm-btn">View
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
                                                                                        <img width="370" height="431"
                                                                                            src="{{ asset('assets/images/update-10-02-2023/demos/home-1-6.png') }}"
                                                                                            alt="Home Dark">
                                                                                        <div class="demos-one__buttons">
                                                                                            <a href="{{ route('indexRtl') }}#googtrans(en%7Car)"
                                                                                                class="thm-btn">View
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
                                    <div class="main-menu__main-menu-box-search-get-quote-btn">
                                        <div class="main-menu__main-menu-box-search">
                                            <a href="#"
                                                class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                        </div>
                                        <div class="main-menu__main-menu-box-get-quote-btn-box">
                                            <a href="{{ route('contact') }}"
                                                class="thm-btn main-menu__main-menu-box-get-quote-btn">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <a href="tel:9200368090">0813-1629-7120</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <x-strickyheader />
        <!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
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
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-1.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Commitment <br> You Can <br> Count
                                            <span>On.</span></h2>
                                        <p class="main-slider__text">Our motto is "We Are The Quality"
                                             because Quality <br>only happens when we care enough to do our best.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-2.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Commitment <br> You Can <br> Count
                                            <span>On.</span></h2>
                                        <p class="main-slider__text">Our motto is "We Are The Quality"
                                             because Quality <br>only happens when we care enough to do our best.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">Let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/backgrounds/main-slider-1-3.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/main-slider-shape-1.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">Commitment <br> You Can <br> Count
                                            <span>On.</span></h2>
                                        <p class="main-slider__text">Our motto is "We Are The Quality"
                                             because Quality <br>only happens when we care enough to do our best.</p>
                                        <div class="main-slider__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">Let’s Get Started</a>
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

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-insurance"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{ asset('assets/images/shapes/feature-one-shape-1.png') }}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{ route('about') }}">Advanced Technology</a></h3>
                                    <p class="feature-one__text">Changes is inevitable and often continuous. KMIL believes that the innovation in precision machining and stamping technologies / machineries is very crucial to adapt in the field.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-cashback"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{ asset('assets/images/shapes/feature-one-shape-1.png') }}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{ route('about') }}">Commitment In Quality</a></h3>
                                    <p class="feature-one__text">KMIL focuses on cost-competitive, precision, high quality manufacturing services to our customers. With our latest CNC Machines, Stamping Press Machines and Dies-Jig Making; It is important to keep the quality check to mid and high volume production.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-house"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="{{ asset('assets/images/shapes/feature-one-shape-1.png') }}" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="{{ route('about') }}">Professionalism</a></h3>
                                    <p class="feature-one__text">Being professional to our customers and suppliers is a key to hold our trust and maintain a good relationship with both parties. KMIL delivers Quality, Flexibility and Uncompromising customer services to thrive in the business.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url('{{ asset('assets/images/dark-mode/about-one-bg.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-one__experience">
                                    <h2 class="about-one__experience-year">35</h2>
                                    <p class="about-one__experience-text">Years of <br> Experience</p>
                                </div>
                                <div class="about-one__shape-1">
                                    <img src="{{ asset('assets/images/dark-mode/about-one-shape-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">About company</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/dark-mode/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/dark-mode/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Precision Parts Specialist, Stamping Parts & Engineering Manufacturing</h2>
                            </div>
                            <p class="about-one__text-1">PT. Kurnia Mustika Indah Lestari has been regarded nationally as one of the biggest precision parts specialist and engineering manufacturer in Indonesia and thus has become the trusted manufacturer for many company.</p>
                            <div class="about-one__btn-call">
                                <div class="about-one__btn-box">
                                    <a href="{{ route('about') }}" class="thm-btn about-one__btn">Discover More</a>
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="about-one__call-content">
                                        <a href="tel:9200368090">0813-1629-7120</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="services-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">Our services</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">We Cover All Aspects of Precision Engineering and Metal Fabrication</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="services-one__top-right">
                                <p class="services-one__top-text">KMIL delivers precision-engineered solutions for industries demanding accuracy and reliability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="services-one__container">
                    <div class="row">
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-drive"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('carInsurance') }}">Stamping Parts</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-2.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-family"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts</a></h2>
                                    <p class="service-one__text">For years PT. Kurnia Mustika Indah Lestari has been dedicated to providing the best custom metal fabrication services available, and we continue to do so. We provide cutting, folding, welding, machining, punching, shearing, and casting processes depending on your needs. These accurate and durable tools provide our manufacturing based customers with the capability to produce precision parts for a wide variety of industries. Industrial Tool and Die serves industries including but not limited to Aerospace, Automotive, Medical, Commercial, and the Electrical Connector industry.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-3.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-home"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a></h2>
                                    <p class="service-one__text">PT. Kurnia Mustika Indah Lestari engineers are experts in precision and intricate Jig, Fixture, Tool and Die Design and Manufacturing. Over 30 years of Tool and Die making experience from seasoned and highly skilled engineers have helped build a solid reputation for PT. Kurnia Mustika Indah Lestari is one of the most respected tool shops in Indonesia. Our cutting edge automated CNC machining centers and innovative tool designers produce only the highest quality Jigs, Fixtures, Tools and Dies.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-4.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-heart-beat"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('healthInsurance') }}">Sheet Metal Processing</a>
                                    </h2>
                                    <p class="service-one__text">PT. Kurnia Mustika Indah Lestari has offered experience of working with a variety of metals grades and boasts an impressive project of Sheet Metal Fabrication services. The company has experience in sheet metal fabrications of all grades of steel as well aluminum and titanium. All fabrication work is designed and manufactured to suit individual customer requirements and we have access to large stocks via our diverse local and international supplier chain in order to meet urgent deliveries.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-5.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-briefcase"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('businessInsurance') }}">Business
                                            insurance</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-6.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-fire"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('fireInsurance') }}">Cutting Laser</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-7.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-ring"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('marriageInsurance') }}">Precision
                                            Parts</a></h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                        <!--Services One Single Start-->
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="services-one__single">
                                <div class="service-one__img">
                                    <img src="{{ asset('assets/images/services/services-1-8.jpg') }}" alt="">
                                </div>
                                <div class="service-one__content">
                                    <div class="services-one__icon">
                                        <span class="icon-plane"></span>
                                    </div>
                                    <h2 class="service-one__title"><a href="{{ route('travelInsurance') }}">Engineering Manufacturing</a>
                                    </h2>
                                    <p class="service-one__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--Services One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one-shape-1"
                style="background-image: url('{{ asset('assets/images/shapes/why-choose-one-shape-1.png') }}')"></div>
            <div class="why-choose-one-shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-2.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-3 float-bob-x">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-3.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-4 float-bob-y">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-4.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-5 float-bob-y">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-5.png') }}" alt="">
            </div>
            <div class="why-choose-one-shape-6 float-bob-x">
                <img src="{{ asset('assets/images/shapes/why-choose-one-shape-6.png') }}" alt="">
            </div>
            <div class="why-choose-one-img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="{{ asset('assets/images/resources/why-choose-one-img.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="why-choose-one__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Why choose</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-3.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-4.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Why Partner with KMIL?</h2>
                            </div>
                            <p class="why-choose-one__text">KMIL delivers precision-engineered solutions for industries demanding accuracy and reliability.</p>
                            <div class="why-choose-one__list-box">
                                <ul class="list-unstyled why-choose-one__list">
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Fast & easy process</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Control over policy</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-one__single">
                                            <div class="why-choose-one__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-one__list-title-box">
                                                <div class="why-choose-one__list-title-inner">
                                                    <h3 class="why-choose-one__list-title">Save your money</h3>
                                                </div>
                                                <div class="why-choose-one__list-text-box">
                                                    <p class="why-choose-one__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Get Insurance Start-->
        <section class="get-insurance">
            <div class="get-insurance-bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/get-insurance-bg.png') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-insurance__left">
                            <div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <img src="{{ asset('assets/images/resources/get-insurance-img-1.png') }}" alt="">
                            </div>
                            <div class="get-insurance__author">
                                <p>Widya</p>
                            </div>
                            <div class="get-insurance__circle"></div>
                            <div class="get-insurance__shape-1 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/get-insurance-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-insurance__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Request a Free quote</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/dark-mode/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/dark-mode/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get a customized quote for your precision <br>manufacturing needs!</h2>
                            </div>
                            <div class="get-insurance__tab">
                                <div class="get-insurance__tab-box tabs-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#home2" class="tab-btn active-btn"><span>Home</span></li>
                                        <li data-tab="#vehicles" class="tab-btn"><span>Vehicles</span></li>
                                        <li data-tab="#health" class="tab-btn"><span>health</span></li>
                                        <li data-tab="#life" class="tab-btn"><span>Life</span></li>
                                    </ul>
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="home2">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Stamping Parts</option>
                                                                <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                <option value="3">Jig & Fixtures</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="vehicles">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Stamping Parts</option>
                                                                <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                <option value="3">Jig & Fixtures</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="health">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select type of insurance</option>
                                                                <option value="1">Stamping Parts</option>
                                                                <option value="2">Industrial Parts  & Fabrication Project</option>
                                                                <option value="3">Jig & Fixtures</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="life">
                                            <div class="get-insurance__content">
                                                <form class="get-insurance__form">
                                                    <div class="get-insurance__content-box">
                                                        <div class="get-insurance__input-box">
                                                            <input type="text" placeholder="Full name" name="name">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <input type="email" placeholder="Email address"
                                                                name="email">
                                                        </div>
                                                        <div class="get-insurance__input-box">
                                                            <select class="selectpicker"
                                                                aria-label="Default select example">
                                                                <option selected>Select service</option>
                                                                <option value="1">service One</option>
                                                                <option value="2">service Two</option>
                                                                <option value="3">service Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance__progress">
                                                        <div class="get-insurance__progress-single">
                                                            <h4 class="get-insurance__progress-title">Limits of Balance:
                                                            </h4>
                                                            <div class="get-insurance__progress-range">
                                                                <input type="text" class="balance-range-slider"
                                                                    data-hide-min-max="true" data-step="100"
                                                                    data-from="70000" data-min="0" data-max="90000"
                                                                    value="">
                                                                <div class="get-insurance__balance-box">
                                                                    <p class="get-insurance__balance">$<span></span></p>
                                                                </div>
                                                                <input type="hidden"
                                                                    class="get-insurance__balance__input">
                                                            </div><!-- /.get-insurance__progress-range -->
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="thm-btn get-insurance__btn">Get a Quote
                                                        Now</button>
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
        </section>
        <!--Get Insurance End-->

        <!--Counter One Start-->
        <Section class="counter-one">
            <div class="counter-one-shape-1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/counter-one-shape-1.png') }}" alt="">
            </div>
            <div class="counter-one-shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/counter-one-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-insurance-1"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="2.6">00</h3>
                                        <span class="counter-one__plus">k</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Kmil Projects</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="89">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Professional team</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-life-insurance"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="2.8">00</h3>
                                        <span class="counter-one__plus">k</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Satisfied customers</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__single">
                            <div class="counter-one__top">
                                <div class="counter-one__icon">
                                    <span class="icon-success"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="99">00</h3>
                                        <span class="counter-one__plus">%</span>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-one__text">Our success rate</p>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </Section>
        <!--Counter One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="team-one__shape-1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/team-one-shape-1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our experts</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Meet our experienced <br> team people</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">General Manager</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">A. Yudhiana</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager Purchasing</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Feberina D. S.</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <div class="team-one__img-box">
                                    <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Manager Marketing</p>
                                <h3 class="team-one__name"><a href="{{ route('teamDetails') }}">Sudarmaji</a></h3>
                                <ul class="list-unstyled team-one__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="team-one__bottom">
                            <p class="team-one__bottom-text">Contact Our Expert Team Memeber To Take Our <span>Best
                                    Policies</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-shape-2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-2.png') }}" alt="">
            </div>
            <div class="testimonial-one-shape-3 float-bob-y">
                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-3.png') }}" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-left">
                                <div class="section-title text-left">
                                    <div class="section-sub-title-box">
                                        <p class="section-sub-title">testimonials</p>
                                        <div class="section-title-shape-1">
                                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="section-title-shape-2">
                                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <h2 class="section-title__title">PHILOSOPHY</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial-one__top-right">
                                <p class="testimonial-one__top-text">PT. Kurnia Mustika Indah Lestari believes in the power of norms and karma, we are trying to provide the best services to our customers and employees by listening as to find the best solutions for both. We want to exceed and serve our employees as well as our clients to provide them with opportunities and skills to grow in the business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Lasma Simamora</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Devit Indra Rukmana</h3>
                                                        <p class="testimonial-one__client-sub-title">HRD</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Feberina D. S.</h3>
                                                        <p class="testimonial-one__client-sub-title">Manager Purchasing</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__single-inner">
                                            <div class="testimonial-one__shape-1">
                                                <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">
                                            </div>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img-box">
                                                    <img src="{{ asset('assets/images/testimonial/testimonial-1-4.jpg') }}" alt="">
                                                    <div class="testimonial-one__quote">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="testimonial-one__client-content">
                                                    <div class="testimonial-one__client-review">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="testimonial-one__client-details">
                                                        <h3 class="testimonial-one__client-name">Arif Rahman</h3>
                                                        <p class="testimonial-one__client-sub-title">director</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">Pellentesque habitant morbi tristique
                                                senectus netus et malesuada fames ac turp egestas. Aliquam viverra arcu.
                                                Donec aliquet blandit enim feugiat mattis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">recent news feed</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/dark-mode/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">Latest news & articles <br> from the blog</h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Certificate Handover Ceremony by TUVNORD Indonesia</a></h3>
                                <p class="news-one__text">Certificate Handover Ceremony by TÜV Rheinland Group TÜVNord Indonesia
ISO9001:2015 Quality Management System

Awarded to PT Kurnia Mustika Indah Lestari

Thanking TÜVNord Indonesia's team for their time & presence to be in Cisarua - Bogor with us today. Grateful for our SUPER Team on their endless commitments & energy to support this program.

By achieving this award, we really hope we will deliver the best service, system and support to our customer in Indonesia & abroad.

Good job, team!</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Corporate Annual Meeting</a></h3>
                                <p class="news-one__text">Something's cooking for 2025 on

PT. Kurnia Mustika Indah Lestari
Corporate Annual Meeting
Depointe Resort & Resto, Cisarua - 01-02 December 2024

Our focus next year is
"Excellent People, Excellent Production System, Excellent Quality and Excellent Delivery"

Let's focus on our goal team!
Bisa, bisa, bisa.........</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                                <div class="news-one__tag">
                                    <p><i class="far fa-folder"></i>BUSINESS</p>
                                </div>
                                <div class="news-one__arrow-box">
                                    <a href="{{ route('newsDetails') }}" class="news-one__arrow">
                                        <span class="icon-right-arrow1"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">PT. KMIL Delivers Engineering Excellence for Tenaris Project in West Java</a></h3>
                                <p class="news-one__text">PT. Kurnia Mustika Indah Lestari proudly present our latest on-going work in Seamless Pipe Indonesia Jaya - Exiros Tenaris, Indonesia. Seamless Pipe is leading manufacturer of pipes and related services for the world's energy industry and certain other industrial applications based in Argentina. Their manufacturing system integrates steelmaking, pipe rolling and forming, heat treatment, threading and finishing across 16 countries. One of their branch is in Cilegon, West Java - Indonesia.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Tracking Start-->
        <section class="tracking">
            <div class="container">
                <div class="tracking__inner">
                    <div class="tracking-shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-1.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-2.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-3.png') }}" alt="">
                    </div>
                    <div class="tracking-shape-4 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/tracking-shape-4.png') }}" alt="">
                    </div>
                    <div class="tracking__left">
                        <div class="tracking__icon">
                            <span class="icon-folder"></span>
                        </div>
                        <div class="tracking__content">
                            <p class="tracking__sub-title">Quisque vel ortor</p>
                            <h3 class="tracking__title">Start tracking your claims</h3>
                        </div>
                    </div>
                    <div class="tracking__btn-box">
                        <a href="{{ route('about') }}" class="thm-btn tracking__btn">Track Your Claim</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Tracking End-->

@endsection 