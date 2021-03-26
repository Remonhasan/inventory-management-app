<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
@include('layouts.Partials.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


    <!-- Main Sidebar Container -->
    @include('layouts.Partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Main Footer -->
@include('layouts.Partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('layouts.Partials.footer-script')
</body>
</html>
