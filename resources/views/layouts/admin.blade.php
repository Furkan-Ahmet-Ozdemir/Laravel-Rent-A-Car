<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/admin') }}/assets/images/favicon.png" />
    @yield('boostrap_js')
    <title>@yield('baslik')</title>
</head>
<body>
    <div class="container-scroller">
    @include('admin._navbar')
        <div class="container-fluid page-body-wrapper">
            @include('admin._sidebar')
            <!-- partial -->
                <div class="main-panel">
                    @yield('content')
                    <!-- content-wrapper ends -->
                    <!-- partial -->
                    @include('admin._footer')
                </div>
    <!-- main-panel ends -->
            </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @yield('scripts')
    <script src="{{ asset('assets/admin') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/admin') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/admin') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('assets/admin') }}/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/admin') }}/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->


</body>
</html>
