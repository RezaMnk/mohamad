<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" data-toggle="tooltip" title="داشبورد">
                <a href="#navigationDashboards" title="داشبوردها">
                    <i class="icon ti-pie-chart"></i>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}" data-toggle="tooltip" title="کاربران">
                <a href="#UserSubMenu" title="کاربران">
                    <i class="icon ti-user"></i>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.orders*') ? 'active' : '' }}" data-toggle="tooltip" title="سفارشات">
                <a href="#OrdersSubMenu" title="سفارشات">
                    <i class="icon ti-layout-list-thumb"></i>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.products*') ? 'active' : '' }}" data-toggle="tooltip" title="محصولات">
                <a href="#ProductsSubMenu" title="محصولات">
                    <i class="icon ti-bag"></i>
                </a>
            </li>
        </ul>
        <!-- setting ul  -->
        <ul>
            <li id="title-toggler" data-toggle="tooltip" title="" data-original-title="بستن منو کاربری"  onclick="menu_toggler()">
                <a href="#" class="go-to-page">
                    <i class="icon ti-arrow-right" id="menu-toggler"></i>
                </a>
            </li>
            <script>
                // TODO : add to script file
                function menu_toggler() {
                    var element = document.body;
                    var toggler = document.getElementById('menu-toggler');
                    var title = document.getElementById('title-toggler');
                    element.classList.toggle("small-navigation");
                    if (element.classList.contains("small-navigation")) {
                        toggler.classList.remove("ti-arrow-right");
                        toggler.classList.add("ti-arrow-left");
                        title.removeAttribute("data-original-title");
                        title.setAttribute("data-original-title", "باز کردن منو کاربری");
                    } else {
                        title.removeAttribute("data-original-title");
                        title.setAttribute("data-original-title", "بستن منو کاربری");
                        toggler.classList.remove("ti-arrow-left");
                        toggler.classList.add("ti-arrow-right");
                    }
                }
            </script>
            <li data-toggle="tooltip" title="" data-original-title="خروج">
                <a href="login.html" class="go-to-page">
                    <i class="icon ti-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="navigationDashboards" class="{{ request()->routeIs('admin.index') ? 'navigation-active' : '' }}">
            <li class="navigation-divider">صفحه اصلی</li>
            <li>
                <a class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{ route('admin.index') }}">صفحه اصلی</a>
            </li>
        </ul>
        <!-- user sub menu -->
        <ul id="UserSubMenu" class="{{ request()->routeIs('admin.users*') ? 'navigation-active' : '' }}">
            <li class="navigation-divider">کاربران</li>
            <li>
                <a class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">همه کاربران</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.users.unapproved') ? 'active' : '' }}" href="{{ route('admin.users.unapproved') }}">تایید کاربران</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.users.vip') ? 'active' : '' }}" href="{{ route('admin.users.vip') }}">مشتریان ویژه</a>
            </li>
            <li>
                <a href="#" class="mb-2">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-warning text-white mr-3">
                                <i class="ti-bar-chart"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">تعداد کاربران</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">423</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="mb-2">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-success text-white mr-3">
                                <i class="ti-email"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">تایید نشده</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">214</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-info text-white mr-3">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">باشگاه مشتریان</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">512</h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- user sub menu  -->
        <!-- Orders -->
        <ul id="OrdersSubMenu" class="{{ request()->routeIs('admin.orders*') ? 'navigation-active' : '' }}">
            <li class="navigation-divider">سفارشات</li>
{{--            <li>--}}
{{--                <a class="{{ request()->routeIs('admin.orders.index') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">همه سفارشات</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="{{ request()->routeIs('admin.orders.approved') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">تکمیل شده</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="{{ request()->routeIs('admin.orders.unapproved') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">در انتظار تایید</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="{{ request()->routeIs('admin.orders.priced') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">در انتظار پرداخت</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="{{ request()->routeIs('admin.orders.paid') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">پرداخت شده</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="{{ request()->routeIs('admin.orders.canceled') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">لغو شده</a>--}}
{{--            </li>--}}
            <li>
                <a class="{{ request()->routeIs('admin.orders.index') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-warning text-white mr-3">
                                <i class="ti-bar-chart"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">همه سفارشات</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.approved') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-success text-white mr-3">
                                <i class="ti-email"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">تکمیل شده</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('approved') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.unapproved') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-info text-white mr-3">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">در انتظار تایید</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('unapproved') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.priced') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-info text-white mr-3">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">در انتظار پرداخت</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('priced') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.paid') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-primary text-white mr-3">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">پرداخت شده</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('paid') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.canceled') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-danger text-white mr-3">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">لغو شده</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('canceled') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- Orders  -->
        <!-- Products -->
        <ul id="ProductsSubMenu" class="{{ request()->routeIs('admin.products*') ? 'navigation-active' : '' }}">
            <li class="navigation-divider">محصولات</li>
            <li>
                <a class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">محصولات</a>
            </li>
            <!-- TODO: add product categories routes  -->
            <li>
            <a class="{{ request()->routeIs('admin.categories.index') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">دسته بندی محصولات</a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">ویژگی محصولات</a>
            </li>
        </ul>
    </div>
</div>
<!-- end::navigation -->
