<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Dashboard Settings</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('dashboard_assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/argon.css?v=1.2.0') }}" type="text/css">
    {{-- Data Tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>

    <!-- Page content -->
    @yield('konten')

    {{-- My js --}}
    <script src=" {{ asset('js/app.js') }}">
    </script>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('dashboard_assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('dashboard_assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script>
        $(document).ready( function () {
    $('#jokes').DataTable();
} );
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    </script>

    <script src="{{ asset('dashboard_assets/js/myjs.js') }}"></script>

    <script src="{{ asset('dashboard_assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
