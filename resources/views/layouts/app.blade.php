<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title', 'Sistem Pakar Penyakit Cabai')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Table css -->
    <link href="{{ asset('assets/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/clockpicker/jquery-clockpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/colorpicker/asColorPicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">


    @stack('styles')
</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Content -->
        <div class="content-page">
            <div class="content">
                <!-- Topbar -->
                @include('partials.topbar')

                <div class="page-content-wrapper">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>

            <footer class="footer">
                © {{ date('Y') }} Sistem Pakar Deteksi Penyakit Cabai.
            </footer>
        </div>
    </div>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

    <!-- Responsive-table -->
    <script src="{{ asset('assets/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js') }}" type="text/javascript">
    </script>

    <!-- Plugins js -->
    <script src="{{ asset('assets/plugins/timepicker/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/clockpicker/jquery-clockpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/colorpicker/jquery-asColor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/colorpicker/jquery-asGradient.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/colorpicker/jquery-asColorPicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"
        type="text/javascript"></script>

    <!-- Plugins Init js -->
    <script src="{{ asset('assets/pages/form-advanced.js') }}"></script>

    

    <script>
        $(function() {
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary'
            });
        });
    </script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
