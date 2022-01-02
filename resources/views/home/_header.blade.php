<header class="header">
    <div class="topbar bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="leftside">
                        <ul class="custom-flex">
                            <li>
                                <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="text-custom-white">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="rightside full-height">
                        <ul class="custom-flex full-height">
{{--                            <li class="book-appointment">--}}
{{--                                <a href="booking.html">Booking Now </a>--}}
{{--                            </li>--}}
                            <li class="book-appointment">
                                <a href="{{route("home_login")}}"> LOG IN </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-wrapper">
        <div class="container"><div class="row">
                <div class="col-12">

                    <nav>
                        <div class="main-navigation">
                            <div class="logo">
                                <a href="{{route('home.index')}}">
                                    <img src="{{url('assets/images/logo.png')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="main-menu">
                            <ul class="custom-flex">
                                <li class="menu-item active"><a href="{{route('home.index')}}">Home</a></li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('home_cars')}}">Categories</a>
                                    <ul class="submenu custom">
                                        <li class="menu-item"><a href="{{route('home_cars')}}">All</a></li>
                                        @for($i = 0; $i < count($categories); $i++)
                                            <li class="menu-item"><a href="{{route('home_carType',$categories[$i]->id)}}">{{$categories[$i]->title}}</a></li>
                                        @endfor
                                    </ul>
                                </li>

                                <li class="menu-item"><a href="{{route('home_about')}}">About</a></li>
                                <li class="menu-item"><a href="{{route('home_contact')}}">Contact Us</a></li>
                                <li class="menu-item"><a href="{{route('home_faq')}}">Faq</a></li>

                            </ul>
                        </div>
                        <div class="hamburger-menu"><div class="menu-btn"
                            ><span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>
                </nav>
                </div>
            </div>
        </div>
    </div>
</header><!-- End Topbar --><!-- Header -->
