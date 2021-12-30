
@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('content')
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Faqs</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500"><a href="{{route('home.index')}}" class="text-custom-white">Home</a></li>
                    <li class="active fw-500">Faqs </li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End Subheader -->
<!-- Start faqs -->
<section class="section-padding bg-light-white faqs">
    <div class="container">
        <div class="row">
            <h6 class="d-none">1</h6>
            <div class="col-lg-12">
                <div id="accordion" class="custom-accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne"><button class="collapsebtn" data-toggle="collapse" data-target="#collapseOne">Rules and Policies </button></div>
                            @foreach(  $datalist as $rs)
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <h6>{{$rs->question}}</h6>
                                        <p class="text-theme"> {{$rs->answer}} </p>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="back-top" class="back-top"><a href="#top"><i class="flaticon-arrows"></i></a></div>

@endsection
<!-- End Contact top -->
<!-- Start Footer -->
