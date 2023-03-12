<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- App css -->
    @stack('page_css')
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/metisMenu.min.css')}}"rel="stylesheet" type="text/css" />
    <link href="{{asset('js/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
    
</head>
<body>
       @include('components.sidebar')
        
        <div class="page-wrapper">
           @include('components.navbar')

            <!-- Page Content-->
            @yield('content')
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/metismenu.min.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/feather.min.js')}}"></script>
        <script src="{{asset('js/simplebar.min.js')}}"></script>
        <script src="{{asset('js/moment.js')}}"></script>
        <script src="{{asset('js/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{asset('js/apex-charts/apexcharts.min.js')}}"></script>
        <script src="{{asset('pages/jquery.analytics_dashboard.init.js')}}"></script>
       
        <!-- App js -->
        <script src="{{asset('js/app.js')}}"></script>
        @yield('script')
        
    </body>
</html>