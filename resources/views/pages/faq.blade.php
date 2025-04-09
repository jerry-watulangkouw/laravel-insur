@extends('layout.layout')

@php
    $headTitle = 'FAQ';
    $title='FAQS';
    $subTitle = 'FAQS';
    $counterone = 'false';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>'; 
@endphp

@section('content')

        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="container">
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

        <!--Contact Page Start-->
        <section class="contact-page contact-page--two">
            <div class="contact-page-two-shape-1"
                style="background-image: url('{{ asset('assets/images/shapes/contact-page-two-shape-1.png') }}')"></div>
            <div class="contact-page-two-shape-2"
                style="background-image: url('{{ asset('assets/images/shapes/contact-page-two-shape-2.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Contact us</p>
                                    <div class="section-title-shape-1">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Feel free to get in touch with experts</h2>
                            </div>
                            <div class="contact-page__call-email">
                                <div class="contact-page__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4>
                                       <a href="tel:9200368090" class="contact-page__call-number">0813-1629-7120</a>
                                        <a href="mailto:info@kmil.co.id"
                                            class="contact-page__email">info@kmil.co.id</a>
                                    </h4>
                                </div>
                            </div>
                            <p class="contact-page__location-text">Jl. Cendrawasih, Cengkareng, <br> Jakarta, Indonesia</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form action="assets/inc/sendemail" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

@endsection 