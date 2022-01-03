@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Contact Us</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="{{route('home.index')}}" class="text-custom-white">Home</a></li>
                        <li class="fw-500"><a href="{{route('user_profile')}}" class="text-custom-white">Profile</a></li>
                        <li class="active fw-500"> Comments Edit </li>
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
                                <article class="post p-relative">
                                    <div class="post-wrapper">
                                        <div class="comment-respond" id="respond">
                                            <h4 class="text-custom-black fw-600">Leave Comment</h4>
                                            <form action="{{route("user_comment")}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="text-custom-black fw-500 fs-14">Comment</label>
                                                            <textarea rows="4" name="comment" class="form-control form-control-custom"
                                                                      placeholder="Comment"></textarea>
                                                            <div class="rating" >
                                                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                                {{--                                                                            <label style="color: #0b0b0b;margin-right: 75px;font-size:xx-large" > Rating </label>--}}
                                                            </div>

                                                        </div>
                                                        <button type="submit" class="btn-first btn-submit">Leave Comment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </article><!-- article -->
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
{{--                                        <div class="comment-respond" id="respond">--}}
{{--                                            <h4 class="text-custom-black fw-600">Leave Comment</h4>--}}
{{--                                            <form>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group"><label class="text-custom-black fw-500 fs-14">Full--}}
{{--                                                                Name</label><input type="text" name="#" class="form-control form-control-custom"--}}
{{--                                                                                   placeholder="Full Name"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="form-group"><label class="text-custom-black fw-500 fs-14">Email I'd</label>--}}
{{--                                                            <input type="email" name="#" class="form-control form-control-custom"--}}
{{--                                                                   placeholder="Email I'd">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="text-custom-black fw-500 fs-14">Comment</label>--}}
{{--                                                            <textarea rows="4" name="#" class="form-control form-control-custom"--}}
{{--                                                                      placeholder="Comment"></textarea>--}}
{{--                                                        </div>--}}
{{--                                                        <button type="submit" class="btn-first btn-submit">Leave Comment</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- comments -->
                            </div>
                        </div>
                    </div>
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
