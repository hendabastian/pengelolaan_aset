<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('quixlab/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('quixlab/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('quixlab/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('quixlab/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            @include('layouts.navheader')
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            @include('layouts.header')
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
           @include('sidebars.pemeliharaan.admin')
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('content')
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('quixlab/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('quixlab/js/custom.min.js')}}"></script>
    <script src="{{asset('quixlab/js/settings.js')}}"></script>
    <script src="{{asset('quixlab/js/gleek.js')}}"></script>
    <script src="{{asset('quixlab/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('quixlab/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('quixlab/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('quixlab/plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('quixlab/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('quixlab/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('quixlab/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('quixlab/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('quixlab/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('quixlab/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{asset('quixlab/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('quixlab/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

    <script src="{{asset('quixlab/js/dashboard/dashboard-1.js')}}"></script>
    {{-- datatables --}}
    <script src="{{asset('quixlab/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('quixlab/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('quixlab/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>

</body>

</html>