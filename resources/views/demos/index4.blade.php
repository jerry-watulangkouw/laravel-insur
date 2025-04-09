@extends('layout.layout')

@php
$headTitle = 'Home Four';
$css = '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '"/> 
        <link rel="stylesheet" href="' . asset('assets/vendors/insur-three-icon/style.css') . '"/> ';
$css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-2.css') . '"/>';
$header='false';
$counterone = 'false';
$footer= 'false';
$script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
           <script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-four">
                <nav class="main-menu main-menu-four">
                    <div class="main-menu-four__wrapper">
                        <div class="main-menu-four__wrapper-inner">
                            <div class="main-menu-four__left">
                                <div class="main-menu-four__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/update-10-02-2023/resources/logo-3.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu-four__right">
                                <div class="main-menu-four__top">
                                    <ul class="list-unstyled main-menu-four__top-address-list">
                                        <li>
                                            <i class="icon">
                                                <span class="icon-email"></span>
                                            </i>
                                            <div class="text">
                                                <p><a href="mailto:info@kmil.co.id">info@kmil.co.id</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="icon">
                                                <span class="icon-pin"></span>
                                            </i>
                                            <div class="text">
                                                <p>Jl. Cendrawasih Raya No.10, Cengkareng Barat, Jakarta, Indonesia</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="main-menu-four__top-social-btn">
                                        <div class="main-menu-four__top-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <div class="main-menu-four__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn-two main-menu-four__btn">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-menu-four__bottom">
                                    <div class="main-menu-four__main-menu-box">
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
                                                                                    <span class="demos-one__new">new</span>
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
                                                                                    <span class="demos-one__new">new</span>
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
                                                    <li><a href="{{ route('lifeInsurance') }}">Industrial Parts & Fabrication Project</a></li>
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
                                    <div class="main-menu-four__call-search-cart">
                                        <div class="main-menu-four__call">
                                            <div class="main-menu-four__call-icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="main-menu-four__call-content">
                                                <p>Call Anytime</p>
                                                <a href="tel:8898006802">+ 88 ( 9800 ) 6802</a>
                                            </div>
                                        </div>
                                        <div class="main-menu-four__search-cart-box">
                                            <a href="#"
                                                class="main-menu-four__search search-toggler icon-magnifying-glass"></a>
                                            <a href="{{ route('cart') }}"
                                                class="main-menu-four__cart insur-two-icon-shopping-cart"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-four">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-four clearfix">
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
                        <div class="main-slider-four__img">
                            <img src="{{ asset('assets/images/update-10-02-2023/resources/main-slider-four-img-1.jpg') }}" alt="">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-four__shape-1 float-bob-y">
                            <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="main-slider-four__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-four-shape-2.png') }}" alt="">
                        </div>
                        <div class="main-slider-four__shadow"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-four__content">
                                        <p class="main-slider-four__sub-title">Solutions for your everything</p>
                                        <h2 class="main-slider-four__title">Insurance <br> for the better <br> family
                                            life<span>.</span></h2>
                                        <div class="main-slider-four__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn-two main-slider-four__btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-four__img">
                            <img src="{{ asset('assets/images/update-10-02-2023/resources/main-slider-four-img-1.jpg') }}" alt="">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-four__shape-1 float-bob-y">
                            <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="main-slider-four__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-four-shape-2.png') }}" alt="">
                        </div>
                        <div class="main-slider-four__shadow"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-four__content">
                                        <p class="main-slider-four__sub-title">Solutions for your everything</p>
                                        <h2 class="main-slider-four__title">Insurance <br> for the better <br> family
                                            life<span>.</span></h2>
                                        <div class="main-slider-four__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn-two main-slider-four__btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider-four__img">
                            <img src="{{ asset('assets/images/update-10-02-2023/resources/main-slider-four-img-1.jpg') }}" alt="">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-four__shape-1 float-bob-y">
                            <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="main-slider-four__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/update-10-02-2023/shapes/main-slider-four-shape-2.png') }}" alt="">
                        </div>
                        <div class="main-slider-four__shadow"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-four__content">
                                        <p class="main-slider-four__sub-title">Solutions for your everything</p>
                                        <h2 class="main-slider-four__title">Insurance <br> for the better <br> family
                                            life<span>.</span></h2>
                                        <div class="main-slider-four__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn-two main-slider-four__btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-four__nav">
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

        <!--Feature Five Start-->
        <section class="feature-five">
            <div class="container">
                <ul class="list-unstyled feature-five__list">
                    <li>
                        <div class="feature-five__single">
                            <div class="feature-five__icon">
                                <span class="insur-three-icon-insurance"></span>
                            </div>
                            <h3 class="feature-five__title"><a href="#">Advanced Technology</a></h3>
                            <p class="feature-five__text">Changes is inevitable and often continuous. KMIL believes that the innovation in precision machining and stamping technologies / machineries is very crucial to adapt in the field.</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-five__single">
                            <div class="feature-five__icon">
                                <span class="insur-three-icon-cashback"></span>
                            </div>
                            <h3 class="feature-five__title"><a href="#">Commitment In Quality</a></h3>
                            <p class="feature-five__text">KMIL focuses on cost-competitive, precision, high quality manufacturing services to our customers. With our latest CNC Machines, Stamping Press Machines and Dies-Jig Making; It is important to keep the quality check to mid and high volume production.</p>
                        </div>
                    </li>
                    <li>
                        <div class="feature-five__single">
                            <div class="feature-five__icon">
                                <span class="insur-three-icon-house"></span>
                            </div>
                            <h3 class="feature-five__title"><a href="#">Professionalism</a></h3>
                            <p class="feature-five__text">Being professional to our customers and suppliers is a key to hold our trust and maintain a good relationship with both parties. KMIL delivers Quality, Flexibility and Uncompromising customer services to thrive in the business.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Feature Five End-->

        <!--About Five Start-->
        <section class="about-five">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-five__left">
                            <div class="about-five__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-five__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/resources/about-five-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-five__img-two">
                                    <img src="{{ asset('assets/images/update-10-02-2023/resources/about-five-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-five__call">
                                    <div class="about-five__call-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="about-five__call-content">
                                        <p class="about-five__call-sub-title">Call to Experts</p>
                                        <h4 class="about-five__call-number"><a href="tel:9200368090">+92 (003)
                                                68-090</a></h4>
                                    </div>
                                </div>
                                <div class="about-five__shape-1 zoominout"></div>
                                <div class="about-five__arrow float-bob-x">
                                    <img src="{{ asset('assets/images/update-10-02-2023/shapes/about-five-arrow.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-five__right">
                            <div class="section-title-two text-left">
                                <div class="section-title-two__sub-title-box">
                                    <p class="section-title-two__sub-title"> <span
                                            class="section-title-two__slash-one">//</span> About company
                                        <span class="section-title-two__slash-two">\\</span></p>
                                </div>
                                <h2 class="section-title-two__title">We provide the best
                                    Kmil Project</h2>
                            </div>
                            <p class="about-five__text">Lorem ipsum is simply free text available. Aenean eu leo quam.
                                Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum.</p>
                            <div class="about-five__points-and-counter-box">
                                <div class="about-five__points-box">
                                    <ul class="about-five__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="text">
                                                <h4>Pina & Associates Insurance</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="text">
                                                <h4>Payment at Contingency</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="text">
                                                <h4>Amount of Payment</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="text">
                                                <h4>Large Number of Insurance</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="text">
                                                <h4>Suspe ndisse suscipit leo</h4>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="about-five__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn-two about-five__btn">Discover More</a>
                                    </div>
                                </div>
                                <div class="about-five__counter-box">
                                    <ul class="list-unstyled about-five__counter-list">
                                        <li>
                                            <div class="about-five__counter-single">
                                                <div class="about-five__count-box count-box">
                                                    <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                                                    <span class="about-five__count-percent">%</span>
                                                </div>
                                                <p class="about-five__counter-text">Success rate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-five__counter-single">
                                                <div class="about-five__count-box count-box">
                                                    <h3 class="count-text" data-stop="9860" data-speed="1500">00</h3>
                                                </div>
                                                <p class="about-five__counter-text">Satisfied clients</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Five End-->

        <!--Services Four Start-->
        <section class="services-four">
            <div class="services-four__bg"
                style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/services-four-bg.jpg') }}')"></div>
            <div class="container">
                <div class="section-title-two text-center">
                    <div class="section-title-two__sub-title-box">
                        <p class="section-title-two__sub-title"> <span class="section-title-two__slash-one">//</span>
                            our top services
                            <span class="section-title-two__slash-two">\\</span></p>
                    </div>
                    <h2 class="section-title-two__title">We’re covering all the insurance <br> services fields</h2>
                </div>
                <div class="owl-carousel owl-theme thm-owl__carousel services-four__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 20,
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
                            "items": 3
                        },
                        "992": {
                            "items": 4
                        },
                        "1200": {
                            "items": 5
                        }
                    }
                }'>
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-1.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-drive"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('carInsurance') }}">Stamping Parts</a></h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-2.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-family"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts & Fabrication Project</a>
                                    </h4>
                                    <p class="services-four__text">For years PT. Kurnia Mustika Indah Lestari has been dedicated to providing the best custom metal fabrication services available, and we continue to do so. We provide cutting, folding, welding, machining, punching, shearing, and casting processes depending on your needs. These accurate and durable tools provide our manufacturing based customers with the capability to produce precision parts for a wide variety of industries. Industrial Tool and Die serves industries including but not limited to Aerospace, Automotive, Medical, Commercial, and the Electrical Connector industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-3.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-home"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a>
                                    </h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-4.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-heart-beat"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('healthInsurance') }}">Health
                                            insurance</a>
                                    </h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-5.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('businessInsurance') }}">Business
                                            insurance</a>
                                    </h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-1.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-drive"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('carInsurance') }}">Stamping Parts</a></h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-2.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-family"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts & Fabrication Project</a>
                                    </h4>
                                    <p class="services-four__text">For years PT. Kurnia Mustika Indah Lestari has been dedicated to providing the best custom metal fabrication services available, and we continue to do so. We provide cutting, folding, welding, machining, punching, shearing, and casting processes depending on your needs. These accurate and durable tools provide our manufacturing based customers with the capability to produce precision parts for a wide variety of industries. Industrial Tool and Die serves industries including but not limited to Aerospace, Automotive, Medical, Commercial, and the Electrical Connector industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-3.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-home"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a>
                                    </h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-4.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-heart-beat"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('healthInsurance') }}">Health
                                            insurance</a>
                                    </h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                    <!--Services Four Single Start-->
                    <div class="item">
                        <div class="services-four__single">
                            <div class="services-four__img-box">
                                <div class="services-four__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/services/services-4-5.png') }}" alt="">
                                </div>
                                <div class="services-four__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                            </div>
                            <div class="services-four__content-box">
                                <div class="services-four__content">
                                    <h4 class="services-four__title"><a href="{{ route('businessInsurance') }}">Business
                                            insurance</a>
                                    </h4>
                                    <p class="services-four__text">Fusce pretium sem ism <br>
                                        the eget mattis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Four Single End-->
                </div>
            </div>
        </section>
        <!--Services Four End-->

        <!--Tracking Two Start-->
        <section class="tracking-two">
            <div class="container">
                <div class="tracking-two__inner">
                    <div class="tracking-two__left">
                        <div class="tracking-two__icon">
                            <span class="icon-folder"></span>
                        </div>
                        <div class="tracking-two__content">
                            <p class="tracking-two__sub-title">Quisque vel ortor</p>
                            <h3 class="tracking-two__title">Start tracking your claims</h3>
                        </div>
                    </div>
                    <div class="tracking-two__btn-box">
                        <a href="{{ route('about') }}" class="thm-btn-two tracking-two__btn">Track Your Claim</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Tracking Two End-->

        <!--Why Choose Three Start-->
        <section class="why-choose-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="why-choose-three__left">
                            <div class="why-choose-three__shape-4 float-bob-x">
                                <img src="{{ asset('assets/images/update-10-02-2023/shapes/why-choose-three-shape-4.png') }}" alt="">
                            </div>
                            <div class="section-title-two text-left">
                                <div class="section-title-two__sub-title-box">
                                    <p class="section-title-two__sub-title"> <span
                                            class="section-title-two__slash-one">//</span>
                                        few reasons
                                        <span class="section-title-two__slash-two">\\</span></p>
                                </div>
                                <h2 class="section-title-two__title">Why you should choose
                                    our Kmil Project</h2>
                            </div>
                            <p class="why-choose-three__text-1">Insurance for the better life & business</p>
                            <div class="why-choose-three__points-box">
                                <ul class="list-unstyled why-choose-three__points">
                                    <li>
                                        <div class="why-choose-three__points-single">
                                            <div class="why-choose-three__points-icon-box">
                                                <div class="why-choose-three__points-icon">
                                                    <span class="icon-tick"></span>
                                                </div>
                                                <p class="why-choose-three__points-icon-text">Fast & easy <br> process
                                                </p>
                                            </div>
                                            <div class="why-choose-three__points-content-box">
                                                <p class="why-choose-three__points-content">There are many variations of
                                                    passages of available, but the have suffered.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-three__points-single">
                                            <div class="why-choose-three__points-icon-box">
                                                <div class="why-choose-three__points-icon">
                                                    <span class="icon-tick"></span>
                                                </div>
                                                <p class="why-choose-three__points-icon-text">Save your <br> money</p>
                                            </div>
                                            <div class="why-choose-three__points-content-box">
                                                <p class="why-choose-three__points-content">There are many variations of
                                                    passages of available, but the have suffered.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="why-choose-three__btn-box">
                                <a href="{{ route('about') }}" class="thm-btn-two why-choose-three__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="why-choose-three__right">
                            <div class="why-choose-three-shape-1"></div>
                            <div class="why-choose-three-shape-2"></div>
                            <div class="why-choose-three-shape-3"></div>
                            <div class="why-choose-three__img">
                                <img src="{{ asset('assets/images/update-10-02-2023/resources/why-choose-three-img.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Three End-->

        <!--Team Three Start-->
        <section class="team-three">
            <div class="container">
                <div class="section-title-two text-center">
                    <div class="section-title-two__sub-title-box">
                        <p class="section-title-two__sub-title"> <span class="section-title-two__slash-one">//</span>
                            our team members
                            <span class="section-title-two__slash-two">\\</span></p>
                    </div>
                    <h2 class="section-title-two__title">Meet our experienced <br> team people</h2>
                </div>
                <div class="row">
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-3-1.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-three__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                                <ul class="list-unstyled team-three__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-three__content">
                                <h3 class="team-three__name"><a href="{{ route('teamDetails') }}">Mike hardson</a></h3>
                                <p class="team-three__sub-title">director</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-3-2.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-three__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                                <ul class="list-unstyled team-three__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-three__content">
                                <h3 class="team-three__name"><a href="{{ route('teamDetails') }}">Aleesha brown</a></h3>
                                <p class="team-three__sub-title">manager</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-3-3.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-three__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                                <ul class="list-unstyled team-three__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-three__content">
                                <h3 class="team-three__name"><a href="{{ route('teamDetails') }}">Kevin smith</a></h3>
                                <p class="team-three__sub-title">designer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{ asset('assets/images/update-10-02-2023/team/team-3-4.jpg') }}" alt="">
                                </div>
                                <ul class="list-unstyled team-three__social-two">
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                                <ul class="list-unstyled team-three__social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-three__content">
                                <h3 class="team-three__name"><a href="{{ route('teamDetails') }}">Devit Indra Rukmana</a></h3>
                                <p class="team-three__sub-title">Developer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                </div>
            </div>
        </section>
        <!--Team Three End-->

        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="counter-two__bg-box">
                <div class="counter-two__bg"
                    style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/counter-two-bg.jpg') }}')">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon">
                                <span class="icon-insurance-1"></span>
                            </div>
                            <div class="counter-two__content-box">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="2.6" data-speed="1500">00</h3>
                                    <span class="counter-two__letter">k</span>
                                </div>
                                <p class="counter-two__text">Kmil Project</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="counter-two__content-box">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="89" data-speed="1500">00</h3>
                                    <span class="counter-two__letter">+</span>
                                </div>
                                <p class="counter-two__text">Professional team</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon">
                                <span class="icon-life-insurance"></span>
                            </div>
                            <div class="counter-two__content-box">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="2.8" data-speed="1500">00</h3>
                                    <span class="counter-two__letter">k</span>
                                </div>
                                <p class="counter-two__text">Satisfied customers</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon">
                                <span class="icon-success"></span>
                            </div>
                            <div class="counter-two__content-box">
                                <div class="counter-two__count-box count-box">
                                    <h3 class="count-text" data-stop="99" data-speed="1500">00</h3>
                                    <span class="counter-two__letter">%</span>
                                </div>
                                <p class="counter-two__text">Our success rate</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                </div>
            </div>
        </section>
        <!--Counter Two End-->

        <!--Get Kmil Three Start-->
        <section class="get-insurance-three">
            <div class="get-insurance-three__bg"
                style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/get-insurance-three-bg.png') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="get-insurance-three__left">
                            <div class="get-insurance-three__img">
                                <img src="{{ asset('assets/images/update-10-02-2023/resources/get-insurance-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="get-insurance-three__right">
                            <div class="section-title-two text-left">
                                <div class="section-title-two__sub-title-box">
                                    <p class="section-title-two__sub-title"> <span
                                            class="section-title-two__slash-one">//</span>
                                        get a Request a Free quote
                                        <span class="section-title-two__slash-two">\\</span></p>
                                </div>
                                <h2 class="section-title-two__title">Get an Kmil Quote <br>
                                    to get started</h2>
                            </div>
                            <div class="get-insurance-three__main-tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#home-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="insur-three-icon-home"></span>
                                            <div class="overlay-text">
                                                <p>Jig & Fixtures</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tab="#car-insurance" class="tab-btn active-btn">
                                        <div class="icon-box">
                                            <span class="insur-three-icon-car"></span>
                                            <div class="overlay-text">
                                                <p>Stamping Parts</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tab="#health-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="insur-three-icon-cardiogram"></span>
                                            <div class="overlay-text">
                                                <p>Sheet Metal Processing</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab" id="home-insurance">
                                        <div class="get-insurance-three__content">
                                            <form class="get-insurance-three__form">
                                                <div class="get-insurance-three__content-box">
                                                    <div class="get-insurance-three__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance-three__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance-three__input-box">
                                                        <select class="selectpicker"
                                                            aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
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
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <div class="get-insurance-three__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-two get-insurance-three__btn">Get a Quote
                                                        Now</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab active-tab" id="car-insurance">
                                        <div class="get-insurance-three__content">
                                            <form class="get-insurance-three__form">
                                                <div class="get-insurance-three__content-box">
                                                    <div class="get-insurance-three__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance-three__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance-three__input-box">
                                                        <select class="selectpicker"
                                                            aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
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
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <div class="get-insurance-three__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-two get-insurance-three__btn">Get a Quote
                                                        Now</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="health-insurance">
                                        <div class="get-insurance-three__content">
                                            <form class="get-insurance-three__form">
                                                <div class="get-insurance-three__content-box">
                                                    <div class="get-insurance-three__input-box">
                                                        <input type="text" placeholder="Full name" name="name">
                                                    </div>
                                                    <div class="get-insurance-three__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                    <div class="get-insurance-three__input-box">
                                                        <select class="selectpicker"
                                                            aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
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
                                                            <input type="hidden" class="get-insurance__balance__input">
                                                        </div><!-- /.get-insurance__progress-range -->
                                                    </div>
                                                </div>
                                                <div class="get-insurance-three__content-bottom">
                                                    <button type="submit"
                                                        class="thm-btn-two get-insurance-three__btn">Get a Quote
                                                        Now</button>
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
        </section>
        <!--Get Kmil Three End-->

        <!--Testimonial Four Start-->
        <section class="testimonial-four">
            <div class="testimonial-four__bg"
                style="background-image: url('{{ asset('assets/images/update-10-02-2023/backgrounds/testimonial-four-bg.png') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-four__left">
                            <div class="section-title-two text-left">
                                <div class="section-title-two__sub-title-box">
                                    <p class="section-title-two__sub-title"> <span
                                            class="section-title-two__slash-one">//</span>
                                        our feedbacks
                                        <span class="section-title-two__slash-two">\\</span></p>
                                </div>
                                <h2 class="section-title-two__title">What they’re talking about the
                                    policy?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-four__right">
                            <div class="testimonial-four__carousel owl-carousel owl-theme thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow1\"></span>"],
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
                                        "items": 1.333333
                                    }
                                }
                            }'>
                                <!--Testimonial Four Single Start-->
                                <div class="item">
                                    <div class="testimonial-four__single">
                                        <div class="testimonial-four__single-inner">
                                            <div class="testimonial-four__shape-1"></div>
                                            <p class="testimonial-four__text">I was very impresed by the company service
                                                lore ipsum is simply free text used by copy typing refreshing. Neque
                                                porro
                                                est qui dolorem ipsum quia.</p>
                                            <div class="testimonial-four__client-info-box">
                                                <div class="testimonial-four__client-info">
                                                    <h4 class="testimonial-four__client-name">Arif Rahman</h4>
                                                    <p class="testimonial-four__client-sub-title">Customers</p>
                                                </div>
                                                <div class="testimonial-four__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-4-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Four Single End-->
                                <!--Testimonial Four Single Start-->
                                <div class="item">
                                    <div class="testimonial-four__single">
                                        <div class="testimonial-four__single-inner">
                                            <div class="testimonial-four__shape-1"></div>
                                            <p class="testimonial-four__text">I was very impresed by the company service
                                                lore ipsum is simply free text used by copy typing refreshing. Neque
                                                porro
                                                est qui dolorem ipsum quia.</p>
                                            <div class="testimonial-four__client-info-box">
                                                <div class="testimonial-four__client-info">
                                                    <h4 class="testimonial-four__client-name">Devit Indra Rukmana</h4>
                                                    <p class="testimonial-four__client-sub-title">Customers</p>
                                                </div>
                                                <div class="testimonial-four__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-4-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Four Single End-->
                                <!--Testimonial Four Single Start-->
                                <div class="item">
                                    <div class="testimonial-four__single">
                                        <div class="testimonial-four__single-inner">
                                            <div class="testimonial-four__shape-1"></div>
                                            <p class="testimonial-four__text">I was very impresed by the company service
                                                lore ipsum is simply free text used by copy typing refreshing. Neque
                                                porro
                                                est qui dolorem ipsum quia.</p>
                                            <div class="testimonial-four__client-info-box">
                                                <div class="testimonial-four__client-info">
                                                    <h4 class="testimonial-four__client-name">Arif Rahman</h4>
                                                    <p class="testimonial-four__client-sub-title">Customers</p>
                                                </div>
                                                <div class="testimonial-four__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-4-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Four Single End-->
                                <!--Testimonial Four Single Start-->
                                <div class="item">
                                    <div class="testimonial-four__single">
                                        <div class="testimonial-four__single-inner">
                                            <div class="testimonial-four__shape-1"></div>
                                            <p class="testimonial-four__text">I was very impresed by the company service
                                                lore ipsum is simply free text used by copy typing refreshing. Neque
                                                porro
                                                est qui dolorem ipsum quia.</p>
                                            <div class="testimonial-four__client-info-box">
                                                <div class="testimonial-four__client-info">
                                                    <h4 class="testimonial-four__client-name">Devit Indra Rukmana</h4>
                                                    <p class="testimonial-four__client-sub-title">Customers</p>
                                                </div>
                                                <div class="testimonial-four__rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-four__client-img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/testimonial/testimonial-4-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Four Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Four End-->

        <!--Brand One Start-->
        <section class="brand-one brand-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="brand-one__title">
                            <h2>Trusted and funded by more then 800 companies</h2>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="brand-one__main-content">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 5
                        }
                    }}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                                    </div><!-- /.swiper-slide -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--News Four Start-->
        <section class="news-four">
            <div class="container">
                <div class="section-title-two text-center">
                    <div class="section-title-two__sub-title-box">
                        <p class="section-title-two__sub-title"> <span class="section-title-two__slash-one">//</span>
                            Our blog posts
                            <span class="section-title-two__slash-two">\\</span></p>
                    </div>
                    <h2 class="section-title-two__title">Latest news & articles <br>
                        from the blog</h2>
                </div>
                <div class="row">
                    <!--News Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-four__single">
                            <div class="news-four__img">
                                <img src="{{ asset('assets/images/update-10-02-2023/blog/news-4-1.jpg') }}" alt="">
                            </div>
                            <div class="news-four__content">
                                <div class="news-four__date">
                                    <p>26</p>
                                    <span>Feb</span>
                                </div>
                                <ul class="list-unstyled news-four__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-four__title"><a href="{{ route('newsDetails') }}">Certificate Handover Ceremony by TUVNORD Indonesia</a></h3>
                                <a href="{{ route('newsDetails') }}" class="news-four__read-more">Read More <span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--News Four Single End-->
                    <!--News Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-four__single">
                            <div class="news-four__img">
                                <img src="{{ asset('assets/images/update-10-02-2023/blog/news-4-2.jpg') }}" alt="">
                            </div>
                            <div class="news-four__content">
                                <div class="news-four__date">
                                    <p>26</p>
                                    <span>Feb</span>
                                </div>
                                <ul class="list-unstyled news-four__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-four__title"><a href="{{ route('newsDetails') }}">Lorem ipsum dolor sit amet,
                                        consectetur</a></h3>
                                <a href="{{ route('newsDetails') }}" class="news-four__read-more">Read More <span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--News Four Single End-->
                    <!--News Four Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-four__single">
                            <div class="news-four__img">
                                <img src="{{ asset('assets/images/update-10-02-2023/blog/news-4-3.jpg') }}" alt="">
                            </div>
                            <div class="news-four__content">
                                <div class="news-four__date">
                                    <p>26</p>
                                    <span>Feb</span>
                                </div>
                                <ul class="list-unstyled news-four__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-user-circle"></i> by Admin </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-four__title"><a href="{{ route('newsDetails') }}">Suspendisse posuere, leo ac
                                        laoreet dapibus</a></h3>
                                <a href="{{ route('newsDetails') }}" class="news-four__read-more">Read More <span
                                        class="icon-right-arrow1"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--News Four Single End-->
                </div>
            </div>
        </section>
        <!--News Four End-->

        <!--Site Footer Start-->
        <footer class="site-footer-two">
            <div class="container">
                <div class="site-footer-two__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget-two__about">
                                <div class="footer-widget-two__logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/update-10-02-2023/resources/logo-3.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="footer-widget-two__about-text-box">
                                    <p class="footer-widget-two__about-text">Our motto is "We Are The Quality" because Quality only happens when we care enough to do our best. PT. Kurnia Mustika Indah Lestari will bring you the best in our products and customer’s services..</p>
                                </div>
                                <div class="site-footer-two__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget-two__links clearfix">
                                <h3 class="footer-widget-two__title">Links</h3>
                                <ul class="footer-widget-two__links-list list-unstyled clearfix">
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('insurance01') }}">Insurance</a></li>
                                    <li><a href="{{ route('portfolio') }}">Latest Portfolio</a></li>
                                    <li><a href="{{ route('faq') }}">Our Faqs</a></li>
                                    <li><a href="{{ route('contact') }}">Get in Touch</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget-two__latest-news clearfix">
                                <h3 class="footer-widget-two__title">Latest News</h3>
                                <ul class="footer-widget-two__latest-news-list list-unstyled clearfix">
                                    <li>
                                        <div class="footer-widget-two__latest-news-img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/resources/footer-widget-two-latest-news-img-1-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="footer-widget-two__latest-news-content">
                                            <p class="footer-widget-two__latest-news-date">20 Jan, 2023</p>
                                            <h4 class="footer-widget-two__latest-news-title"><a
                                                    href="news-details') }}">Our Insurance Strategy <br> for Large
                                                    Business</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget-two__latest-news-img">
                                            <img src="{{ asset('assets/images/update-10-02-2023/resources/footer-widget-two-latest-news-img-1-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="footer-widget-two__latest-news-content">
                                            <p class="footer-widget-two__latest-news-date">20 Jan, 2023</p>
                                            <h4 class="footer-widget-two__latest-news-title"><a
                                                    href="news-details') }}">Lorem ipsum dolor <br> sit amet</a></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget-two__contact clearfix">
                                <h3 class="footer-widget-two__title">Contact</h3>
                                <p class="footer-widget-two__contact-text">30 Broklyn Golden Road Street, <br> New York.
                                    USA</p>
                                <ul class="footer-widget-two__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:info@kmil.co.id">info@kmil.co.id</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-phone-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:9200368090">0813-1629-7120</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer-two__newsletter">
                    <div class="site-footer-two__newsletter-left">
                        <div class="site-footer-two__newsletter-icon">
                            <span class="icon-email"></span>
                        </div>
                        <p class="site-footer-two__newsletter-content">Get Daily Insurance News</p>
                    </div>
                    <div class="site-footer-two__newsletter-right">
                        <form class="site-footer-two__newsletter-form">
                            <div class="site-footer-two__newsletter-input-box">
                                <input type="email" placeholder="Enter Your Email" name="email">
                                <button type="submit" class="newsletter__btn thm-btn-two">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-two__bottom-inner">
                                <p class="site-footer-two__bottom-text">© All Copyright 2025 by <a
                                        href="#">kmil.co.id</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->
    </div><!-- /.page-wrapper -->

@endsection 