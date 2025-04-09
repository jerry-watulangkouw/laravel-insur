
@extends('layout.layout')

@php
$headTitle = 'Insurance 02';
$title = 'Kmil Two';
$subTitle = 'Kmil Two';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Insurance Page Two Start-->
        <section class="insurance-page-two">
            <div class="container">
                <div class="row">
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-drive"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Stamping Parts</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-family"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Industrial Parts</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-home"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Jig & Fixtures</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-heart-beat"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Sheet Metal Processing</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-briefcase"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Special Purpose Machine</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-fire"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Cutting Laser</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-ring"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Precision Parts</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                    <!--Services Two Single Start-->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services-two__single">
                            <div class="services-two__icon-box">
                                <div class="services-two__icon">
                                    <span class="icon-plane"></span>
                                </div>
                            </div>
                            <h3 class="services-two__title"><a href="#">Engineering Manufacturing</a></h3>
                            <p class="services-two__text">Lorem ipsum dolor sit amet, sed consectetur adipiscing rutrum
                                metus et elit.</p>
                        </div>
                    </div>
                    <!--Services Two Single End-->
                </div>
            </div>
        </section>
        <!--Insurance Page Two End-->

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