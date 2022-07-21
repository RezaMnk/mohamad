<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('admin.layouts.sections.head')

<body dir="rtl">

    <main class="main-content ml-0">
        @yield('content')
    </main>

    @yield('modal')

    @include('admin.layouts.sections.footer-scripts')

</body>

<script src="{{ asset('admin/js/app.js') }}"></script>

@yield('footer-assets')
@include('sweetalert::alert')
</html>
