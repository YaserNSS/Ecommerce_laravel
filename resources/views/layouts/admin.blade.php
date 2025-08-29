<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset ('admin/assets/images/favicon.ico')}}" />
    @livewireStyles
</head>
<body>

  <div class="container-scroller">
    @include('layouts.incadmin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('layouts.incadmin.sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
      </div>
      </div>


    </div>

  </div>



  <!-- plugins:js -->
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admin/assets/js/off-canvas.js')}}"></script>
<script src="{{ asset('admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('admin/assets/js/template.js')}}"></script>

<script src="{{ asset('admin/assets/js/settings.js')}}"></script>
<script src="{{ asset('admin/assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin/assets/js/dashboard.js')}}"></script>
<script src="{{ asset('admin/assets/js/proBanner.js')}}"></script>

<!-- End custom js for this page-->
<script src="{{ asset('admin/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>

    @livewireScripts
</body>
</html>
