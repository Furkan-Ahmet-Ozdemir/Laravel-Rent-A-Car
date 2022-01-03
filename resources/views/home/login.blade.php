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
{{--                        <h4 CLASS="font-weight-bold">SIGN IN</h4>--}}
{{--                        <h6 class="font-weight-light">Sign in to continue.</h6>--}}
{{--                        <form class="pt-3" action="{{ route('admin_logincheck') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">--}}
{{--                            </div>--}}
{{--                            <div class="mt-3">--}}

{{--                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>--}}
{{--                                <button  class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn">REGISTER</button>--}}
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
<html >
<head>
    <title>Login</title>
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

</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{url('login/images/img-01.png')}}" alt="IMG">
            </div>
            <form class="login100-form validate-form" action="{{route('user_logincheck')}}" method="post">
                @csrf
                <span class="login100-form-title">
                Member Login
                </span>
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
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="{{route('home_register')}}">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

{{--<script src="{{url('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>--}}

{{--<script src="{{url('login/vendor/bootstrap/js/popper.js')}}"></script>--}}
{{--<script src="{{url('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>--}}

{{--<script src="{{url('login/vendor/select2/select2.min.js')}}"></script>--}}

{{--<script src="{{url('login/vendor/tilt/tilt.jquery.min.js')}}"></script>--}}
{{--<script>--}}
{{--    $('.js-tilt').tilt({--}}
{{--        scale: 1.1--}}
{{--    })--}}
{{--</script>--}}

{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>--}}
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
