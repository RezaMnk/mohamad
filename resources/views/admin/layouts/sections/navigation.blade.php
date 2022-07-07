<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" data-toggle="tooltip" title="داشبورد">
                <a href="#navigationDashboards" title="داشبوردها">
                    <i class="icon ti-pie-chart"></i>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}" data-toggle="tooltip" title="کاربران">
                <a href="#UserSubMenu" title="کاربران">
                    <i class="icon ti-user"></i>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.orders*') ? 'active' : '' }}" data-toggle="tooltip" title="{{ \App\Models\Order::count('unapproved') }} سفارش تایید نشده">
                <a href="#OrdersSubMenu" title="سفارشات">
                    <i class="icon ti-layout-list-thumb"></i>
                    <span class="badge badge-warning">{{ \App\Models\Order::count('unapproved') > 0 ?? '' }}</span>
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
            <li id="title-toggler" data-toggle="tooltip" title="" data-original-title="بستن منو کاربری" onclick="menu_toggler()">
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
                <a class="{{ request()->routeIs('admin.index') ? 'active' : '' }} mb-2" href="{{ route('admin.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-primary text-white mr-3">
                                <i class="fa fa-dashboard"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font mb-0">داشبورد</h6>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.unapproved') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-success text-white mr-3">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">سفارشات</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Order::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.users.unapproved') ? 'active' : '' }} mb-2" href="{{ route('admin.users.unapproved') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-warning text-white mr-3">
                                <i class="fa fa-user-times"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">کاربران</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\User::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }} mb-2" href="{{ route('admin.products.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-danger text-white mr-3">
                                <i class="fa fa-dropbox"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">محصولات</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Product::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- user sub menu -->
        <ul id="UserSubMenu" class="{{ request()->routeIs('admin.users*') ? 'navigation-active' : '' }}">
            <li class="navigation-divider">کاربران</li>
            <li>
                <a class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }} mb-2" href="{{ route('admin.users.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-success text-white mr-3">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">همه کاربران</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\User::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.users.unapproved') ? 'active' : '' }} mb-2" href="{{ route('admin.users.unapproved') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-warning text-white mr-3">
                                <i class="fa fa-user-times"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">کاربران تایید نشده</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\User::count('zarin', false) }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.users.vip') ? 'active' : '' }} mb-2" href="{{ route('admin.users.vip') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-info text-white mr-3">
                                <i class="fa fa-user-plus"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">کاربران ویژه</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\User::count('vip') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- user sub menu  -->
        <!-- Orders -->
        <ul id="OrdersSubMenu" class="{{ request()->routeIs('admin.orders*') ? 'navigation-active' : '' }}">
            <li class="navigation-divider">سفارشات</li>
            <li>
                <a class="{{ request()->routeIs('admin.orders.index') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-primary text-white mr-3">
                                <i class="fa fa-list"></i>
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
                                <i class="fa fa-check"></i>
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
                            <div class="icon-block bg-warning text-white mr-3">
                                <i class="fa fa-clock-o"></i>
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
                            <div class="icon-block bg-secondary text-white mr-3">
                                <i class="fa fa-money"></i>
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
                            <div class="icon-block bg-info text-white mr-3">
                                <i class="fa fa-dollar"></i>
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
                <a class="{{ request()->routeIs('admin.orders.index') ? 'active' : '' }} mb-2" href="{{ route('admin.orders.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-danger text-white mr-3">
                                <i class="fa fa-close"></i>
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
        <ul id="ProductsSubMenu" class="{{ request()->routeIs('admin.products*', 'admin.attributes*', 'admin.categories*',) ? 'navigation-active' : '' }}">
            <li class="navigation-divider">محصولات</li>
            <li>
                <a class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }} mb-2" href="{{ route('admin.products.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-primary text-white mr-3">
                                <i class="fa fa-dropbox"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">محصولات</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Product::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.categories.index') ? 'active' : '' }} mb-2" href="{{ route('admin.categories.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-success text-white mr-3">
                                <i class="fa fa-th-list"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">دسته بندی ها</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Category::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('admin.attributes.index') ? 'active' : '' }} mb-2" href="{{ route('admin.attributes.index') }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="icon-block bg-warning text-white mr-3">
                                <i class="fa fa-list"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-size-13 line-height-22 primary-font m-b-5">ویژگی ها</h6>
                            <h4 class="m-b-0 primary-font font-weight-bold line-height-30">{{ \App\Models\Attribute::count('all') }}</h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end::navigation -->
