<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <!-- Icon -->
    <link href="/e-votepro-logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/NiceAdmin/assets/css/style.css" rel="stylesheet">

    <!-- Page Styles -->
    @stack('page-styles')
    <!-- End Page Styles -->
</head>

<body>
    @include('admin.layouts.partials.admin-header')
    @include('admin.layouts.partials.admin-sidebar')
    @include('admin.modals.modal-logout')

    <main id="main" class="main">
        @yield('content')
    </main><!-- End #main -->

    @include('admin.layouts.partials.admin-footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/NiceAdmin/assets/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            //
        });
    </script>

    <!-- Page Scripts -->
    @stack('page-scripts')
</body>

</html>
