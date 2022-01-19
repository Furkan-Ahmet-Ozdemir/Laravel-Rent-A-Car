@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@php
    $categories = \App\Http\Controllers\HomeController::getCategories();
@endphp

@section('content')
    <!-- Start Subheader -->
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Cars</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="index.html" class="text-custom-white">Home</a></li>
                        <li class="active fw-500">Cars </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Subheader -->
    <!-- Start Blog -->
    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listing-top-heading mb-xl-20">
                        <h6 class="no-margin text-custom-black">Showing {{count($cars)}} Results</h6>
{{--                        <div class="sort-by"><span class="text-custom-black fs-14 fw-600">Sort by</span>--}}
{{--                            <div class="group-form"><select class="form-control form-control-custom custom-select">--}}
{{--                                   A to Z--}}
{{--                                    <option>Z to A</option>--}}
{{--                                    @for($i = 0; $i < count($categories); $i++)--}}
{{--                                   <a href="{{route('home_carType',$categories[$i]->id)}}"> <option  >{{$categories[$i]->title}} </option> </a>--}}
{{--                                    @endfor--}}
{{--                                </select></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                @isset($cars)
                    @foreach($cars as $car)
                        <div class=" col-lg-4 col-md-6">
                            <div class="car-grid mb-xl-30">
                                <div class="car-grid-wrapper car-grid bx-wrapper">
                                    <div class="image-sec animate-img"><a href="#"><img src="{{url('storage/',$car->image)}}" class="full-width"
                                                                                        alt="img"></a></div>
                                    <div class="car-grid-caption padding-20 bg-custom-white p-relative">
                                        <h4 class="title fs-16"><a href="#" class="text-custom-black">{{$car->title}}<small class="text-light-dark">Per
                                                    Day</small></a></h4><span class="price"><small>From</small>{{$car->price}} ₺</span>
                                        <p>{{$car->description}}</p>
                                        <div class="action"><a class="btn-first btn-submit" href="{{route('home_carDetail',$car->slug)}}">Book</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <nav>--}}
{{--                        <ul class="pagination justify-content-center">--}}
{{--                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section><!-- End Blog -->
    <!-- Start Partners -->
    <section class="section-padding partners">
        <div class="container">
            <div class="section-header  text-center">
                <div class="section-heading">
                    <h3 class="text-custom-black">Our Partners</h3>
                    <div class="section-description">
                        <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="partners-slider arrow-layout-2 row">
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-1-t.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-2.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-3.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-4.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-1-t.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-2.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-3.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="partner-box bx-wrapper animate-img"> <a href="#"> <img src="assets/images/logo-4.png"
                                                                                               class="img-fluid image-fit" alt="img"> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partners -->
    <!-- Start Footer -->
@endsection
<!-- End Contact top -->
<!-- Start Footer -->
