@extends('layout.layout')

@php
$headTitle = 'News Details';
$title = 'News Details';
$subTitle = 'News details';
$counterone = 'false';
$script = '<script src="' . asset('assets/js/insur.js') . '"></script>';
@endphp

@section('content')

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="{{ asset('assets/images/blog/news-details-img-1.jpg') }}" alt="">
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-calendar"></i> 15 March, 2023 </a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">Certificate Handover Ceremony by TUVNORD Indonesia</h3>
                                <p class="news-details__text-1">There are many variations of passages of Lorem Ipsum
                                    available, but majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin
                                    laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis.
                                    Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque
                                    nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam
                                    condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit
                                    non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit
                                    nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor.
                                    Nulla a erat et orci mattis auctor.</p>
                                <p class="news-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                    nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                            </div>
                            <div class="news-details__bottom">
                                <p class="news-details__tags">
                                    <span>Tags</span>
                                    <a href="#">Business Line</a>
                                    <a href="#">Policies</a>
                                </p>
                                <div class="news-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="blgo-details__pagenation-box">
                                <ul class="list-unstyled news-details__pagenation">
                                    <li>We proudly protect our loved ones life</li>
                                    <li>Survived not only five centuries</li>
                                </ul>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">2 comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Arif Rahman</h3>
                                        <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                            Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                            sollicitudin at euismod.</p>
                                        <a href="{{ route('newsDetails') }}" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah Albert</h3>
                                        <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                            Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                            sollicitudin at euismod.</p>
                                        <a href="{{ route('newsDetails') }}" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a comment</h3>
                                <form action="assets/inc/sendemail') }}" class="comment-one__form contact-form-validated"
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
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a comment"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Submit
                                                    comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-user-circle"></i> by Admin</span>
                                                <a href="{{ route('newsDetails') }}">Get tips to get quick
                                                    Industrial Parts</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-user-circle"></i> by Admin</span>
                                                <a href="{{ route('newsDetails') }}">Promoting the Rights of Children</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-3.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-user-circle"></i> by Admin</span>
                                                <a href="{{ route('newsDetails') }}">Bring to the table win-win survival</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="{{ route('newsDetails') }}">Industrial Parts <span
                                                class="fas fa-angle-double-right"></span></a></li>
                                    <li class="active"><a href="{{ route('newsDetails') }}">Health <span
                                                class="fas fa-angle-double-right"></span></a></li>
                                    <li><a href="{{ route('newsDetails') }}">Policies <span
                                                class="fas fa-angle-double-right"></span></a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}">Payments <span
                                                class="fas fa-angle-double-right"></span></a></li>
                                    <li><a href="{{ route('newsDetails') }}">Jig & Fixtures <span
                                                class="fas fa-angle-double-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Business Line</a>
                                    <a href="#">Policies</a>
                                    <a href="#">Financial</a>
                                    <a href="#">Sheet Metal Processing</a>
                                    <a href="#">Money</a>
                                </div>
                            </div>
                            <div class="sidebar__single sidebar__comments">
                                <h3 class="sidebar__title">Comments</h3>
                                <ul class="sidebar__comments-list list-unstyled">
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p><span>John Doe</span> on Template:</p>
                                            <h5>Comments</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p> <span>John Doe</span> on Template:</p>
                                            <h5>Comments</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->

@endsection 