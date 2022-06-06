<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="fa">

@include('layouts.sections.head')

<body>
    <div id="page_wrapper" class="bg-white">

        @include('layouts.sections.header')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.sections.footer')

    </div>

    @include('layouts.sections.footer-scripts')

</body>
@include('sweetalert::alert')
</html>
