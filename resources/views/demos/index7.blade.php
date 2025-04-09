@extends('layout.layout')

@php
$headTitle = 'Home Seven';
$header='false'; 
$counterone = 'Six';
$css = '<link rel="stylesheet" href="' . asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') . '" />';
$css3 = '<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">';
$css2 = '<link rel="stylesheet" href="' . asset('assets/css/color-5.css') . '" />';
$script = '<script src="' . asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') . '"></script>
           <script src="' . asset('assets/js/insur.js') . '"></script>';
$footer='false';
@endphp

@section('content')


    <header class="main-header-seven">
        <div class="main-header-seven__top">
            <div class="container">
                <div class="main-header-seven__top-inner">
                    <div class="main-header-seven__top-address">
                        <ul class="list-unstyled main-header-seven__top-address-list">
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
                    <div class="main-header-seven__top-right">
                        <h4 class="main-header-seven__solicl-title">Follow Us:</h4>
                        <div class="main-header-seven__top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-skype"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu main-menu-seven">
            <div class="main-menu-seven__wrapper">
                <div class="container">
                    <div class="main-menu-seven__wrapper-inner">
                        <div class="main-menu-seven__logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/update-17-06-2023/resources/main-menu-seven-logo.png') }}" alt=""></a>
                        </div>
                        <div class="main-menu-seven__left">
                            <div class="main-menu-seven__main-menu-box">
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
                                            <li class="is-new-menu"><a href="{{ route('policyProposal') }}">Policy
                                                    proposal</a></li>
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
                        <div class="main-menu-seven__right">
                            <div class="main-menu-seven__search-get-quote-btn">
                                <div class="main-menu-seven__search-box">
                                    <a href="#" class="main-menu-seven__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu-seven__get-quote-btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn-three main-menu-seven__get-quote-btn">Get
                                        a
                                        Quote <span class="fas fa-paper-plane"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-seven">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-seven clearfix">
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
                    <div class="main-slider-seven__bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-bg.jpg') }}')">
                    </div>
                    <div class="main-slider-seven__shape-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-shape-bg.png') }}')">
                    </div>
                    <div class="main-slider-seven__img">
                        <img src="{{ asset('assets/images/update-17-06-2023/resources/main-slider-seven-img-1.jpg') }}" alt="">
                        <div class="main-slider-seven__support">
                            <div class="main-slider-seven__support-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="main-slider-seven__support-content">
                                <h5 class="main-slider-seven__support-title">Free Consultation</h5>
                                <p class="main-slider-seven__support-number">Call Us:<a href="tel:">+(915)
                                        541-2456</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-seven__shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/update-17-06-2023/shapes/main-slider-seven-shape-1.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-seven__content">
                                    <h2 class="main-slider-seven__title">Life More Relaxed With <br>
                                        Smart <span>Insurance.</span></h2>
                                    <p class="main-slider-seven__text">Lorem Ipsum has been the industry's standard
                                        dummy text ever since unknown <br> printer took a galley of type and
                                        scrambled it to make.</p>
                                    <div class="main-slider-seven__email">
                                        <form class="main-slider-seven__email-box" data-url="MC_FORM_URL">
                                            <div class="main-slider-seven__email-input-box">
                                                <input type="email" placeholder="enter your email" name="email">
                                                <div class="main-slider-seven__email-icon">
                                                    <span class="icon-email"></span>
                                                </div>
                                            </div>
                                            <button type="submit" class="main-slider-seven__contact-btn">Contact
                                                Us</button>
                                        </form>
                                        <div class="mc-form__response"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-seven__bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-bg.jpg') }}')">
                    </div>
                    <div class="main-slider-seven__shape-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-shape-bg.png') }}')">
                    </div>
                    <div class="main-slider-seven__img">
                        <img src="{{ asset('assets/images/update-17-06-2023/resources/main-slider-seven-img-2.jpg') }}" alt="">
                        <div class="main-slider-seven__support">
                            <div class="main-slider-seven__support-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="main-slider-seven__support-content">
                                <h5 class="main-slider-seven__support-title">Free Consultation</h5>
                                <p class="main-slider-seven__support-number">Call Us:<a href="tel:">+(915)
                                        541-2456</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-seven__shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/update-17-06-2023/shapes/main-slider-seven-shape-1.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-seven__content">
                                    <h2 class="main-slider-seven__title">Life More Relaxed With <br>
                                        Smart <span>Insurance.</span></h2>
                                    <p class="main-slider-seven__text">Lorem Ipsum has been the industry's standard
                                        dummy text ever since unknown <br> printer took a galley of type and
                                        scrambled it to make.</p>
                                    <div class="main-slider-seven__email">
                                        <form class="main-slider-seven__email-box" data-url="MC_FORM_URL">
                                            <div class="main-slider-seven__email-input-box">
                                                <input type="email" placeholder="enter your email" name="email">
                                                <div class="main-slider-seven__email-icon">
                                                    <span class="icon-email"></span>
                                                </div>
                                            </div>
                                            <button type="submit" class="main-slider-seven__contact-btn">Contact
                                                Us</button>
                                        </form>
                                        <div class="mc-form__response"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="main-slider-seven__bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-bg.jpg') }}')">
                    </div>
                    <div class="main-slider-seven__shape-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/main-slider-seven-shape-bg.png') }}')">
                    </div>
                    <div class="main-slider-seven__img">
                        <img src="{{ asset('assets/images/update-17-06-2023/resources/main-slider-seven-img-3.jpg') }}" alt="">
                        <div class="main-slider-seven__support">
                            <div class="main-slider-seven__support-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="main-slider-seven__support-content">
                                <h5 class="main-slider-seven__support-title">Free Consultation</h5>
                                <p class="main-slider-seven__support-number">Call Us:<a href="tel:">+(915)
                                        541-2456</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-seven__shape-1 float-bob-y">
                        <img src="{{ asset('assets/images/update-17-06-2023/shapes/main-slider-seven-shape-1.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-seven__content">
                                    <h2 class="main-slider-seven__title">Life More Relaxed With <br>
                                        Smart <span>Insurance.</span></h2>
                                    <p class="main-slider-seven__text">Lorem Ipsum has been the industry's standard
                                        dummy text ever since unknown <br> printer took a galley of type and
                                        scrambled it to make.</p>
                                    <div class="main-slider-seven__email">
                                        <form class="main-slider-seven__email-box" data-url="MC_FORM_URL">
                                            <div class="main-slider-seven__email-input-box">
                                                <input type="email" placeholder="enter your email" name="email">
                                                <div class="main-slider-seven__email-icon">
                                                    <span class="icon-email"></span>
                                                </div>
                                            </div>
                                            <button type="submit" class="main-slider-seven__contact-btn">Contact
                                                Us</button>
                                        </form>
                                        <div class="mc-form__response"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-seven__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <span>Next</span>
                    <i class="icon-right-arrow1"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                    <span>Prev</span>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About Eight Start-->
    <section class="about-eight">
        <div class="about-eight__img-three float-bob-x">
            <img src="{{ asset('assets/images/update-17-06-2023/resources/about-eight-img-3.png') }}" alt="">
        </div>
        <div class="about-eight__img-four float-bob-y">
            <img src="{{ asset('assets/images/update-17-06-2023/resources/about-eight-img-4.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-eight__left">
                        <div class="about-eight__img-box">
                            <div class="about-eight__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/resources/about-eight-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-eight__img-two">
                                <img src="{{ asset('assets/images/update-17-06-2023/resources/about-eight-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-eight__experience">
                                <div class="about-eight__experience-shape" style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/about-eight-experience-shape-1.png') }}')">
                                </div>
                                <h3>22</h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-eight__right">
                        <div class="section-title-five text-left">
                            <span class="section-title-five__tagline">About our company</span>
                            <h2 class="section-title-five__title">Providing the best Kmil Project to customers
                            </h2>
                        </div>
                        <p class="about-eight__text">Standard dummy text ever since the unknown printer took galley
                            of scramble make a type specimen book has the been industr standard dummy text ever
                            since printer took type make type specimen book.</p>
                        <ul class="list-unstyled about-eight__service">
                            <li>
                                <div class="icon">
                                    <span class="icon-insurance-2"></span>
                                </div>
                                <div class="text">
                                    <p>Fast & Easy <br> Process</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-agreement"></span>
                                </div>
                                <div class="text">
                                    <p>Control Over <br> Policy</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-cashback"></span>
                                </div>
                                <div class="text">
                                    <p>Save your <br> Mony</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled about-eight__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Duis aute irure dolor in reprehenderit in</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p>Duis aute irure dolor in reprehenderit in</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-eight__btn-box">
                            <a href="{{ route('about') }}" class="about-eight__btn thm-btn-four">Discover More<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Eight End-->

    <!--Reg Insurance Start-->
    <section class="reg-insurance">
        <div class="reg-insurance__bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/reg-insurance-bg.jpg') }}')"></div>
        <div class="reg-insurance__shape-1 float-bob-y" style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/reg-insurance-shape-1.png') }}')"></div>
        <div class="reg-insurance__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/update-17-06-2023/shapes/reg-insurance-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="reg-insurance__inner">
                <h3 class="reg-insurance__title">Register For Insurance Today</h3>
                <p class="reg-insurance__text">Lorem Ipsum has been the industry's standard dummy text <br>
                    ever since unknown printer</p>
                <div class="reg-insurance__btn-box">
                    <a href="{{ route('contact') }}" class="reg-insurance__btn-one thm-btn-four">Register Free<span class="fas fa-arrow-right"></span></a>
                    <a href="{{ route('contact') }}" class="reg-insurance__btn-two thm-btn-four">Sign In<span class="fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--Reg Insurance End-->

    <!--Services Seven Start-->
    <section class="services-seven">
        <div class="container">
            <div class="section-title-five text-center">
                <span class="section-title-five__tagline">OUR SERVICES</span>
                <h2 class="section-title-five__title">We Provide Best Services</h2>
            </div>
            <div class="row">
                <!--Services Seven Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-seven__single">
                        <h3 class="services-seven__title"><a href="{{ route('lifeInsurance') }}">Industrial Parts</a></h3>
                        <p class="services-seven__text">Lorem ipsum dolor amet, consectetur <br>
                            adipiscing elit, sed eiusmod tempor <br>
                            incididunt labore..</p>
                        <a href="{{ route('lifeInsurance') }}" class="services-seven__btn thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        <div class="services-seven__img">
                            <img src="{{ asset('assets/images/update-17-06-2023/services/services-7-1.png') }}" alt="">
                        </div>
                        <div class="services-seven__hover-box">
                            <div class="services-seven__hover-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/services/services-seven-hover-bg-1.jpg') }}')">
                            </div>
                            <h3 class="services-seven__hover-title"><a href="{{ route('lifeInsurance') }}">Industrial Parts</a>
                            </h3>
                            <a href="{{ route('lifeInsurance') }}" class="services-seven__btn-two thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Seven Single End-->
                <!--Services Seven Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-seven__single">
                        <h3 class="services-seven__title"><a href="{{ route('homeInsurance') }}">Cutting Laser</a></h3>
                        <p class="services-seven__text">Lorem ipsum dolor amet, consectetur <br>
                            adipiscing elit, sed eiusmod tempor <br>
                            incididunt labore..</p>
                        <a href="{{ route('homeInsurance') }}" class="services-seven__btn thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        <div class="services-seven__img">
                            <img src="{{ asset('assets/images/update-17-06-2023/services/services-7-2.png') }}" alt="">
                        </div>
                        <div class="services-seven__hover-box">
                            <div class="services-seven__hover-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/services/services-seven-hover-bg-2.jpg') }}')">
                            </div>
                            <h3 class="services-seven__hover-title"><a href="{{ route('fireInsurance') }}">Cutting Laser</a>
                            </h3>
                            <a href="{{ route('fireInsurance') }}" class="services-seven__btn-two thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Seven Single End-->
                <!--Services Seven Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-seven__single">
                        <h3 class="services-seven__title"><a href="{{ route('lifeInsurance') }}">Sheet Metal Processing</a></h3>
                        <p class="services-seven__text">Lorem ipsum dolor amet, consectetur <br>
                            adipiscing elit, sed eiusmod tempor <br>
                            incididunt labore..</p>
                        <a href="{{ route('lifeInsurance') }}" class="services-seven__btn thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        <div class="services-seven__img">
                            <img src="{{ asset('assets/images/update-17-06-2023/services/services-7-3.png') }}" alt="">
                        </div>
                        <div class="services-seven__hover-box">
                            <div class="services-seven__hover-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/services/services-seven-hover-bg-3.jpg') }}')">
                            </div>
                            <h3 class="services-seven__hover-title"><a href="{{ route('healthInsurance') }}">Health
                                    Insurance</a>
                            </h3>
                            <a href="{{ route('healthInsurance') }}" class="services-seven__btn-two thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Seven Single End-->
                <!--Services Seven Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-seven__single">
                        <h3 class="services-seven__title"><a href="{{ route('lifeInsurance') }}">Jig & Fixtures</a></h3>
                        <p class="services-seven__text">Lorem ipsum dolor amet, consectetur <br>
                            adipiscing elit, sed eiusmod tempor <br>
                            incididunt labore..</p>
                        <a href="{{ route('lifeInsurance') }}" class="services-seven__btn thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        <div class="services-seven__img">
                            <img src="{{ asset('assets/images/update-17-06-2023/services/services-7-4.png') }}" alt="">
                        </div>
                        <div class="services-seven__hover-box">
                            <div class="services-seven__hover-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/services/services-seven-hover-bg-4.jpg') }}')">
                            </div>
                            <h3 class="services-seven__hover-title"><a href="{{ route('homeInsurance') }}">Jig & Fixtures</a>
                            </h3>
                            <a href="{{ route('homeInsurance') }}" class="services-seven__btn-two thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Seven Single End-->
                <!--Services Seven Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-seven__single">
                        <h3 class="services-seven__title"><a href="{{ route('travelInsurance') }}">Engineering Manufacturing</a></h3>
                        <p class="services-seven__text">Lorem ipsum dolor amet, consectetur <br>
                            adipiscing elit, sed eiusmod tempor <br>
                            incididunt labore..</p>
                        <a href="{{ route('lifeInsurance') }}" class="services-seven__btn thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        <div class="services-seven__img">
                            <img src="{{ asset('assets/images/update-17-06-2023/services/services-7-5.png') }}" alt="">
                        </div>
                        <div class="services-seven__hover-box">
                            <div class="services-seven__hover-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/services/services-seven-hover-bg-5.jpg') }}')">
                            </div>
                            <h3 class="services-seven__hover-title"><a href="{{ route('travelInsurance') }}">Travel
                                    Insurance</a>
                            </h3>
                            <a href="{{ route('travelInsurance') }}" class="services-seven__btn-two thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Seven Single End-->
                <!--Services Seven Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="services-seven__single">
                        <h3 class="services-seven__title"><a href="{{ route('travelInsurance') }}">Special Purpose Machine</a>
                        </h3>
                        <p class="services-seven__text">Lorem ipsum dolor amet, consectetur <br>
                            adipiscing elit, sed eiusmod tempor <br>
                            incididunt labore..</p>
                        <a href="{{ route('lifeInsurance') }}" class="services-seven__btn thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        <div class="services-seven__img">
                            <img src="{{ asset('assets/images/update-17-06-2023/services/services-7-6.png') }}" alt="">
                        </div>
                        <div class="services-seven__hover-box">
                            <div class="services-seven__hover-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/services/services-seven-hover-bg-6.jpg') }}')">
                            </div>
                            <h3 class="services-seven__hover-title"><a href="{{ route('businessInsurance') }}">Business
                                    Insurance</a>
                            </h3>
                            <a href="{{ route('businessInsurance') }}" class="services-seven__btn-two thm-btn-four">Details<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Seven Single End-->
            </div>
        </div>
    </section>
    <!--Services Seven End-->

    <!--Team Six Start-->
    <section class="team-six">
        <div class="container">
            <div class="section-title-five text-center">
                <span class="section-title-five__tagline">Our Team</span>
                <h2 class="section-title-five__title">Meet Our Experienced Team</h2>
            </div>
            <div class="row">
                <!--Team Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-six__single">
                        <div class="team-six__img-box">
                            <div class="team-six__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/team/team-6-1.jpg') }}" alt="">
                                <div class="team-six__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-six__content">
                            <h3 class="team-six__name"><a href="{{ route('teamDetails') }}">Bob Thomas</a></h3>
                            <p class="team-six__sub-title">DESIGNER</p>
                            <div class="team-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/team-six-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Six Single End-->
                <!--Team Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-six__single">
                        <div class="team-six__img-box">
                            <div class="team-six__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/team/team-6-2.jpg') }}" alt="">
                                <div class="team-six__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-six__content">
                            <h3 class="team-six__name"><a href="{{ route('teamDetails') }}">Nency Thomas</a></h3>
                            <p class="team-six__sub-title">DESIGNER</p>
                            <div class="team-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/team-six-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Six Single End-->
                <!--Team Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-six__single">
                        <div class="team-six__img-box">
                            <div class="team-six__img">
                                <img src="{{ asset('assets/images/update-17-06-2023/team/team-6-3.jpg') }}" alt="">
                                <div class="team-six__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-six__content">
                            <h3 class="team-six__name"><a href="{{ route('teamDetails') }}">Bob Nicols</a></h3>
                            <p class="team-six__sub-title">DESIGNER</p>
                            <div class="team-six__shape-1">
                                <img src="{{ asset('assets/images/update-17-06-2023/shapes/team-six-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Six Single End-->
            </div>
        </div>
    </section>
    <!--Team Six End-->

    <!--Counter Four Start-->
    <section class="counter-four">
        <div class="counter-four__bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/counter-four-bg.jpg') }}')"></div>
        <div class="container">
            <div class="counter-four__inner">
                <ul class="counter-four__count-box list-unstyled">
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-agreement"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="876" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Insurance Policies</p>
                    </li>
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-group"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="223" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Happy Clients</p>
                    </li>
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-ring"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="96" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Award Winning</p>
                    </li>
                    <li>
                        <div class="counter-four__shape-1">
                            <img src="{{ asset('assets/images/update-17-06-2023/shapes/counter-four-shape-1.png') }}" alt="">
                        </div>
                        <div class="counter-four__icon">
                            <span class="icon-insurance-2"></span>
                        </div>
                        <div class="counter-four__count count-box">
                            <h3 class="count-text" data-stop="786" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-four__text">Skilled Contractors</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter Four End-->

    <!--Why Choose Six Start-->
    <section class="why-choose-six">
        <div class="container">
            <div class="why-choose-six__top">
                <div class="section-title-five text-left">
                    <span class="section-title-five__tagline">WHY YOU CHOOSE US</span>
                    <h2 class="section-title-five__title">Why Always Choose Insures!</h2>
                </div>
                <div class="why-choose-six__btn-box">
                    <a href="{{ route('about') }}" class="why-choose-six__btn thm-btn-four">View More<span class="fas fa-arrow-right"></span></a>
                </div>
            </div>
            <div class="row">
                <!--Why Choose Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="why-choose-six__single">
                        <div class="why-choose-six__single-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/why-choose-six-single-bg.jpg') }}')">
                        </div>
                        <div class="why-choose-six__content">
                            <div class="why-choose-six__icon">
                                <span class="icon-cashback"></span>
                            </div>
                            <h4 class="why-choose-six__title"><a href="{{ route('about') }}">Anytime Money Back</a></h4>
                            <p class="why-choose-six__text">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore dolore</p>
                        </div>
                    </div>
                </div>
                <!--Why Choose Six Single End-->
                <!--Why Choose Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="why-choose-six__single">
                        <div class="why-choose-six__single-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/why-choose-six-single-bg.jpg') }}')">
                        </div>
                        <div class="why-choose-six__content">
                            <div class="why-choose-six__icon">
                                <span class="icon-insurance"></span>
                            </div>
                            <h4 class="why-choose-six__title"><a href="{{ route('about') }}">100% Safe Money</a></h4>
                            <p class="why-choose-six__text">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore dolore</p>
                        </div>
                    </div>
                </div>
                <!--Why Choose Six Single End-->
                <!--Why Choose Six Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="why-choose-six__single">
                        <div class="why-choose-six__single-bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/why-choose-six-single-bg.jpg') }}')">
                        </div>
                        <div class="why-choose-six__content">
                            <div class="why-choose-six__icon">
                                <span class="icon-profits"></span>
                            </div>
                            <h4 class="why-choose-six__title"><a href="{{ route('about') }}">Fast Process</a></h4>
                            <p class="why-choose-six__text">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore dolore</p>
                        </div>
                    </div>
                </div>
                <!--Why Choose Six Single End-->
            </div>
        </div>
    </section>
    <!--Why Choose Six End-->

    <!--Testimonial Seven Start-->
    <section class="testimonial-seven">
        <div class="testimonial-seven__sec-img float-bob-x">
            <img src="{{ asset('assets/images/update-17-06-2023/testimonial/testimonial-seven-sec-img-1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testimonial-seven__left">
                        <h3 class="testimonial-seven__title">OUR LOVELY CUSTOMER</h3>
                        <div class="testimonial-seven__carousel-outer">
                            <div class="testimonial-seven__quote">
                                <img src="{{ asset('assets/images/update-17-06-2023/icon/testimonial-seven-quote-icon.png') }}" alt="">
                            </div>
                            <div class="testimonial-seven__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
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
                                    "1320": {
                                        "items": 1
                                    }
                                }
                            }'>
                                <!--Testimonial Seven Single Start-->
                                <div class="item">
                                    <div class="testimonial-seven__single">
                                        <p class="testimonial-seven__text">“Galley of type and scrambled it to make
                                            type
                                            specimen
                                            book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting chunks first true
                                            generator on the Internet.</p>
                                        <div class="testimonial-seven__client">
                                            <h4 class="testimonial-seven__client-name">Remedios Linared</h4>
                                            <p class="testimonial-seven__client-sub-title">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Seven Single End-->
                                <!--Testimonial Seven Single Start-->
                                <div class="item">
                                    <div class="testimonial-seven__single">
                                        <p class="testimonial-seven__text">“Galley of type and scrambled it to make
                                            type
                                            specimen
                                            book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting chunks first true
                                            generator on the Internet.</p>
                                        <div class="testimonial-seven__client">
                                            <h4 class="testimonial-seven__client-name">Jimmy Nisim</h4>
                                            <p class="testimonial-seven__client-sub-title">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Seven Single End-->
                                <!--Testimonial Seven Single Start-->
                                <div class="item">
                                    <div class="testimonial-seven__single">
                                        <p class="testimonial-seven__text">“Galley of type and scrambled it to make
                                            type
                                            specimen
                                            book. It has survived not only five centuries, but also
                                            the leap into electronic typesetting chunks first true
                                            generator on the Internet.</p>
                                        <div class="testimonial-seven__client">
                                            <h4 class="testimonial-seven__client-name">Luis Allen</h4>
                                            <p class="testimonial-seven__client-sub-title">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial Seven Single End-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="testimonial-seven__right">
                        <div class="testimonial-seven__right-content">
                            <div class="testimonial-seven__shape-1" style="background-image: url('{{ asset('assets/images/update-17-06-2023/shapes/testimonial-seven-shape-1.png') }}')">
                            </div>
                            <div class="testimonial-seven__title-box">
                                <p class="testimonial-seven__sub-title">Commitment In Quality</p>
                                <h3 class="testimonial-seven__title-two">Kmil Quote</h3>
                            </div>
                            <div class="testimonial-seven__main-tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#car-insurance" class="tab-btn active-btn">
                                        <div class="icon-box">
                                            <span class="icon-drive"></span>
                                        </div>
                                    </li>
                                    <li data-tab="#home-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="icon-home"></span>
                                        </div>
                                    </li>
                                    <li data-tab="#health-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="icon-heart-beat"></span>
                                        </div>
                                    </li>
                                    <li data-tab="#book-insurance" class="tab-btn">
                                        <div class="icon-box">
                                            <span class="icon-folder"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="car-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Stamping Parts</option>
                                                            <option value="2">Industrial Parts  & Fabrication Project</option>
                                                            <option value="3">Jig & Fixtures</option>
                                                            <option value="3">Sheet Metal Processing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit" class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="home-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Stamping Parts</option>
                                                            <option value="2">Industrial Parts  & Fabrication Project</option>
                                                            <option value="3">Jig & Fixtures</option>
                                                            <option value="3">Sheet Metal Processing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit" class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="health-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Stamping Parts</option>
                                                            <option value="2">Industrial Parts  & Fabrication Project</option>
                                                            <option value="3">Jig & Fixtures</option>
                                                            <option value="3">Sheet Metal Processing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit" class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab" id="book-insurance">
                                        <div class="testimonial-seven__content">
                                            <form class="testimonial-seven__form">
                                                <div class="testimonial-seven__content-box">
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Full Name" name="name">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="email" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <input type="text" placeholder="Phone" name="phone">
                                                    </div>
                                                    <div class="testimonial-seven__input-box">
                                                        <select class="selectpicker" aria-label="Default select example">
                                                            <option selected>Select type of insurance
                                                            </option>
                                                            <option value="1">Stamping Parts</option>
                                                            <option value="2">Industrial Parts  & Fabrication Project</option>
                                                            <option value="3">Jig & Fixtures</option>
                                                            <option value="3">Sheet Metal Processing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__progress">
                                                    <h4 class="testimonial-seven__progress-title">Client
                                                        Satisfactions</h4>
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="78%">
                                                            <div class="count-text">78%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-seven__content-bottom">
                                                    <button type="submit" class="thm-btn-three testimonial-seven__btn">Submit
                                                        Now <span class="fas fa-arrow-right"></span></button>
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
    </section>
    <!--Testimonial Seven End-->

    <!--Process Two Start-->
    <section class="process-two">
        <div class="container">
            <div class="section-title-five text-center">
                <span class="section-title-five__tagline">WHY YOU CHOOSE US</span>
                <h2 class="section-title-five__title">Why Always Choose Insures!</h2>
            </div>
            <div class="process-two__inner">
                <ul class="process-two__list list-unstyled">
                    <li>
                        <div class="process-two__single">
                            <div class="process-two__arrow">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <div class="process-two__img-border">
                                <div class="process-two__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/process-2-1.jpg') }}" alt="">
                                    <div class="process-two__count"></div>
                                </div>
                            </div>
                            <h3 class="process-two__title">Get A Quotetation</h3>
                            <p class="process-two__text">Many desktop publishing packages and web <br> page editors
                                now
                                use Lorem Ipsum</p>
                            <div class="process-two__btn">
                                <a href="{{ route('about') }}"><span class="fa fa-arrow-right"></span>view details</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="process-two__single">
                            <div class="process-two__arrow">
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                            <div class="process-two__img-border">
                                <div class="process-two__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/process-2-2.jpg') }}" alt="">
                                    <div class="process-two__count"></div>
                                </div>
                            </div>
                            <h3 class="process-two__title">Complete The Aplication</h3>
                            <p class="process-two__text">Many desktop publishing packages and web <br> page editors
                                now
                                use Lorem Ipsum</p>
                            <div class="process-two__btn">
                                <a href="{{ route('about') }}"><span class="fa fa-arrow-right"></span>view details</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="process-two__single">
                            <div class="process-two__img-border">
                                <div class="process-two__img">
                                    <img src="{{ asset('assets/images/update-17-06-2023/resources/process-2-3.jpg') }}" alt="">
                                    <div class="process-two__count"></div>
                                </div>
                            </div>
                            <h3 class="process-two__title">Get Kmil & Covarage</h3>
                            <p class="process-two__text">Many desktop publishing packages and web <br>page editors
                                now
                                use Lorem Ipsum</p>
                            <div class="process-two__btn">
                                <a href="{{ route('about') }}"><span class="fa fa-arrow-right"></span>view details</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Process Two End-->

    <!--CTA Five Start-->
    <section class="cta-five cta-six">
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
                        <button type="submit" class="cta-five__subscribe-btn thm-btn-four">Subscribe
                            Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--CTA Five End-->

    <!--Site Footer Four Start-->
    <footer class="site-footer-four">
        <div class="site-footer-four__bg" style="background-image: url('{{ asset('assets/images/update-17-06-2023/backgrounds/site-footer-four-bg-2.png') }}')">
        </div>
        <div class="container">
            <div class="site-footer-four__top">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget-four__column footer-widget-four__about">
                            <div class="footer-widget-four__logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/update-17-06-2023/resources/footer-logo-three.png') }}" alt=""></a>
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
                            <h3 class="footer-widget-four__title">news</h3>
                            <ul class="footer-widget-four__news-list list-unstyled">
                                <li>
                                    <div class="footer-widget-four__news-img">
                                        <img src="{{ asset('assets/images/update-17-06-2023/resources/footer-widget-four-news-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3><a href="{{ route('newsDetails') }}">The 8 best things about
                                                insurance</a></h3>
                                        <p><span class="fa fa-calendar-alt"></span>05-09-2023</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget-four__news-img">
                                        <img src="{{ asset('assets/images/update-17-06-2023/resources/footer-widget-four-news-img-2.jpg') }}" alt="">
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
                            <p class="site-footer-four__bottom-text">© All Copyright 2025 by <a href="#">Jerry Schwarz</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer Four End-->

@endsection 
