@extends('layout.layout')

@php
$headTitle = 'Industrial Parts';
$title = 'Insurance';
$subTitle = 'Kmil Three';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Why Choose Two Start-->
        <section class="why-choose-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">insurance beenfits</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Why is Sheet Metal Processing
                                    important?</h2>
                            </div>
                            <p class="why-choose-two__text">Morbi viverra diam nec tellus semper, consequat hendrerit
                                quam volutpat. Aliquam convallis feugiat orci, in tincidunt nisl iaculis nec. Aenean
                                laoreet, nulla a ornare sollicitudin, sapien justo volutpat quam, a facilisis tortor sem
                                consectetur risus. Nam nec nulla dui. Vivamus ac tortor sit amet ex facilisis tincidunt
                                varius nibh ut nisl euismod.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__right">
                            <div class="why-choose-two__list-box">
                                <ul class="list-unstyled why-choose-two__list">
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-easy-to-use"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Fast &amp; easy process</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-contract"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Fast &amp; easy process</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-policy"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Control over policy</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Lorem ipsum dolor sit amet,
                                                        sectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-two__single">
                                            <div class="why-choose-two__list-icon">
                                                <span class="icon-fund"></span>
                                            </div>
                                            <div class="why-choose-two__list-title-box">
                                                <div class="why-choose-two__list-title-inner">
                                                    <h3 class="why-choose-two__list-title">Save your money</h3>
                                                </div>
                                                <div class="why-choose-two__list-text-box">
                                                    <p class="why-choose-two__list-text">Lorem ipsum dolor sit amet,
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
        <!--Why Choose Two End-->

        <!--Benefits Two Start-->
        <section class="benefits-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="benefits-two__left">
                            <div class="benefits-two__img">
                                <img src="{{ asset('assets/images/resources/benefits-two-img.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="benefits-two__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">insurance beenfits</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Some of the salient benefits of the product include:
                                </h2>
                            </div>
                            <ul class="list-unstyled benefits-two__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Room Entitlement & Annual Limits.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>In-patient Hospitalization.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Day Care Treatment.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Specialized Investigations.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Pre-Post Hospitalization.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Ambulance Services.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Accidental Out-patient Expense.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Benefits Two End-->

        <!--Feature Four Start-->
        <section class="feature-four">
            <div class="container">
                <div class="feature-four__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="feature-four__top-inner">
                                <div class="feature-four__top-call">
                                    <div class="feature-four__top-call-box">
                                        <div class="feature-four__top-call-number-box float-bob-y">
                                            <a href="tel:9200368090">0813-1629-7120</a>
                                        </div>
                                        <div class="feature-four__top-call-box-two">
                                            <div class="feature-four__top-call-box-three">
                                                <div class="feature-four__top-call-icon">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-four__top-content">
                                    <h3 class="feature-four__top-title">Talk to our insurance experts</h3>
                                    <p class="feature-four__top-text">Nullam eu nibh vitae est tempor molestie id sed
                                        ex. Quisque dignissim maximus ipsum, <br> sed rutrum metus tincidunt et. Sed
                                        eget tincidunt ipsum.</p>
                                    <div class="feature-four__top-btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn feature-four__top-btn">Get Kmil Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-four__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="feature-four__single">
                                <div class="feature-four__single-top">
                                    <div class="feature-four__icon">
                                        <span class="icon-computer"></span>
                                    </div>
                                    <h4 class="feature-four__title">Buy online</h4>
                                </div>
                                <p class="feature-four__text">You to pay through multiple payment options, you can pay
                                    through:</p>
                                <ul class="list-unstyled feature-four__points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Any Visa/Master Credit Card</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Paypal Account</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Online ATM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="feature-four__single">
                                <div class="feature-four__single-top">
                                    <div class="feature-four__icon">
                                        <span class="icon-file"></span>
                                    </div>
                                    <h4 class="feature-four__title">After buying</h4>
                                </div>
                                <p class="feature-four__text">You to pay through multiple payment options, you can pay
                                    through:</p>
                                <ul class="list-unstyled feature-four__points">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Any Visa/Master Credit Card</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Paypal Account</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="text">
                                            <p>Online ATM</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="feature-four__single">
                                <div class="feature-four__single-top">
                                    <div class="feature-four__icon">
                                        <span class="icon-computer"></span>
                                    </div>
                                    <h4 class="feature-four__title">Buy online</h4>
                                </div>
                                <p class="feature-four__text">At UIC, the customer comes first. We always delighted to
                                    hear from you, any time of the day.</p>
                                <ul class="list-unstyled feature-four__points-two">
                                    <li><a href="#">Leave a Feedback</a></li>
                                    <li><a href="#">Contact with Experts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Four End-->

        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">We always help</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                        </div>
                    </div>
                    <h2 class="section-title__title">They frequently asked <br> questions</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__single">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
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
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__single">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
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
        <!--FAQ One End-->

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