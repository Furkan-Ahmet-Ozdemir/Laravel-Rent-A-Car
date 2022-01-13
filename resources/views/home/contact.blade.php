

@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">Contact Us</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="{{route('home')}}" class="text-custom-white">Home</a></li>
                        <li class="active fw-500">Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Subheader -->
    <div class="section-padding contact-form-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-header style-left">
                        <div class="section-heading">
                            <h3 class="text-custom-black">Get In Touch</h3>
                            <div class="section-description">
                                <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <form class="mb-md-80" action="{{route('contact_store')}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-custom" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-custom" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control form-control-custom" placeholder="Subject" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control form-control-custom" placeholder="Phone No."
                                           required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <textarea name="message" rows="5" class="form-control form-control-custom" placeholder="Message"
                                            required=""></textarea>
                                </div>
                                <button type="submit" class="btn-first btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="contact-map full-height">
                        <iframe class="full-height"
                                src="https://maps.google.com/maps?q=university%20of%20san%20francisco&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Contact top -->
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
