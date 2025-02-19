<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Architect - Architect Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="{{ asset('assets/bundles/chartjs/chart.min.js') }}"></script>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/architectlogo.jpg') }}" style="height: 100px;">
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('architectpanel.layouts.header')
            @include('architectpanel.layouts.sidebar')

            @yield('content')

            @include('architectpanel.layouts.footer')
        </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- General JS Scripts -->
{{-- <script src="{{ asset('assets/js/app.min.js') }}"></script> --}}

<!-- JS Libraries -->
<script src="{{ asset('assets/bundles/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('assets/bundles/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/bundles/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/widget-chart.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('assets/bundles/jquery.sparkline.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/sparkline.js') }}"></script>


    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('#table-1').DataTable();
        });
    </script>
    
</body>

</html>