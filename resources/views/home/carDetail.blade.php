@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')


@section('boostrap_js1')
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 3vw;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }
    </style>
@endsection

@section('content')
    <!-- Start Subheader -->
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Car Detail</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="index.html" class="text-custom-white">Home</a></li>
                        <li class="fw-500"><a href="cars.html" class="text-custom-white">Cars</a></li>
                        <li class="active fw-500">Car Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Subheader -->
    <!-- Start Listing detail -->
    <section class="section-padding bg-light-white listing-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listing-details-inner  bg-custom-white padding-20">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="detail-slider-for mb-xl-20 magnific-gallery">
                                    <div class="slide-item"><a href="assets/images/cars/car_big.png" class="popup"><img
                                                src="{{url('storage/',$car[0]->image)}}" class="image-fit" alt="img"></a></div>
                                </div>
                                <hr>
                                <div class="listing-meta-sec mb-md-80">
                                    <div class="tabs">
                                        <ul class="custom-flex nav nav-tabs mb-xl-20">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#overview">Overview</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#amenities">Amenities</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="overview">
                                                <div class="tab-inner">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="hotel-type mb-xl-20 bg-light-white padding-10">
                                                                <ul class="custom">
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Car
                                                                            Type</label>{{$car[0]->car_type}}</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Car
                                                                            Name</label>{{$car[0]->title}}</li>
                                                                    <li class="text-light-dark"><label
                                                                            class="no-margin text-custom-blue">Passenger</label>{{$car[0]->passenger}}</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Baggage</label>{{$car[0]->baggage}}
                                                                    </li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Car
                                                                            Features</label>{{$car[0]->status == True ? 'Available' : 'Non-Available'}}</li>
                                                                    <li class="text-light-dark"><label class="no-margin text-custom-blue">Price
                                                                            Per day</label>{{$car[0]->price}} ₺</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="information">
                                                                <h4 class="text-custom-black">Car Rental Information</h4>
                                                                <p class="text-light-dark">{{$car[0]->description}}</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="amenities">
                                                <h4 class="text-custom-black">Amenities</h4>
                                                <p class="text-light-dark">Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut
                                                    orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere
                                                    condimentum.</p>
                                                <ul class="custom amenities row no-gutters mb-xl-20">
                                                    <li class="col-sm-6">
                                                        <div class="icon-box text-light-dark"><i class="fab fa-youtube"></i>4 Passengers </div>
                                                    </li>
                                                    <li class="col-sm-6">
                                                        <div class="icon-box text-light-dark"><i class="fab fa-youtube"></i>2 Bags </div>
                                                    </li>
                                                    <li class="col-sm-6">
                                                        <div class="icon-box text-light-dark"><i class="fab fa-youtube"></i>Air Conditioning </div>
                                                    </li>
                                                    <li class="col-sm-6">
                                                        <div class="icon-box text-light-dark"><i class="fab fa-youtube"></i>Satellite Navigation
                                                        </div>
                                                    </li>
                                                    <li class="col-sm-6">
                                                        <div class="icon-box text-light-dark"><i class="fab fa-youtube"></i>Disel Vehicle </div>
                                                    </li>
                                                    <li class="col-sm-6">
                                                        <div class="icon-box text-light-dark"><i class="fab fa-youtube"></i>Automatic Transmission
                                                        </div>
                                                    </li>
                                                </ul>
                                                <h4 class="text-custom-black">Travel Info</h4>
                                                <p class="text-light-dark">Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut
                                                    orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere
                                                    condimentum.</p>
                                                <div class="travel-info bg-light-white">
                                                    <div class="row no-gutters">
                                                        <div class="col-sm-6">
                                                            <div class="head padding-20">
                                                                <h5 class="text-custom-black fs-14 fw-500 no-margin">Pick-up location details</h5><span
                                                                    class="text-light-dark fs-12">Phone:(+247) 123 456 7890</span>
                                                            </div>
                                                            <div class="travel-info-body padding-20">
                                                                <div class="date-wrapper mb-xl-20">
                                                                    <div class="icon text-custom-blue fs-20"><i class="far fa-clock"></i></div>
                                                                    <div class="text">
                                                                        <p class="text-custom-black no-margin">Pickup Time</p><span
                                                                            class="text-light-dark fs-12">THU,NOV 14,2019 | 11:00 AM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="date-wrapper">
                                                                    <div class="icon text-custom-blue fs-20"><i class="fas fa-map-marker-alt"></i></div>
                                                                    <div class="text">
                                                                        <p class="text-custom-black no-margin">Location</p><span
                                                                            class="text-light-dark fs-12">London City,Airport</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="head padding-20">
                                                                <h5 class="text-custom-black fs-14 fw-500 no-margin">Drop-off location details</h5><span
                                                                    class="text-light-dark fs-12">Phone:(+247) 123 456 7890</span>
                                                            </div>
                                                            <div class="travel-info-body padding-20">
                                                                <div class="date-wrapper mb-xl-20">
                                                                    <div class="icon text-custom-blue fs-20"><i class="far fa-clock"></i></div>
                                                                    <div class="text">
                                                                        <p class="text-custom-black no-margin">Drop Off Time</p><span
                                                                            class="text-light-dark fs-12">FRI,NOV 15,2019 | 11:00 AM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="date-wrapper">
                                                                    <div class="icon text-custom-blue fs-20"><i class="fas fa-map-marker-alt"></i></div>
                                                                    <div class="text">
                                                                        <p class="text-custom-black no-margin">Location</p><span
                                                                            class="text-light-dark fs-12">Paris Orly,Airport</span>
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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="blog-details bg-custom-white">
                                            <hr><!-- tags & social -->
                                            <div class="post-details-tags-social mb-xl-20">
                                                <div class="row no-margin">
                                                    <div class="col-md-6">
                                                        <div class="tags-box"><span class="fs-18 text-light-dark"><i class="fas fa-tags"></i></span>
                                                            <div class="tags"><a href="#">Travel</a><a href="#">Tour</a><a href="#">Agent</a></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="social-media-box">
                                                            <ul class="custom-flex">
                                                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a><span
                                                                        class="social-number bg-light-white">500</span></li>
                                                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a><span
                                                                        class="social-number bg-light-white">20</span></li>
                                                                <li><a href="#" class="fb"><i class="fab fa-youtube"></i></a><span
                                                                        class="social-number bg-light-white">46</span></li>
                                                                <li><a href="#" class="bg-custom-blue"><i class="fas fa-share-alt"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- tags & social -->
                                            <div class="comment-box section-padding-top p-relative">
                                                <div id="comment-box">
                                                    <h4 class="text-custom-black fw-600">Reviews </h4>
                                                    <ul class="comments custom">
                                                        <li class="comment">
                                                            <article>
                                                                <div class="comment-avatar"><img src="{{url('assets/images/blog/comment_1.jpg')}}"
                                                                                                 class="rounded-circle" alt="comment"></div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <div class="comment-meta-header">
                                                                            <h5 class="text-custom-black fw-600 author mb-3">Rosalina Pong</h5>
                                                                            <div class="post-date"><a href="blog-details.html"
                                                                                                      class="date bg-custom-blue text-custom-white">25 Dec 2019</a></div>
                                                                        </div></div>
                                                                    <div class="comment">
                                                                        <p class="text-light-dark">Lorem ipsum dolor sit amet,consectetur adipisicing
                                                                            elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                            minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                                            commodo consequat.</p>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </li>
                                                        <li class="comment">
                                                        </li>
                                                    </ul>
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
                                            </div>
                                            <!-- comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick-quote bx-wrapper padding-20 mb-xl-30">
                                            <h5 class="text-custom-black">Enquiry Now</h5>
                                            <form action="{{route('user_basket')}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input type="text" name="car_id" value="{{$car[0]->id}}" hidden>
                                                            <input type="text" name="price" value="{{$car[0]->price}}" hidden>
                                                            <label class="fs-14 text-custom-black fw-500" >Pick Up</label>
                                                            <input type="text" name="rezPickUp" class="form-control form-control-custom"
                                                                   placeholder="city,distirct or specific airpot" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Pick Up Date/Time</label>
                                                            <div class="input-group group-form">
                                                                <input type="datetime-local" name="rezDateTime" class="form-control form-control-custom datepickr"
                                                                       placeholder="mm/dd/yy" required>
                                                                <span class="input-group-append"> <i class="far fa-calendar"></i> </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Drop Off</label>
                                                            <input type="text" name="rezPickOf" class="form-control form-control-custom"
                                                                   placeholder="city,distirct or specific airpot" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fs-14 text-custom-black fw-500">Drop Off Date/Time</label>
                                                            <div class="input-group group-form">
                                                                <input type="datetime-local" name="retDateTime" class="form-control form-control-custom datepickr"
                                                                       placeholder="mm/dd/yy" required>
                                                                <span class="input-group-append"> <i class="far fa-calendar"></i> </span>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn-first btn-submit full-width btn-height">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="car-grid mb-xl-30">
                                            <div class="car-grid-wrapper bx-wrapper">
                                                <div class="image-sec animate-img"> <a href="#"> <img src="{{url('storage',$random[0]->image)}}"
                                                                                                      class="full-width" alt="img"> </a> </div>
                                                <div class="car-grid-caption padding-20 bg-custom-white p-relative">
                                                    <h4 class="title fs-16"><a href="#" class="text-custom-black">{{$random[0]->car_type}}<small
                                                                class="text-light-dark">Per Day</small></a></h4>
                                                    <span class="price"><small>Price per day</small>{{$random[0]->price}} ₺</span>
                                                    <p>{{$random[0]->description}}</p>
                                                    <div class="action">  <a
                                                            class="btn-first btn-submit" href="{{route('home_carDetail',$random[0]->slug)}}">Book</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="need-help bx-wrapper padding-20">
                                            <h5 class="text-custom-black">Need Help?.</h5>
                                            <p class="text-light-dark">We would be more than happy to help you. Our team advisor are 24/7 at
                                                your service to help you.</p>
                                            <ul class="custom">
                                                <li class="text-custom-blue fs-18"> <i class="fas fa-phone-alt"></i> <a href="#"
                                                                                                                        class="text-light-dark">{{$settings[0]->phone}}</a> </li>
                                                <li class="text-custom-blue fs-18"> <i class="fas fa-envelope"></i> <a href="#"
                                                                                                                       class="text-light-dark fs-14">{{$settings[0]->email}}</a> </li>
                                            </ul>
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
    <!-- End Listing detail -->
    <!-- Start Partners -->
    <section class="section-padding partners">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-heading">
                    <h3 class="text-custom-black">Our Partners</h3>
                    <div class="section-description">
                        <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="partners-slider arrow-layout-2 row">--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-1-t.png"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-2.png"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-3.png"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-4.png"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-1-t.png"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-2.png"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="{{url('assets/images/logo-3.png')}}"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide-item col-12">--}}
{{--                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="{{url('assets/images/logo-4.png')}}"--}}
{{--                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- End Partners -->
@endsection
<!-- End Contact top -->
<!-- Start Footer -->
