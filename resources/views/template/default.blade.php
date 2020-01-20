<!DOCTYPE html>
<html>
<head>
  @include('template.partials._head')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('template.partials._sidebar')

        @yield('content')
   


  @include('template.partials._footer')

  @include('template.partials._scripts')

</body>
</html>
