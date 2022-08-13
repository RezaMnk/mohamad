<!-- begin::header -->
<div class="header">

    <!-- begin::header logo -->
    <div class="header-logo">
        <a href="index.html">
            <img class="large-logo" src="{{ asset('storage') }}/logo/19.png" alt="image">
            <img class="small-logo" src="{{ asset('storage') }}/logo/19.png" alt="image">
            <img class="dark-logo" src="{{ asset('storage') }}/logo/21.png" alt="image">
        </a>
    </div>
    <!-- end::header logo -->

    <!-- begin::header body -->
    <div class="header-body">

        <div class="header-body-left">

            <h3 class="page-title">@yield('title')</h3>

            <!-- begin::breadcrumb -->
            <nav aria-label="breadcrumb">
                {{ Breadcrumbs::render() }}
{{--                <ol class="breadcrumb">--}}
{{--                    @foreach(Request::segments() as $key => $segment)--}}
{{--                        @if($key == array_key_last(Request::segments()))--}}
{{--                        <li class="breadcrumb-item active" aria-current="page">--}}
{{--                            {{ __($segment) }}--}}
{{--                        </li>--}}
{{--                        @else--}}
{{--                        <li class="breadcrumb-item">--}}
{{--                            <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$key+1, true)))}}">{{ __($segment) }}</a>--}}
{{--                        </li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </ol>--}}
            </nav>
            <!-- end::breadcrumb -->
        </div>

        <div class="header-body-right">
            <!-- begin::navbar main body -->
            <ul class="navbar-nav">
                <li class="nav-item"  onclick="darkmode()">
                    <a class="nav-link" href="#">
                        <i class="fa fa-moon-o" id="dark-mode-toggler"></i>
                    </a>
                </li>
                <!-- TODO : add to script  -->
                <script>
                    function darkmode() {
                        var element = document.body;
                        var toggler = document.getElementById('dark-mode-toggler');
                        element.classList.toggle("dark");
                        if (element.classList.contains("dark")) {
                            toggler.classList.remove("fa-moon-o");
                            toggler.classList.add("fa-sun-o");
                        } else {
                            toggler.classList.remove("fa-sun-o");
                            toggler.classList.add("fa-moon-o");
                        }
                    }

                </script>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="ti-plus"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-3">
                            <h6 class="font-size-13 m-b-15">دسترسی سریع</h6>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('admin.products.create') }}">
                                        <div class="d-flex flex-column font-size-13 bg-danger-bright bg-hover pt-3 pb-3 border-radius-1 text-danger text-center mb-3">
                                            <i class="fa fa-shopping-bag mb-2 font-size-20"></i>
                                            محصول جدید
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('admin.users.create') }}">
                                        <div class="d-flex flex-column font-size-13 bg-info-bright bg-hover pt-3 pb-3 border-radius-1 text-info text-center mb-3">
                                            <i class="fa fa-user mb-2 font-size-20"></i>
                                            کاربر جدید
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('admin.categories.index') }}">
                                        <div class="d-flex flex-column font-size-13 bg-warning-bright bg-hover pt-3 pb-3 border-radius-1 text-warning text-center">
                                            <i class="fa fa-th-list mb-2 font-size-20"></i>
                                            دسته بندی جدید
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('admin.attributes.index') }}">
                                        <div class="d-flex flex-column font-size-13 bg-secondary-bright bg-hover pt-3 pb-3 border-radius-1 text-secondary text-center">
                                            <i class="fa fa-th-list mb-2 font-size-20"></i>
                                            ویژگی جدید
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- end::navbar main body -->

            <div class="d-flex align-items-center">
                <!-- begin::navbar navigation toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navigation-toggler">
                    <a href="#">
                        <i class="ti-menu"></i>
                    </a>
                </div>
                <!-- end::navbar navigation toggler -->

                <!-- begin::navbar toggler -->
                <div class="d-xl-none d-lg-none d-sm-block navbar-toggler">
                    <a href="#">
                        <i class="ti-arrow-down"></i>
                    </a>
                </div>
                <!-- end::navbar toggler -->
            </div>
        </div>

    </div>
    <!-- end::header body -->

</div>
<!-- end::header -->
