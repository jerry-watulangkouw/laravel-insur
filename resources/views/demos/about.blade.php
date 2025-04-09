@extends('layout.layout')

@php
    $headTitle = 'About';
    $title='ABOUT';
    $subTitle = 'About us';
    $script = '<script src="' . asset('assets/js/insur.js') . '"></script>'; 
@endphp

@section('content')

        <!--About Four Start-->
        <section class="about-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-four__img">
                                    <img src="{{ asset('assets/images/resources/about-four-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-four__img-two">
                                    <img src="{{ asset('assets/images/resources/about-four-img-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
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
                                <h2 class="section-title__title">Commitment You Can Count On</h2>
                            </div>
                            <p class="about-four__text-1">PT. Kurnia Mustika Indah Lestari</p>
                            <p class="about-four__text-2">offers decades of experience in processing the metallurgy. Our experts work with you to custom precision parts with developing engineering designs, dies marking, stamping parts, special purposes machine, fabrications for constructions and manufacturing. For over 30 years, we have delivered excellence quality of services and products to ensure our customers’ satisfactions. Supported with the latest machines and our engineering experts, we have gained a great reputations in Indonesia and internationally. With enhanced machines and technologies, PT. Kurnia Mustika Indah Lestari commits to be leader in Quality, Delivery and giving Professional Services in crafting solutions together with our customers and clients.</p>
                            <div class="about-four__founder">
                                <div class="about-four__founder-img">
                                    <img src="{{ asset('assets/images/resources/about-four-founder-img.jpg') }}" alt="">
                                </div>
                                <div class="about-four__founder-content">
                                    <h3 class="about-four__founder-name">Rudiyanto Boen</h3>
                                    <p class="about-four__founder-sub-title">CEO of Kmil</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

        <!--Brand One Start-->
        <x-brandone/>
        <!--Brand One End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="testimonial-two-shape-1"
                style="background-image: url('{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}')"></div>
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
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel"
                                data-owl-options='{
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
                                                <p class="testimonial-two__founder-text">Call to Our Team</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                        alt="">
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
                                                <h5 class="testimonial-two__client-name">Ilusio Melani Lim</h5>
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
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                        alt="">
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
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                        alt="">
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
                                                <p class="testimonial-two__founder-text">Director of Operasion</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                        alt="">
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
                                                <p class="testimonial-two__founder-text">Call to Our Team</p>
                                                <div class="testimonial-two__founder-shape">
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                        alt="">
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
                                                <h5 class="testimonial-two__client-name">Ilusio Melani Lim</h5>
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
                                                    <img src="{{ asset('assets/images/shapes/testimonial-two-founder-shape.png') }}"
                                                        alt="">
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

        <!--CTA One Start-->
        <section class="cta-one cta-four">
            <div class="cta-four-shape-1 float-bob-x">
                <img src="{{ asset('assets/images/shapes/cta-four-shape-1.png') }}" alt="">
            </div>
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

        <!--Team One Start-->
        <section class="team-one team-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-sub-title-box">
                        <p class="section-sub-title">Our experts</p>
                        <div class="section-title-shape-1">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">
                        </div>
                        <div class="section-title-shape-2">
                            <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}" alt="">
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
            </div>
        </section>
        <!--Team One End-->

@endsection