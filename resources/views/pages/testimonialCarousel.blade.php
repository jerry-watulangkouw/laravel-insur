@extends('layout.layout')

@php
    $headTitle = 'Testimonial Carousel';
    $title='Testimonials';
    $subTitle = 'Testimonials carousel';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--Testimonial Page Start-->
        <section class="testimonial-carousel-page">
            <div class="container">
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-carousel__box carousel-dot-style"
                    data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
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
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
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
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
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
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
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
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
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
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
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
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
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
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
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
                                            <p class="testimonial-one__client-sub-title">Marketing</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
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
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-5.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
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
                                            <h3 class="testimonial-one__client-name">Rudiyanto Boen</h3>
                                            <p class="testimonial-one__client-sub-title">CEO of Kmil</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
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
                                        <img src="{{ asset('assets/images/testimonial/testimonial-1-6.jpg') }}" alt="">
                                        <div class="testimonial-one__quote">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-quote.png') }}" alt="">
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
                                            <h3 class="testimonial-one__client-name">Ilusion Melani Lim</h3>
                                            <p class="testimonial-one__client-sub-title">Top Management</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Pellentesque habitant morbi tristique senectus netus et
                                    malesuada fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit enim
                                    feugiat mattis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Page End-->

@endsection 