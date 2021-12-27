@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-custom-white">About Us</h1>
                    <ul class="custom-flex justify-content-center">
                        <li class="fw-500"><a href="index.html" class="text-custom-white">Home</a></li>
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
                <div class="col-xl-7 col-lg-6 pl-2 pr-2 align-self-center text-left">
                    <div class="about-left-side mb-md-80">
                        <div class="section-header style-left">
                            <div class="section-heading">
                                <h3 class="text-custom-black">Subaru Impreza</h3>
                                <div class="section-description">
                                    <div class="car-price"><strong>$125</strong><span>/Day</span></div>
                                </div>
                            </div>
                        </div>
                        <p class="pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text.</p>
                        <p class="pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is
                            simply dummy.</p>
                        <a href="about.html" class="btn-first btn-submit">Reserve Now</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-right-side full-height">
                        <div class="about-img full-height"> <img src="assets/images/about.jpg" class="img-fluid image-fit"
                                                                 alt="img"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->
    <!-- Start Why choose Us -->
    <section class="section-padding why-choose-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="why-choose-box mb-md-80">
                        <div class="section-header text-center ">
                            <div class="section-heading">
                                <h3 class="text-custom-black">Why Choose Us</h3>
                                <div class="section-description">
                                    <p class="text-light-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-wrapper">
                            <div class="why-choose-img p-relative">
                                <div class="row clearfix">
                                    <div class="col-6">
                                        <div class="choose-item animate-img"><img src="assets/images/services.png" alt="img"
                                                                                  class="full-width">
                                            <div class="text-wrapper">
                                                <h4 class="text-custom-white">Personalized Service</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="choose-item animate-img"><img src="assets/images/support.png" alt="img"
                                                                                  class="full-width">
                                            <div class="text-wrapper">
                                                <h4 class="text-custom-white">24/7 Support</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="choose-item animate-img"><img src="assets/images/best-price.jpg" alt="img"
                                                                                  class="full-width">
                                            <div class="text-wrapper">
                                                <h4 class="text-custom-white">Best Price</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="choose-item animate-img"><img src="assets/images/company.png" alt="img"
                                                                                  class="full-width">
                                            <div class="text-wrapper">
                                                <h4 class="text-custom-white">Trusted Company</h4>
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
    </section><!-- End Why choose Us -->
    <!-- Start Our Team -->
    <section class="section-padding parallax our-team">
        <div class="overlay overlay-bg-black"></div>
        <div class="container">
            <div class="section-header text-center">
                <div class="section-heading">
                    <h3 class="text-custom-white">Our Team</h3>
                    <div class="section-description">
                        <p class="text-custom-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-slider arrow-layout-2 row">
                        <div class="slide-item col-12">
                            <div class="team-sy-grid">
                                <div class="img-wrap"> <img src="assets/images/agent-1.jpg" class="image-fit" alt="img"> </div>
                                <div class="caption">
                                    <h5 class="no-margin fw-600"><a href="#" class="text-custom-black">Vanessa Simpson </a></h5>
                                </div>
                                <div class="hover-wrap">
                                    <div class="text-wrap">
                                        <h5 class="fw-600"><a href="#" class="text-custom-black">Vanessa Simpson </a></h5>
                                        <p class="text-light-white mb-xl-20">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p><a href="#"
                                                                                                                                 class="btn-second btn-small">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-sy-grid mb-md-30">
                                <div class="img-wrap"><img src="assets/images/agent-2.jpg" class="image-fit" alt="img"></div>
                                <div class="caption">
                                    <h5 class="no-margin fw-600"><a href="#" class="text-custom-black">Rebecca Smith</a></h5>
                                </div>
                                <div class="hover-wrap">
                                    <div class="text-wrap">
                                        <h5 class="fw-600"><a href="#" class="text-custom-black">Rebecca Smith</a></h5>
                                        <p class="text-light-white mb-xl-20">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <a href="#" class="btn-second btn-small">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-sy-grid mb-md-30">
                                <div class="img-wrap"> <img src="assets/images/agent-3.jpg" class="image-fit" alt="img"> </div>
                                <div class="caption">
                                    <h5 class="no-margin fw-600"><a href="#" class="text-custom-black">Aaron Green</a></h5>
                                </div>
                                <div class="hover-wrap">
                                    <div class="text-wrap">
                                        <h5 class="fw-600"><a href="#" class="text-custom-black">Aaron Green</a></h5>
                                        <p class="text-light-white mb-xl-20">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p><a href="#"
                                                                                                                                 class="btn-second btn-small">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-sy-grid mb-xl-30">
                                <div class="img-wrap"><img src="assets/images/agent-4.jpg" class="image-fit" alt="img"></div>
                                <div class="caption">
                                    <h5 class="no-margin fw-600"><a href="#" class="text-custom-black">James Aderson</a></h5>
                                </div>
                                <div class="hover-wrap">
                                    <div class="text-wrap">
                                        <h5 class="fw-600"><a href="#" class="text-custom-black">James Aderson</a></h5>
                                        <p class="text-light-white mb-xl-20">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                        <a href="#" class="btn-second btn-small">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item col-12">
                            <div class="team-sy-grid mb-xl-30">
                                <div class="img-wrap"> <img src="assets/images/agent-4.jpg" class="image-fit" alt="img"> </div>
                                <div class="caption">
                                    <h5 class="no-margin fw-600"><a href="#" class="text-custom-black">Elizabeth</a></h5>
                                </div>
                                <div class="hover-wrap">
                                    <div class="text-wrap">
                                        <h5 class="fw-600"><a href="#" class="text-custom-black">Elizabeth</a></h5>
                                        <p class="text-light-white mb-xl-20">Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p><a href="#"
                                                                                                                                 class="btn-second btn-small">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Our Team -->
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
@endsection
<!-- End Contact top -->
<!-- Start Footer -->
