@extends('layout.layout')

@php
$headTitle = 'Home Six';
$header='false';
$counterone = 'false';
$css = '<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">';
$css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-4.css') . '" />';
$script= '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
          <script src="' . asset('assets/js/insur.js') . '"></script>';
$footer='false';
@endphp

@section('content')

    <div class="page-wrapper">
        
    <header class="main-header-six">
            <div class="main-header-six__top">
                <div class="main-header-six__top-inner">
                    <div class="main-header-six__top-shape-1"
                        style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/main-header-six-top-shape-1.png') }}')">
                    </div>
                    <div class="main-header-six__top-address">
                        <ul class="list-unstyled main-header-six__top-address-list">
                            <li>
                                <i class="icon">
                                    <span class="icon-telephone-call"></span>
                                </i>
                                <div class="text">
                                    <p><a href="tel:008757845682">(00) 875 784 5682</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="fas fa-envelope"></span>
                                </i>
                                <div class="text">
                                    <p><a href="mailto:Insurinfo@gmail.com">Insurinfo@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="icon">
                                    <span class="icon-pin"></span>
                                </i>
                                <div class="text">
                                    <p>238, Arimantab, Moska - USA.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-six__top-right">
                        <div class="language-switcher">
                            <select class="selectpicker">
                                <option
                                    data-content="<span class='lang-en'><img src='{{ asset('assets/images/update-17-06-2023/lang-flag/en.png') }}' alt=''>English</span>"
                                    value="en" selected>English</option>
                                <option
                                    data-content="<span class='lang-fr'><img src='{{ asset('assets/images/update-17-06-2023/lang-flag/fr.png') }}' alt=''>French</span>"
                                    value="fr">French
                                </option>

                                <option
                                    data-content="<span class='lang-it'><img src='{{ asset('assets/images/update-17-06-2023/lang-flag/it.png') }}' alt=''>Italian</span>"
                                    value="it">
                                    Italian</option>
                            </select>

                        </div>
                        <div class="main-header-six__top-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-six">
                <div class="main-menu-six__wrapper">
                    <div class="main-menu-six__wrapper-inner">
                        <div class="main-menu-six__logo-box">
                            <div class="main-menu-six__logo">
                                <a href="{{ route('index') }}"><img
                                        src="{{ asset('assets/images/update-17-06-2023/resources/main-menu-six-logo.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-six__left">
                            <div class="main-menu-six__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="scrollToLink"><a href="#home">Home</a></li>
                                    <li class="scrollToLink"><a href="#about">About</a></li>
                                    <li class="scrollToLink"><a href="#services">Services</a></li>
                                    <li class="scrollToLink"><a href="#testimonials">Testimonials</a></li>
                                    <li class="scrollToLink"><a href="#team">Team</a></li>
                                    <li class="scrollToLink"><a href="#contact">Contact Us</a></li>
                                    <li class="scrollToLink"><a href="#blog">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-six__right">
                            <div class="main-menu-six__search-user-get-quote-btn">
                                <div class="main-menu-six__search-box">
                                    <a href="#" class="main-menu-six__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu-six__user">
                                    <a href="{{ route('contact') }}"><span class="fas fa-user"></span></a>
                                </div>
                                <div class="main-menu-six__get-quote-btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn-three main-menu-six__get-quote-btn">Get a
                                        Quote <span class="fas fa-paper-plane"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

        <div class="stricky-header stricked-menu main-menu main-menu-six">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-six clearfix" id="home">
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
                            style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-1.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-six__content">
                                        <h2 class="main-slider-six__title">Industrial Parts more <br> than just lifetime
                                            <br> Protection</h2>
                                        <p class="main-slider-six__text">Lorem Ipsum has been the industry's standard
                                            dummy text ever since unknown <br> printer took a galley of type and
                                            scrambled it to make.</p>
                                        <div class="main-slider-six__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                                Started <span class="icon-right-arrow1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-2.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-six__content">
                                        <h2 class="main-slider-six__title">Industrial Parts more <br> than just lifetime
                                            <br> Protection</h2>
                                        <p class="main-slider-six__text">Lorem Ipsum has been the industry's standard
                                            dummy text ever since unknown <br> printer took a galley of type and
                                            scrambled it to make.</p>
                                        <div class="main-slider-six__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                                Started <span class="icon-right-arrow1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-6-3.jpg') }}')">
                        </div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-six__content">
                                        <h2 class="main-slider-six__title">Industrial Parts more <br> than just lifetime
                                            <br> Protection</h2>
                                        <p class="main-slider-six__text">Lorem Ipsum has been the industry's standard
                                            dummy text ever since unknown <br> printer took a galley of type and
                                            scrambled it to make.</p>
                                        <div class="main-slider-six__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn-three main-slider-six__btn">Let’s Get
                                                Started <span class="icon-right-arrow1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-six__nav">
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

        <!--Feature Six Start-->
        <section class="feature-six">
            <div class="container">
                <div class="row">
                    <!--Feature Six Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-six__single">
                            <div class="feature-six__single-inner">
                                <div class="feature-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-1.jpg') }}" alt="">
                                </div>
                                <div class="feature-six__shape-2">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-2.jpg') }}" alt="">
                                </div>
                                <div class="feature-six__icon">
                                    <span class="icon-insurance-2"></span>
                                </div>
                                <h3 class="feature-six__title"><a href="{{ route('about') }}">Advanced Technology</a></h3>
                                <p class="feature-six__text">Changes is inevitable and often continuous. KMIL believes that the innovation in precision machining and stamping technologies / machineries is very crucial to adapt in the field.</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature Six Single End-->
                    <!--Feature Six Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-six__single">
                            <div class="feature-six__single-inner">
                                <div class="feature-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-1.jpg') }}" alt="">
                                </div>
                                <div class="feature-six__shape-2">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-2.jpg') }}" alt="">
                                </div>
                                <div class="feature-six__icon">
                                    <span class="icon-cashback"></span>
                                </div>
                                <h3 class="feature-six__title"><a href="{{ route('contact') }}">Get a Request a Free quote</a></h3>
                                <p class="feature-six__text">Duis aute irure dolor reprehenderit voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature Six Single End-->
                    <!--Feature Six Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-six__single">
                            <div class="feature-six__single-inner">
                                <div class="feature-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-1.jpg') }}" alt="">
                                </div>
                                <div class="feature-six__shape-2">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/feature-six-shape-2.jpg') }}" alt="">
                                </div>
                                <div class="feature-six__icon">
                                    <span class="icon-cash-flow"></span>
                                </div>
                                <h3 class="feature-six__title"><a href="{{ route('about') }}">Professionalism</a></h3>
                                <p class="feature-six__text">Being professional to our customers and suppliers is a key to hold our trust and maintain a good relationship with both parties. KMIL delivers Quality, Flexibility and Uncompromising customer services to thrive in the business.</p>
                            </div>
                        </div>
                    </div>
                    <!--Feature Six Single End-->
                </div>
            </div>
        </section>
        <!--Feature Six End-->

        <!--About Seven Start-->
        <section class="about-seven" id="about">
            <div class="about-seven__shape-4 zoominout"></div>
            <div class="about-seven__shape-5 float-bob-y"></div>
            <div class="about-seven__shape-6 float-bob-x">
                <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-6.png') }}" alt="">
            </div>
            <div class="about-seven__shape-7">
                <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-7.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-seven__left">
                            <div class="about-seven__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-seven__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/about-seven-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-seven__experience">
                                    <div class="about-seven__experience-count-box">
                                        <h3 class="odometer" data-count="25">00</h3>
                                        <span class="about-seven__experience-plus">+</span>
                                    </div>
                                    <p class="about-seven__experience-text">Years working
                                        <br> Experience</p>
                                    <div class="about-seven__shape-1">
                                        <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="about-seven__shape-2 float-bob-y">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/about-seven-shape-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-seven__right">
                            <div class="section-title-four text-left">
                                <span class="section-title-four__tagline">about our company</span>
                                <h2 class="section-title-four__title">Providing the best insurance <br> policy to
                                    customers
                                </h2>
                            </div>
                            <p class="about-seven__text">Standard dummy text ever since the unknown printer took galley
                                of scramble make a type specimen book has the been industr standard dummy text ever
                                since printer took type make type specimen book.</p>
                            <div class="about-seven__right-bottom">
                                <div class="about-seven__right-bottom-left">
                                    <ul class="about-seven__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Standard dummy tex</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <p>Duis aute irure dolor in</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="about-seven__contact">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/update-17-06-2023/icon/about-seven-contact-icon.png') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <p>Emergency</p>
                                            <h3><a href="tel:+99012356987">(+99) 012356987</a></h3>
                                        </div>
                                    </div>
                                    <div class="about-seven__btn-box">
                                        <a href="{{ route('about') }}" class="about-seven__btn thm-btn-three">Discover More<span
                                                class="icon-right-arrow1"></span></a>
                                    </div>
                                </div>
                                <div class="about-seven__right-counter">
                                    <div class="about-seven__shape-3 zoominout"></div>
                                    <ul class="about-seven__right-counter-list list-unstyled">
                                        <li>
                                            <div class="about-seven__count-box">
                                                <div class="about-seven__count count-box">
                                                    <h3 class="count-text" data-stop="100" data-speed="1500">00</h3>
                                                </div>
                                                <span class="about-seven__count-plus">%</span>
                                            </div>
                                            <p>Success Rate</p>
                                        </li>
                                        <li>
                                            <div class="about-seven__count-box">
                                                <div class="about-seven__count count-box">
                                                    <h3 class="count-text" data-stop="5482" data-speed="1500">00</h3>
                                                </div>
                                                <span class="about-seven__count-plus">+</span>
                                            </div>
                                            <p>Satisfied Clients</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Seven End-->

        <!--Services six Start-->
        <section class="services-six" id="services">
            <div class="container">
                <div class="section-title-four text-center">
                    <span class="section-title-four__tagline">Our all services</span>
                    <h2 class="section-title-four__title">What We are Offering</h2>
                </div>
                <div class="services-six__bottom">
                    <div class="services-six__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
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
                                "items": 3
                            },
                            "1350": {
                                "items": 4
                            }
                        }
                    }'>
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-drive"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('carInsurance') }}">Stamping Parts</a></h3>
                                <p class="services-six__text">PT. Kurnia Mustika Indah Lestari ‘s custom metal stamping services deliver precision metal stampings from prototypes designed by our engineer through production quantities. We run stampings in high-volume, tight tolerance, precision stampings in Stainless Steel, Cold Rolled Steel, HLE Steel, Zinc plated steel, Aluminium Plated Steel, Alumunium, Brass and Copper. Our press machines have full feed lines and are die sensor protection ready. PT. Kurnia Mustika Indah Lestari runs nearly 30 million stampings per year at a 98% on-time delivery rate.</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('carInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-life-insurance"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts</a></h3>
                                <p class="services-six__text">Lorem ipsum dolor amet, consectetur
                                    adipiscing elit, sed eiusmod tempor
                                    incididunt labore..</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('lifeInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-home"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a></h3>
                                <p class="services-six__text">Lorem ipsum dolor amet, consectetur
                                    adipiscing elit, sed eiusmod tempor
                                    incididunt labore..</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('homeInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-heart-beat"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('healthInsurance') }}">Sheet Metal Processing</a>
                                </h3>
                                <p class="services-six__text">Lorem ipsum dolor amet, consectetur
                                    adipiscing elit, sed eiusmod tempor
                                    incididunt labore..</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('healthInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-drive"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('carInsurance') }}">Stamping Parts</a></h3>
                                <p class="services-six__text">PT. Kurnia Mustika Indah Lestari ‘s custom metal stamping services deliver precision metal stampings from prototypes designed by our engineer through production quantities. We run stampings in high-volume, tight tolerance, precision stampings in Stainless Steel, Cold Rolled Steel, HLE Steel, Zinc plated steel, Aluminium Plated Steel, Alumunium, Brass and Copper. Our press machines have full feed lines and are die sensor protection ready. PT. Kurnia Mustika Indah Lestari runs nearly 30 million stampings per year at a 98% on-time delivery rate.</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('carInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-life-insurance"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts</a></h3>
                                <p class="services-six__text">Lorem ipsum dolor amet, consectetur
                                    adipiscing elit, sed eiusmod tempor
                                    incididunt labore..</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('lifeInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-home"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a></h3>
                                <p class="services-six__text">Lorem ipsum dolor amet, consectetur
                                    adipiscing elit, sed eiusmod tempor
                                    incididunt labore..</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('homeInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                        <!-- Services Six Single Start-->
                        <div class="item">
                            <div class="services-six__single">
                                <div class="services-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/services-six-shape-1.png') }}" alt="">
                                </div>
                                <div class="services-six__icon">
                                    <span class="icon-heart-beat"></span>
                                    <div class="services-six__icon-shape-1"></div>
                                    <div class="services-six__icon-shape-2"></div>
                                </div>
                                <h3 class="services-six__title"><a href="{{ route('healthInsurance') }}">Sheet Metal Processing</a>
                                </h3>
                                <p class="services-six__text">Lorem ipsum dolor amet, consectetur
                                    adipiscing elit, sed eiusmod tempor
                                    incididunt labore..</p>
                                <div class="services-six__btn-box">
                                    <a href="{{ route('healthInsurance') }}" class="services-six__btn thm-btn-three">Details<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Services Six Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Services six End-->

        <!--Counter Three Start-->
        <section class="counter-three">
            <div class="counter-three__bg"
                style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/counter-three-bg.png') }}')"></div>
            <div class="container">
                <div class="counter-three__inner">
                    <ul class="counter-three__count-box list-unstyled">
                        <li>
                            <div class="counter-three__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="counter-three__icon">
                                <span class="icon-agreement"></span>
                            </div>
                            <div class="counter-three__count count-box">
                                <h3 class="count-text" data-stop="876" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-three__text">Insurance Policies</p>
                        </li>
                        <li>
                            <div class="counter-three__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="counter-three__icon">
                                <span class="icon-group"></span>
                            </div>
                            <div class="counter-three__count count-box">
                                <h3 class="count-text" data-stop="223" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-three__text">Happy Clients</p>
                        </li>
                        <li>
                            <div class="counter-three__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="counter-three__icon">
                                <span class="icon-ring"></span>
                            </div>
                            <div class="counter-three__count count-box">
                                <h3 class="count-text" data-stop="96" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-three__text">Award Winning</p>
                        </li>
                        <li>
                            <div class="counter-three__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-three-shape-1.png') }}" alt="">
                            </div>
                            <div class="counter-three__icon">
                                <span class="icon-insurance-2"></span>
                            </div>
                            <div class="counter-three__count count-box">
                                <h3 class="count-text" data-stop="786" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-three__text">Skilled Contractors</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter Three End-->

        <!--Testimonial Six Start-->
        <section class="testimonial-six" id="testimonials">
            <div class="container">
                <div class="section-title-four text-center">
                    <span class="section-title-four__tagline">Testimonial</span>
                    <h2 class="section-title-four__title">Our Lovely Customer </h2>
                </div>
                <div class="testimonial-six__bottom">
                    <div class="testimonial-six__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 36,
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
                                "items": 1
                            },
                            "992": {
                                "items": 1
                            },
                            "1350": {
                                "items": 1
                            }
                        }
                    }'>
                        <!--Testimonial Six Single Start-->
                        <div class="item">
                            <div class="testimonial-six__single">
                                <div class="testimonial-six__single-top">
                                    <div class="testimonial-six__ratting">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="testimonial-six__text">Standard dummy text ever since the unknown printer
                                        took
                                        galley of scramble make a type specimen book has the been industr</p>
                                </div>
                                <div class="testimonial-six__client-info-box">
                                    <div class="testimonial-six__quote-icon">
                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-six__client-img">
                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-1.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonial-six__client-info">
                                        <h3>Remedios Linared</h3>
                                        <p>Web designar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Six Single Start-->
                        <!--Testimonial Six Single Start-->
                        <div class="item">
                            <div class="testimonial-six__single">
                                <div class="testimonial-six__single-top">
                                    <div class="testimonial-six__ratting">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="testimonial-six__text">Standard dummy text ever since the unknown printer
                                        took
                                        galley of scramble make a type specimen book has the been industr</p>
                                </div>
                                <div class="testimonial-six__client-info-box">
                                    <div class="testimonial-six__quote-icon">
                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-six__client-img">
                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-2.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonial-six__client-info">
                                        <h3>Brandon Martinez</h3>
                                        <p>Product Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Six Single Start-->
                        <!--Testimonial Six Single Start-->
                        <div class="item">
                            <div class="testimonial-six__single">
                                <div class="testimonial-six__single-top">
                                    <div class="testimonial-six__ratting">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p class="testimonial-six__text">Standard dummy text ever since the unknown printer
                                        took
                                        galley of scramble make a type specimen book has the been industr</p>
                                </div>
                                <div class="testimonial-six__client-info-box">
                                    <div class="testimonial-six__quote-icon">
                                        <img src="{{ asset('assets/images/update-17-06-2023/icon/icon-quote.png') }}" alt="">
                                    </div>
                                    <div class="testimonial-six__client-img">
                                        <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-six-img-3.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonial-six__client-info">
                                        <h3>Marjorie Worley</h3>
                                        <p>Web Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Six Single Start-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Six End-->

        <!--Team Five Start-->
        <section class="team-five" id="team">
            <div class="team-five__bg-box">
                <div class="team-five__bg"
                    style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/team-five-bg.png') }}')"></div>
            </div>
            <div class="container">
                <div class="section-title-four text-center">
                    <span class="section-title-four__tagline">TEAM MEMBERS</span>
                    <h2 class="section-title-four__title">Meet our experienced team</h2>
                </div>
                <div class="row">
                    <!--Team Five Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-five__single">
                            <div class="team-five__single-bg-color"></div>
                            <div class="team-five__content">
                                <h3 class="team-five__name"><a href="{{ route('teamDetails') }}">Devin Booker</a></h3>
                                <p class="team-five__sub-title">DIRECTOR</p>
                            </div>
                            <div class="team-five__img-box">
                                <div class="team-five__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/team/team-five-img-1.jpg') }}" alt="">
                                </div>
                                <div class="team-five__social">
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-facebook-f"></span></a>
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-twitter"></span></a>
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Five Single End-->
                    <!--Team Five Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-five__single">
                            <div class="team-five__single-bg-color"></div>
                            <div class="team-five__content">
                                <h3 class="team-five__name"><a href="{{ route('teamDetails') }}">Lorie Hutton</a></h3>
                                <p class="team-five__sub-title">MANAGER</p>
                            </div>
                            <div class="team-five__img-box">
                                <div class="team-five__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/team/team-five-img-2.jpg') }}" alt="">
                                </div>
                                <div class="team-five__social">
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-facebook-f"></span></a>
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-twitter"></span></a>
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Five Single End-->
                    <!--Team Five Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-five__single">
                            <div class="team-five__single-bg-color"></div>
                            <div class="team-five__content">
                                <h3 class="team-five__name"><a href="{{ route('teamDetails') }}">Bob Thomas</a></h3>
                                <p class="team-five__sub-title">DESIGNER</p>
                            </div>
                            <div class="team-five__img-box">
                                <div class="team-five__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/team/team-five-img-3.jpg') }}" alt="">
                                </div>
                                <div class="team-five__social">
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-facebook-f"></span></a>
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-twitter"></span></a>
                                    <a href="{{ route('teamDetails') }}"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Five Single End-->
                </div>
            </div>
        </section>
        <!--Team Five End-->

        <!--Why Choose Five Start-->
        <section class="why-choose-five">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="why-choose-five__left">
                            <div class="why-choose-five__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="why-choose-five__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/why-choose-five-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-five__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-1.png') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-five__shape-2">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-2.png') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-five__shape-3">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-3.png') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-five__shape-4">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/why-choose-five-shape-4.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="why-choose-five__right">
                            <div class="section-title-four text-left">
                                <span class="section-title-four__tagline">WHY YOU CHOOSE US</span>
                                <h2 class="section-title-four__title">Why you should choose our
                                    Kmil Project.</h2>
                            </div>
                            <ul class="why-choose-five__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-insurance"></span>
                                    </div>
                                    <div class="content">
                                        <h3>100% Safe Money</h3>
                                        <p>Insurance agencies can be organized either as a conventional
                                            <br> stock organization.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-cashback"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Anytime Money Back</h3>
                                        <p>Insurance agencies can be organized either as a conventional
                                            <br> stock organization.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-profits"></span>
                                    </div>
                                    <div class="content">
                                        <h3>Fast Process</h3>
                                        <p>Insurance agencies can be organized either as a conventional
                                            <br> stock organization.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Five End-->

        <!--Get Insuracne Three Start-->
        <section class="get-insuracne-three" id="contact">
            <div class="get-insuracne-three__shape-1 float-bob-y">
                <img src="{{ asset('assets/images/update-17-06-2023/shapes/get-insuracne-three-shape-1.png') }}" alt="">
            </div>
            <div class="get-insuracne-three__bg"
                style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/get-insuracne-three-bg.jpg') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-4">
                        <div class="get-insuracne-three__left">
                            <div class="get-insuracne-three__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="get-insuracne-three__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="get-insuracne-three__right">
                            <div class="get-insuracne-three__right-bg"
                                style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/get-insuracne-three-right-bg.png') }}')">
                            </div>
                            <div class="section-title-four text-left">
                                <span class="section-title-four__tagline">GET A Request a Free quote</span>
                                <h2 class="section-title-four__title">Kmil Quote</h2>
                            </div>
                            <div class="get-insuracne-three__tab clearfix">
                                <div class="get-insuracne-three__tab-box tabs-box clearfix">
                                    <div class="get-insuracne-three__inner clearfix">
                                        <div class="get-insuracne-three__tab-top">
                                            <ul class="tab-buttons clearfix list-unstyled">
                                                <li data-tab="#house" class="tab-btn active-btn">
                                                    <div class="get-insuracne-three__tab-btn-content">
                                                        <div class="get-insuracne-three__tab-icon">
                                                            <span class="icon-home"></span>
                                                        </div>
                                                        <div class="get-insuracne-three__tab-text-box">
                                                            <p class="get-insuracne-three__tab-text">Fabrication</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li data-tab="#car" class="tab-btn">
                                                    <div class="get-insuracne-three__tab-btn-content">
                                                        <div class="get-insuracne-three__tab-icon">
                                                            <span class="icon-drive"></span>
                                                        </div>
                                                        <div class="get-insuracne-three__tab-text-box">
                                                            <p class="get-insuracne-three__tab-text">Car</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li data-tab="#health" class="tab-btn">
                                                    <div class="get-insuracne-three__tab-btn-content">
                                                        <div class="get-insuracne-three__tab-icon">
                                                            <span class="icon-heart-beat"></span>
                                                        </div>
                                                        <div class="get-insuracne-three__tab-text-box">
                                                            <p class="get-insuracne-three__tab-text">Precision</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li data-tab="#study" class="tab-btn">
                                                    <div class="get-insuracne-three__tab-btn-content">
                                                        <div class="get-insuracne-three__tab-icon">
                                                            <span class="icon-folder"></span>
                                                        </div>
                                                        <div class="get-insuracne-three__tab-text-box">
                                                            <p class="get-insuracne-three__tab-text">Stamping</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="get-insuracne-three__tab-bottom">
                                            <div class="tabs-content">
                                                <!--tab-->
                                                <div class="tab active-tab" id="house">
                                                    <div class="get-insuracne-three__content">
                                                        <form class="get-insuracne-three__form">
                                                            <div class="get-insuracne-three__content-box">
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="text" placeholder="Full name"
                                                                        name="name">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="email" placeholder="Email address"
                                                                        name="email">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
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
                                                            <div class="get-insuracne-three__progress">
                                                                <div class="get-insuracne-three__progress-single">
                                                                    <h4 class="get-insuracne-three__progress-title">
                                                                        Client Satisfactions</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar"
                                                                            data-percent="78%">
                                                                            <div class="count-text">78%</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-three__content-bottom">
                                                                <button type="submit"
                                                                    class="thm-btn-three get-insuracne-three__btn">Submit
                                                                    Now<span class="icon-right-arrow1"></span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                                <!--tab-->
                                                <div class="tab " id="car">
                                                    <div class="get-insuracne-three__content">
                                                        <form class="get-insuracne-three__form">
                                                            <div class="get-insuracne-three__content-box">
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="text" placeholder="Full name"
                                                                        name="name">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="email" placeholder="Email address"
                                                                        name="email">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
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
                                                            <div class="get-insuracne-three__progress">
                                                                <div class="get-insuracne-three__progress-single">
                                                                    <h4 class="get-insuracne-three__progress-title">
                                                                        Client Satisfactions</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar"
                                                                            data-percent="78%">
                                                                            <div class="count-text">78%</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-three__content-bottom">
                                                                <button type="submit"
                                                                    class="thm-btn-three get-insuracne-three__btn">Submit
                                                                    Now<span class="icon-right-arrow1"></span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                                <!--tab-->
                                                <div class="tab " id="health">
                                                    <div class="get-insuracne-three__content">
                                                        <form class="get-insuracne-three__form">
                                                            <div class="get-insuracne-three__content-box">
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="text" placeholder="Full name"
                                                                        name="name">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="email" placeholder="Email address"
                                                                        name="email">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
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
                                                            <div class="get-insuracne-three__progress">
                                                                <div class="get-insuracne-three__progress-single">
                                                                    <h4 class="get-insuracne-three__progress-title">
                                                                        Client Satisfactions</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar"
                                                                            data-percent="78%">
                                                                            <div class="count-text">78%</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-three__content-bottom">
                                                                <button type="submit"
                                                                    class="thm-btn-three get-insuracne-three__btn">Submit
                                                                    Now<span class="icon-right-arrow1"></span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
                                                <!--tab-->
                                                <div class="tab " id="study">
                                                    <div class="get-insuracne-three__content">
                                                        <form class="get-insuracne-three__form">
                                                            <div class="get-insuracne-three__content-box">
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="text" placeholder="Full name"
                                                                        name="name">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
                                                                    <input type="email" placeholder="Email address"
                                                                        name="email">
                                                                </div>
                                                                <div class="get-insuracne-three__input-box">
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
                                                            <div class="get-insuracne-three__progress">
                                                                <div class="get-insuracne-three__progress-single">
                                                                    <h4 class="get-insuracne-three__progress-title">
                                                                        Client Satisfactions</h4>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar"
                                                                            data-percent="78%">
                                                                            <div class="count-text">78%</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="get-insuracne-three__content-bottom">
                                                                <button type="submit"
                                                                    class="thm-btn-three get-insuracne-three__btn">Submit
                                                                    Now<span class="icon-right-arrow1"></span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <!--tab-->
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
        <!--Get Insuracne Three End-->

        <!--News Six Start-->
        <section class="news-six" id="blog">
            <div class="container">
                <div class="section-title-four text-center">
                    <span class="section-title-four__tagline">News & Blog</span>
                    <h2 class="section-title-four__title">Read Every Insurance Blog</h2>
                </div>
                <div class="row">
                    <!--News Six Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-six__single">
                            <div class="news-six__img-box">
                                <div class="news-six__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/blog/news-6-1.jpg') }}" alt="">
                                </div>
                                <div class="news-six__date">
                                    <p>28</p>
                                    <span>august</span>
                                </div>
                            </div>
                            <div class="news-six__content">
                                <div class="news-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/news-six-shape-1.png') }}" alt="">
                                </div>
                                <h3 class="news-six__title"><a href="{{ route('newsDetails') }}">predefined chunk necessary
                                        generator the Internet.</a></h3>
                                <p class="news-six__text">Standard dummy text ever since the unknown took make a type
                                    specimen book.</p>
                                <div class="news-six__btn-box">
                                    <a href="{{ route('newsDetails') }}" class="news-six__btn thm-btn-three">Read More<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Six Single End-->
                    <!--News Six Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-six__single">
                            <div class="news-six__img-box">
                                <div class="news-six__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/blog/news-6-2.jpg') }}" alt="">
                                </div>
                                <div class="news-six__date">
                                    <p>28</p>
                                    <span>august</span>
                                </div>
                            </div>
                            <div class="news-six__content">
                                <div class="news-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/news-six-shape-1.png') }}" alt="">
                                </div>
                                <h3 class="news-six__title"><a href="{{ route('newsDetails') }}">since the unknown took make a
                                        type
                                        specimen book.</a></h3>
                                <p class="news-six__text">Standard dummy text ever since the unknown took make a type
                                    specimen book.</p>
                                <div class="news-six__btn-box">
                                    <a href="{{ route('newsDetails') }}" class="news-six__btn thm-btn-three">Read More<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Six Single End-->
                    <!--News Six Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-six__single">
                            <div class="news-six__img-box">
                                <div class="news-six__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/blog/news-6-3.jpg') }}" alt="">
                                </div>
                                <div class="news-six__date">
                                    <p>28</p>
                                    <span>august</span>
                                </div>
                            </div>
                            <div class="news-six__content">
                                <div class="news-six__shape-1">
                                    <img src="{{ asset('assets/images/update-17-06-2023/shapes/news-six-shape-1.png') }}" alt="">
                                </div>
                                <h3 class="news-six__title"><a href="{{ route('newsDetails') }}">Standard dummy text ever since
                                        the unknown.</a></h3>
                                <p class="news-six__text">Standard dummy text ever since the unknown took make a type
                                    specimen book.</p>
                                <div class="news-six__btn-box">
                                    <a href="{{ route('newsDetails') }}" class="news-six__btn thm-btn-three">Read More<span
                                            class="icon-right-arrow1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Six Single End-->
                </div>
            </div>
        </section>
        <!--News Six End-->

        <!--CTA Five Start-->
        <section class="cta-five">
            <div class="cta-five__shape-1 float-bob-y"></div>
            <div class="cta-five__shape-2 float-bob-x"></div>
            <div class="container">
                <div class="cta-five__inner">
                    <h3 class="cta-five__title">Subscribe our newsletter</h3>
                    <div class="cta-five__subscribe-box">
                        <form class="cta-five__email-box">
                            <div class="cta-five__email-input-box">
                                <input type="email" placeholder="Email Address" name="email">
                            </div>
                            <button type="submit" class="cta-five__subscribe-btn thm-btn-three">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA Five End-->

        <!--Site Footer Four Start-->
        <footer class="site-footer-four">
            <div class="site-footer-four__bg"
                style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/site-footer-four-bg.png') }}')">
            </div>
            <div class="container">
                <div class="site-footer-four__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget-four__column footer-widget-four__about">
                                <div class="footer-widget-four__logo">
                                    <a href="{{ route('index') }}"><img
                                            src="{{ asset('assets/images/update-17-06-2023/resources/footer-logo-two.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="footer-widget-four__about-text-box">
                                    <p class="footer-widget__about-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna</p>
                                </div>
                                <div class="site-footer-four__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget-four__column footer-widget-four__services clearfix">
                                <h3 class="footer-widget-four__title">Our Services</h3>
                                <ul class="footer-widget-four__services-list list-unstyled clearfix">
                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('insurance01') }}">Insurance</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('portfolio') }}">Latest Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq') }}">Our Faqs</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Get in Touch</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget-four__column footer-widget-four__contact">
                                <h3 class="footer-widget-four__title">Contact us</h3>
                                <ul class="footer-widget-four__contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-telephone-call"></span>
                                        </div>
                                        <div class="content">
                                            <p>Phone:</p>
                                            <h3><a href="tel:0087578456">(00) 875 784 56</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="content">
                                            <p>E-mail:</p>
                                            <h3><a href="mailto:info@gmail.com">info@gmail.com</a></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget-four__column footer-widget-four__news">
                                <h3 class="footer-widget-four__title">News</h3>
                                <ul class="footer-widget-four__news-list list-unstyled">
                                    <li>
                                        <div class="footer-widget-four__news-img">
                                            <img src="{{ asset('assets/images/update-17-06-2023/resources/footer-widget-four-news-img-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h3><a href="{{ route('newsDetails') }}">The 8 best things about
                                                    insurance</a></h3>
                                            <p><span class="fa fa-calendar-alt"></span>05-09-2023</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-widget-four__news-img">
                                            <img src="{{ asset('assets/images/update-17-06-2023/resources/footer-widget-four-news-img-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="content">
                                            <h3><a href="{{ route('newsDetails') }}">How to make contrary
                                                    to popular</a></h3>
                                            <p><span class="fa fa-calendar-alt"></span>05-09-2023</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer-four__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-four__bottom-inner">
                                <p class="site-footer-four__bottom-text">© All Copyright 2025 by <a
                                        href="#">kmil.co.id</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer Four End-->
    </div><!-- /.page-wrapper -->
    
@endsection