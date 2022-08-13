<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.png') }}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#5867dd">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/bundle.css') }}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/datepicker/daterangepicker.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/slick/slick-theme.css') }}">

    <!-- Vmap -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/vmap/jqvmap.min.css') }}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" type="text/css">

    <!-- Layout header assets -->
    @yield('header-assets')
</head>
