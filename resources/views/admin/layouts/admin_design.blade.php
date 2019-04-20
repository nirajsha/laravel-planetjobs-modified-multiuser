<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>

<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">
<div class="container_fluid">
@include('admin.layouts.header')


<!-- Left side column. contains the logo and sidebar -->
@include('admin.layouts.sidebar')


<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

@include('admin.layouts.footer')

<!-- Control Sidebar -->
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



@include('admin.layouts.script')

</body>
</html>
