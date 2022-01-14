@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Profile</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="{{route('home')}}" class="text-custom-white">Home</a></li>
                        <li class="active fw-500"> Profile </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                <h6 class="d-none">1</h6>
                <aside class="col-lg-3">
                    <div class="sidebar_wrap mb-md-80">
                        @include('home.user_menu')
                    </div>
                </aside>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-details bx-wrapper bg-custom-white padding-20">

                            @include('profile.show')
                            </div>
                        </div>
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="blog-details bx-wrapper bg-custom-white padding-20">--}}
{{--                                <article class="post p-relative">--}}
{{--                                    <div class="post-wrapper">--}}

{{--                                        <div class="blog-meta bg-custom-white">--}}
{{--                                            <div class="post-meta-box mb-xl-20">--}}
{{--                                                <div class="post-categories"><a href="#" class="text-custom-black fs-18">Travel</a></div>--}}
{{--                                                <div class="post-meta"><a href="#" class="text-light-dark mr-2" tabindex="-1"><span--}}
{{--                                                            class="text-custom-blue"><i class="fas fa-comment"></i></span>20 </a><a href="#"--}}
{{--                                                                                                                                    class="text-light-dark mr-2" tabindex="-1"><span class="text-custom-blue"><i--}}
{{--                                                                class="fas fa-thumbs-up"></i></span>50 </a><a href="#" class="text-light-dark mr-2"--}}
{{--                                                                                                              tabindex="-1"><span class="text-custom-blue"><i class="fas fa-eye"></i></span>500 </a>--}}
{{--                                                    <div class="post-date">--}}
{{--                                                        <div class="text-custom-white bg-custom-blue fw-600 date">20</div>--}}
{{--                                                        <div class="text-custom-white year">Jan 2019</div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-heading p-relative">--}}
{{--                                                <h2><a href="#" class="text-custom-black">Various versions have evole over the years</a></h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-author mb-xl-20">--}}
{{--                                                <div class="author-img animate-img"><a href="blog-details.html"><img--}}
{{--                                                            src="assets/images/blog/author-img.png" class="rounded-circle" alt="#"></a></div><span--}}
{{--                                                    class="text-theme fs-14">By <a href="blog-details.html"--}}
{{--                                                                                   class="text-custom-black fw-500">Admin</a></span>--}}
{{--                                            </div>--}}
{{--                                            <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod--}}
{{--                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud--}}
{{--                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
{{--                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>--}}
{{--                                            <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod--}}
{{--                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud--}}
{{--                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
{{--                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint--}}
{{--                                                occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                            </p>--}}
{{--                                            <div class="quote-box mb-xl-20">--}}
{{--                                                <blockquote class="bg-light-white"><span><i--}}
{{--                                                            class="fa fa-quote-left text-custom-white"></i></span>--}}
{{--                                                    <p class="text-custom-black fs-16 no-margin">Lorem ipsum dolor sit amet,consectetur adipiscing--}}
{{--                                                        elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
{{--                                                        veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
{{--                                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla--}}
{{--                                                        pariatur.</p>--}}
{{--                                                </blockquote>--}}
{{--                                            </div>--}}
{{--                                            <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod--}}
{{--                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud--}}
{{--                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
{{--                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>--}}
{{--                                            <p class="text-light-dark no-margin">Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do--}}
{{--                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud--}}
{{--                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in--}}
{{--                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint--}}
{{--                                                occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </article><!-- article -->--}}
{{--                                <hr><!-- tags & social -->--}}
{{--                                <div class="post-details-tags-social mb-xl-20">--}}
{{--                                    <div class="row no-margin">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="tags-box"><span class="fs-18 text-light-dark"><i class="fas fa-tags"></i></span>--}}
{{--                                                <div class="tags"><a href="#">Travel</a><a href="#">Tour</a><a href="#">Agent</a></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="social-media-box">--}}
{{--                                                <ul class="custom-flex">--}}
{{--                                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a><span--}}
{{--                                                            class="social-number bg-light-white">500</span></li>--}}
{{--                                                    <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a><span--}}
{{--                                                            class="social-number bg-light-white">20</span></li>--}}
{{--                                                    <li><a href="#" class="fb"><i class="fab fa-youtube"></i></a><span--}}
{{--                                                            class="social-number bg-light-white">46</span></li>--}}
{{--                                                    <li><a href="#" class="bg-custom-blue"><i class="fas fa-share-alt"></i></a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- tags & social -->--}}
{{--                                <!-- post author -->--}}
{{--                                <div class="post-author bg-light-white padding-15 mb-xl-20">--}}
{{--                                    <div class="author-img animate-img mb-sm-20"><a href="#"><img src="assets/images/blog/author-img.png"--}}
{{--                                                                                                  class="image-fit" alt="author-img"></a></div>--}}
{{--                                    <div class="author-caption">--}}
{{--                                        <h5 class="fw-600"><a href="#" class="text-custom-black">Anna Wright</a><span--}}
{{--                                                class="text-custom-blue fs-16 ml-2"><i class="fab fa-twitter"></i></span></h5><a href="#"--}}
{{--                                                                                                                                 class="authorpost text-custom-blue fw-600">Most article by this author</a>--}}
{{--                                        <p class="text-light-white">Lorem ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod--}}
{{--                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud--}}
{{--                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                    </div>--}}
{{--                                </div><!-- post author -->--}}
{{--                                <!-- post pagination -->--}}
{{--                                <div class="pagination-btn">--}}
{{--                                    <nav>--}}
{{--                                        <ul class="pagination">--}}
{{--                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </nav>--}}
{{--                                </div><!-- post pagination -->--}}
{{--                                <!-- comments -->--}}
{{--                                <div class="comment-box section-padding-top p-relative">--}}
{{--                                    <div id="comment-box">--}}
{{--                                        <h4 class="text-custom-black fw-600">Reviews [4]</h4>--}}
{{--                                        <ul class="comments custom">--}}
{{--                                            <li class="comment">--}}
{{--                                                <article>--}}
{{--                                                    <div class="comment-avatar"><img src="assets/images/blog/comment_1.jpg" class="rounded-circle"--}}
{{--                                                                                     alt="comment"></div>--}}
{{--                                                    <div class="comment-content">--}}
{{--                                                        <div class="comment-meta">--}}
{{--                                                            <div class="comment-meta-header">--}}
{{--                                                                <h5 class="text-custom-black fw-600 author mb-3">Rosalina Pong</h5>--}}
{{--                                                                <div class="post-date"><a href="blog-details.html"--}}
{{--                                                                                          class="date bg-custom-blue text-custom-white">25 Dec 2019</a></div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-meta-reply"><a href="#"--}}
{{--                                                                                               class="comment-reply-link btn-first btn-submit"><i class="fas fa-reply"></i></a></div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment">--}}
{{--                                                            <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do--}}
{{--                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis--}}
{{--                                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                            </li>--}}
{{--                                            <li class="comment">--}}
{{--                                                <article>--}}
{{--                                                    <div class="comment-avatar"><img src="assets/images/blog/comment_2.jpg" class="rounded-circle"--}}
{{--                                                                                     alt="comment"></div>--}}
{{--                                                    <div class="comment-content">--}}
{{--                                                        <div class="comment-meta">--}}
{{--                                                            <div class="comment-meta-header">--}}
{{--                                                                <h5 class="text-custom-black fw-600 author mb-3">Brian Wright</h5>--}}
{{--                                                                <div class="post-date"><a href="blog-details.html"--}}
{{--                                                                                          class="date bg-custom-blue text-custom-white">30 Nov 2019</a></div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-meta-reply"><a href="#"--}}
{{--                                                                                               class="comment-reply-link btn-first btn-submit"><i class="fas fa-reply"></i></a></div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment">--}}
{{--                                                            <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do--}}
{{--                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis--}}
{{--                                                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </article>--}}
{{--                                                <ul class="children">--}}
{{--                                                    <li class="comment">--}}
{{--                                                        <article>--}}
{{--                                                            <div class="comment-avatar"><img src="assets/images/blog/comment_3.jpg"--}}
{{--                                                                                             class="rounded-circle" alt="comment"></div>--}}
{{--                                                            <div class="comment-content">--}}
{{--                                                                <div class="comment-meta">--}}
{{--                                                                    <div class="comment-meta-header">--}}
{{--                                                                        <h5 class="text-custom-black fw-600 author mb-3">Sarah Wright</h5>--}}
{{--                                                                        <div class="post-date"><a href="blog-details.html"--}}
{{--                                                                                                  class="date bg-custom-blue text-custom-white">30 Nov 2019</a></div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-meta-reply"><a href="#"--}}
{{--                                                                                                       class="comment-reply-link btn-first btn-submit"><i class="fas fa-reply"></i></a>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="comment">--}}
{{--                                                                    <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed--}}
{{--                                                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
{{--                                                                        veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--                                                                        consequat.</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </article>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- comments -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </section>



    <section class="section-padding bg-light-white contact-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-box mb-md-40"> <i class="flaticon-placeholder"></i>
                        <h6 class="text-theme fw-600">13th Street. 47 W 13th St,<br>
                            New York, NY 10011, USA</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-box mb-md-40"> <i class="flaticon-telephone-1"></i>
                        <h6 class="text-theme fw-600"><a href="#" class="text-theme">(+347) 123 4567 890</a><br>
                            Mon-Sat 9:00am-5:00pm</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-box"> <i class="flaticon-envelope"></i>
                        <h6 class="text-theme fw-600"><a href="#" class="text-theme">info@domain.com</a><br>
                            24 X 7 online support</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- End Contact top -->
<!-- Start Footer -->
