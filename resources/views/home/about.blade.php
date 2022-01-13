@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">About Us</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="{{route('home')}}" class="text-custom-white">Home</a></li>
                        <li class="active fw-500">About Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Subheader -->
    <!-- Start About Us -->
    <section class="section-padding about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 pl-2 pr-2 align-self-center ">
                    <div class="mb-md-80">
                        <h3 style="align-content: center"> About Us                   </h3>

                            <div>  {{$setting->aboutus}}</div>
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
