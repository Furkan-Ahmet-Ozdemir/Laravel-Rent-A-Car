
@extends('layouts.home')

@section('title','Laravel E-Ticaret dsfsdf')

@section('boostrap_js1')
    <style>

        body {
            background-color: #c8d9e0;
            font-family: sans-serif;
        }

        div + div {
            clear: both;
        }

        p {
            line-height: 1.4em;
            color: #9e9e9e;
        }

        .faq-title {
            font-size: 2em;
            margin: 0.4em 0;
        }

        div.seperator {
            width: 7.5em;
            background-color: #e31b1b;
            height: 0.17em;
            margin-left: -1.8em;
        }

        .faq-list > div {
            border-bottom: 0.07em solid #ededed;
            padding: 1.5em 0em;
        }

        .faq-list > div:last-child {
            border: unset;
        }

        details > summary {
            list-style: none;
        }
        details > summary::-webkit-details-marker {
            display: none;
        }

        summary {
            font-size: 1.4em;
            font-weight: bold;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: all 0.3s ease;
        }

        summary:hover {
            color: #e31b1b;
        }

        details[open] summary ~ * {
            animation: sweep .5s ease-in-out;
        }

        @keyframes sweep {
            0%    {opacity: 0; margin-left: -10px}
            100%  {opacity: 1; margin-left: 55px}
        }

        details[open] summary {
            color: #e31b1b;
        }

        details[open] p {
            border-left: 2px solid #e31b1b;
            margin-left: 55px;
            padding-left: 25px;
            opacity: 100;
            transition: all 3s ease;
        }

        details[open] summary:after {
            content: "-";
            font-size: 3.2em;
            margin: -33px 0.35em 0 0;
            font-weight: 200;
        }

        .faq-body {
            width: 70em;
            margin: 4em auto;
            box-shadow: 0px 0px 16px #5b5b5b;
            border-radius: 0.2em;
            padding: 5em;
            background-color: #fff;
        }

        .faq-list {
            width: 55em;
            margin: 1em auto;
            padding: 2em 0;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary:after {
            background: transparent;
            border-radius: 0.3em;
            content: "+";
            color: #e31b1b;
            float: left;
            font-size: 1.8em;
            font-weight: bold;
            margin: -0.3em 0.65em 0 0;
            padding: 0;
            text-align: center;
            width: 25px;
        }
    </style>
@endsection

@section('content')
<!-- Start Subheader -->
<div class="subheader normal-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Faqs</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500"><a href="{{route('home')}}" class="text-custom-white">Home</a></li>
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
                <div id="faq" class="faq-body">
                    <div class="faq-header">
                        <h3 class="faq-title">FAQ's</h3>
                        <div class="seperator"></div>
                    </div>
                    <div class="faq-list">

                        @foreach($datalist as $rs)
                            <div>
                                <details>
                                    <summary >{{$rs->question}}</summary>
                                    <p class="faq-content"> {{$rs->answer}}</p>
                                </details>
                            </div>
                        @endforeach
                    <div>
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
