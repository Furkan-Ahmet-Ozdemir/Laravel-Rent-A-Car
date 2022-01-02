{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <title>Connect Plus</title>--}}
{{--    <!-- plugins:css -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/mdi/css/materialdesignicons.min.css">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/flag-icon-css/css/flag-icon.min.css">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/admin') }}/vendors/css/vendor.bundle.base.css">--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Plugin css for this page -->--}}
{{--    <!-- End plugin css for this page -->--}}
{{--    <!-- inject:css -->--}}
{{--    <!-- endinject -->--}}
{{--    <!-- Layout styles -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/css/style.css">--}}
{{--    <!-- End layout styles -->--}}
{{--    <link rel="shortcut icon" href="{{ asset('assets/admin') }}/assets/images/favicon.png" />--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container-scroller">--}}
{{--    <div class="container-fluid page-body-wrapper full-page-wrapper">--}}
{{--        <div class="content-wrapper d-flex align-items-center auth">--}}
{{--            <div class="row flex-grow">--}}
{{--                <div class="col-lg-4 mx-auto">--}}
{{--                    <div class="auth-form-light text-left p-5">--}}
{{--                        <div >--}}
{{--                           <h2 class="align-items-lg-center"> REGISTER</h2>--}}
{{--                        </div>--}}
{{--                        <h4>Hello! let's get started</h4>--}}
{{--                        <h6 class="font-weight-light">Sign in to continue.</h6>--}}
{{--                        <form class="pt-3" action="{{ route('admin_registercheck') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Name" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <input type="password" name="password1" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" required>--}}
{{--                            </div>--}}

{{--                            <div class="mt-3">--}}

{{--                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>--}}
{{--                            </div>--}}

{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- content-wrapper ends -->--}}
{{--    </div>--}}
{{--    <!-- page-body-wrapper ends -->--}}
{{--</div>--}}
{{--<!-- container-scroller -->--}}
{{--<!-- plugins:js -->--}}
{{--<script src="{{ asset('assets/admin') }}/vendors/js/vendor.bundle.base.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Plugin js for this page -->--}}
{{--<!-- End plugin js for this page -->--}}
{{--<!-- inject:js -->--}}
{{--<script src="{{ asset('assets/admin') }}/js/off-canvas.js"></script>--}}
{{--<script src="{{ asset('assets/admin') }}/js/hoverable-collapse.js"></script>--}}
{{--<script src="{{ asset('assets/admin') }}/js/misc.js"></script>--}}
{{--<!-- endinject -->--}}
{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{url('login/images/icons/favicon.ico')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/animate/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/css-hamburgers/hamburgers.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('login/vendor/select2/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('login/css/main.css')}}">

    <meta name="robots" content="noindex, follow">
    <script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
            e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="/cdn-cgi/zaraz/s.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script></head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{url('login/images/img-01.png')}}" alt="IMG">
            </div>
            <form class="login100-form validate-form" action="">
                <span class="login100-form-title">Register</span>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="name" placeholder="Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password1" placeholder="Re Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a type="submit" class="txt2" href="{{route('home_login')}}">
                        Log In
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{url('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script src="{{url('login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{url('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{url('login/vendor/select2/select2.min.js')}}"></script>

<script src="{{url('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
{{--<script>--}}
{{--    window.dataLayer = window.dataLayer || [];--}}
{{--    function gtag(){dataLayer.push(arguments);}--}}
{{--    gtag('js', new Date());--}}

{{--    gtag('config', 'UA-23581568-13');--}}
{{--</script>--}}

{{--<script src="{{url('js/main.js')}}"></script>--}}
{{--<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c6e2df4cda7724f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>--}}

</body>
</html>

