<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @include('layouts.backend_top_link')

<style type="text/css">
	div.dropdown-menu.show {

    position: relative !important;
    transform: translate3d(73px, 29px, 0px) !important;
    top: -20px !important;
    left: -82px !important;
    will-change: transform !important;

}

</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 @include('layouts.backend_navbar')
  <!-- Main Sidebar Container -->

 @include('layouts.backend_sidebar')

  <!-- Content Wrapper. Contains page content -->
 @yield('content')
  
  @include('layouts.backend_footer')
</div>
<!-- ./wrapper -->
  @include('layouts.backend_under_script')



</body>
</html>
