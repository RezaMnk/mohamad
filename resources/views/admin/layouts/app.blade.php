<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('admin.layouts.sections.head')

<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
</div>
<!-- end::page loader -->

@include('admin.layouts.sections.navigation')

@include('admin.layouts.sections.header')

<!-- begin::main content -->
<main class="main-content">
    @yield('content')
</main>
<!-- end::main content -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- Chartjs -->
<script src="vendors/charts/chartjs/chart.min.js"></script>

<!-- Circle progress -->
<script src="vendors/circle-progress/circle-progress.min.js"></script>

<!-- Peity -->
<script src="vendors/charts/peity/jquery.peity.min.js"></script>
<script src="assets/js/examples/charts/peity.js"></script>

<!-- Datepicker -->
<script src="vendors/datepicker/daterangepicker.js"></script>

<!-- Slick -->
<script src="vendors/slick/slick.min.js"></script>

<!-- Vamp -->
<script src="vendors/vmap/jquery.vmap.min.js"></script>
<script src="vendors/vmap/maps/jquery.vmap.usa.js"></script>
<script src="assets/js/examples/vmap.js"></script>

<!-- Dashboard scripts -->
<script src="assets/js/examples/dashboard.js"></script>
<div class="colors">
    <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="assets/js/app.js"></script>
</body>

</html>
