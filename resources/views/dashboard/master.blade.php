<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/feather-icons-web/feather.css') }}" >
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }} ">
    @yield('head')
</head>

<body>
    <section class="main container-fluid">
        <div class="row">
            <!-- Sidebar Start -->
            @include('dashboard.sidebar')
            <!-- Sidebar End -->
            <div class="col-12 col-lg-9 col-xl-10 content vh-100 shadow-sm">
                @include("dashboard.header")
                <!-- Content Area Start -->
                @yield("content")
                <!-- Content Area End -->
            </div>
        </div>
    </section>

    <script src="{{ asset('dashboard/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/way_point/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/counter_up/counter_up.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/chart_js/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>
    @yield('foot')
</body>

</html>