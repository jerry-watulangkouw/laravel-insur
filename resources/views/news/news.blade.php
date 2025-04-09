@extends('layout.layout')

@php
$headTitle = 'News';
$title = 'news';
$subTitle = 'Latest news';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
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
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
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
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-4.jpg') }}" alt="">
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
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">It is a long established fact
                                        that a reader</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-5.jpg') }}" alt="">
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
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">There are many variations of
                                        passages of Lorem</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-6.jpg') }}" alt="">
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
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Contrary to popular belief,
                                        Lorem Ipsum text</a></h3>
                                <p class="news-one__text">Aliquam viverra arcu. Donec aliquet blandit enim feugiat
                                    mattis.</p>
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

@endsection 