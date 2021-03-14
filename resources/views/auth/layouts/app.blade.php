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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('backend') }}/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('backend') }}/demo/demo.css" rel="stylesheet" />

    @stack('css')

</head>

<body class="">
    <div class="wrapper ">
        <div class="">
          <div class="content">
            <div class="container-fluid">
                  @yield('content')
            </div>
          </div>
        </div>
      </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('backend') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('backend') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('backend') }}/js/core/bootstrap-material-design.min.js"></script>
  <script src="{{ asset('backend') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>


</body>

</html>
