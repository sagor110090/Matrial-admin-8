<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> {{ config('app.name') }} / @isset($pageTitle) {{$pageTitle}}@endisset</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('backend') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

    <link href="{{ asset('backend') }}/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('backend') }}/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">

    @stack('css')

</head>

<body class="">
    <!--CSS Spinner-->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <div class="wrapper">
        @include('layouts.parts.sidebar')
        <div class="main-panel">
         @include('layouts.parts.navbar')
          <div class="content">
            <div class="container-fluid">
                  @yield('content')
            </div>
          </div>
          <footer class="footer">
            <div class="container-fluid">
              <nav class="float-left">
                <ul>
                  <li>
                    <a href="#">
                        {{ config('app.name') }}
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright float-right">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>
                <a href="#" target="_blank">{{ config('app.name') }}</a>
              </div>
            </div>
          </footer>
        </div>

    </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('backend') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('backend') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('backend') }}/js/core/bootstrap-material-design.min.js"></script>
  <script src="{{ asset('backend') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('backend') }}/js/plugins/jquery.dataTables.min.js"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('backend') }}/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('backend') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('backend') }}/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('backend') }}/demo/demo.js"></script>
  <script src="{{ asset('backend') }}/js/custom.js"></script>

    <script>
        // tostr message
        @if(Session::has('flash_message'))
            md.showNotification('top','center','{{Session::get('flash_message')}}','success')
        @endif
        @if(Session::has('warning'))
            md.showNotification('top','center','{{Session::get('flash_message')}}','success')
        @endif
        @if(Session::has('error'))
            md.showNotification('top','center','{{Session::get('error')}}','success')
        @endif
    </script>
    @stack('js')

</body>

</html>
