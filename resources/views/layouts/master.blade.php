<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{asset('light/assets/img/logo.png')}}"/>
    <link rel="icon" href="{{asset('light/assets/img/logo.png')}}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{asset('light/assets/vendor/pace/pace.css')}}">
    <script src="{{asset('light/assets/vendor/pace/pace.min.js')}}"></script>
    <!--vendors-->
    <link rel="stylesheet" type="text/css" href="{{asset('light/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('light/assets/vendor/jquery-scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('light/assets/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('light/assets/vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('light/assets/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('light/assets/vendor/timepicker/bootstrap-timepicker.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('light/assets/fonts/jost/jost.css')}}">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('light/assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
    <!--Bootstrap + atmos Admin CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('light/assets/css/atmos.min.css')}}">
    <!-- Additional library for page -->


</head>
<body class="sidebar-pinned">
@include('layouts.core.menu-left')
<main class="admin-main">
    <!--site header begins-->
@include('layouts.core.navbar')
<!--site header ends -->
@yield('content ')

</main>



<script src="{{asset('light/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/popper/popper.js')}}"></script>
<script src="{{asset('light/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/listjs/listjs.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/moment/moment.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('light/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('light/assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('light/assets/js/atmos.min.js')}}"></script>
<!--page specific scripts for demo-->

<!--Additional Page includes-->
<script src="{{asset('light/assets/vendor/apexchart/apexcharts.min.js')}}"></script>
<!--chart data for current dashboard-->
<script src="{{asset('light/assets/vendor/assets/js/dashboard-01.js')}}" type="text/javascript"></script>
</body>
</html>
