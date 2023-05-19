<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Auth::user()->role }}</title>
    <!-- plugins:css -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="/disk/vendors/feather/feather.css">
  <link rel="stylesheet" href="/disk/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/disk/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/disk/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/disk/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/disk/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/disk/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/disk/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/disk/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/disk/images/favicon.png" />
  <style>
    .example {
        /* background-color: #eee; */
        /* width: 200px; */
        height: 500px;
        /* border: 1px dotted black; */
        overflow-y: scroll;
        /* Add the ability to scroll */
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .example::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>
</head>
<body>
    
    @include('layouts.navbar')
    @include('layouts.sidebar')
<div class="main-panel">
  <div class="content-wrapper">

    @yield('Isi')
  </div>
</div>




      <!-- plugins:js -->
  <script src="{{ asset('disk/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('disk/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('disk/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  {{-- <script src="{{ asset('disk/vendors/progressbar.js/progressbar.min.js') }}"></script> --}}

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('disk/js/off-canvas.js') }}"></script>
  <script src="{{ asset('disk/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('disk/js/template.js') }}"></script>
  <script src="{{ asset('disk/js/settings.js') }}"></script>
  <script src="{{ asset('disk/js/todolist.js') }}"></script>
  <!-- endinject -->
  @stack('js')
  <!-- Custom js for this page-->
  <script src="{{ asset('disk/js/jquery.cookie.js') }}" type="text/javascript"></script>
  {{-- <script src="{{ asset('disk/js/dashboard.js') }}"></script> --}}
  <script src="{{ asset('disk/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>
</html>