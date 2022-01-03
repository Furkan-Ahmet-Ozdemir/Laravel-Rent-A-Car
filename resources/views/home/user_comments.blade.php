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
                        <li class="active fw-500"> Comments </li>
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
                                            <div class="content-wrapper">

                                                <div class="page-header">
                                                    <h3 class="page-title"> Comments </h3>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Comment</th>
                                                        <th>Car Id</th>
                                                        <th>User Id</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach(  $datalist as $rs)
                                                        <tr>
                                                            <td>{{$rs->comment}}</td>
                                                            <td>{{$rs->car_id}}</td>
                                                            <td>{{$rs->user_id}}</td>
                                                            <td> <a href="">{{$rs->status}}</a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
{{--                                            <form action="{{route("user_comment")}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label class="text-custom-black fw-500 fs-14">Comment</label>--}}
{{--                                                            <textarea rows="4" name="comment" class="form-control form-control-custom"--}}
{{--                                                                      placeholder="Comment"></textarea>--}}
{{--                                                            <div class="rating" >--}}
{{--                                                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>--}}
{{--                                                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>--}}
{{--                                                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>--}}
{{--                                                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>--}}
{{--                                                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>--}}
{{--                                                                --}}{{--                                                                            <label style="color: #0b0b0b;margin-right: 75px;font-size:xx-large" > Rating </label>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                        <button type="submit" class="btn-first btn-submit">Leave Comment</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
                                        </div>
                                    </div>
                                </article>

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
