<!--==================== Header Section Start ====================-->
<header class="ecommerce-header">
    <!-- static nav desktop -->
    <div class="main-nav py-4 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <nav class="navbar navbar-expand-lg nav-dark nav-primary-hover">
                        <a class="navbar-brand" href="{{ route('home.index') }}"><img class="nav-logo" src="{{ asset('storage/logo/17.png') }}" alt="Image not found !"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="flaticon-menu-2 flat-small text-primary"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-xxl-5">
                                <li class="nav-item dropdown {{ request()->routeIs('home.index') ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="{{ route('home.index') }}">خانه</a>
                                </li>
                                <li class="nav-item dropdown mega-dropdown {{ request()->routeIs('home.shop') ? 'active' : '' }}">
                                    <a class="nav-link dropdown-toggle" href="{{ route('home.shop') }}">فروشگاه</a>
                                    <!-- TODO : delete if not want -->
                                    <!-- <ul class="dropdown-menu mega-dropdown-menu">
                                        <li class="mega-container">
                                            <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1">
                                                <div class="col">
                                                    <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">طرح بندی شبکه ای محصولات</span>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="shop-grid-full.html">نمای تمام صفحه</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">لیست محصولات پیش فرض</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-left-sidebar-1.html">فروشگاه نوار کناری سمت چپ 1</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-left-sidebar-2.html">فروشگاه نوار کناری سمت چپ 2</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-left-sidebar-3.html">فروشگاه نوار کناری سمت چپ 3</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-right-sidebar-1.html">فروشگاه نوار کناری سمت راست 1</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-right-sidebar-2.html">فروشگاه نوار کناری سمت راست 2</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid-right-sidebar-3.html">فروشگاه نوار کناری سمت راست 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">طرح بندی لیست محصولات</span>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="shop-list-full.html">نمای تمام صفحه</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-left-sidebar.html">لیست محصولات پیش فرض</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-left-sidebar-1.html">فروشگاه نوار کناری سمت چپ 1</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-left-sidebar-2.html">فروشگاه نوار کناری سمت چپ 2</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-left-sidebar-3.html">فروشگاه نوار کناری سمت چپ 3</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-right-sidebar-1.html">فروشگاه نوار کناری سمت راست 1</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-right-sidebar-2.html">فروشگاه نوار کناری سمت راست 2</a></li>
                                                        <li><a class="dropdown-item" href="shop-list-right-sidebar-3.html">فروشگاه نوار کناری سمت راست 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">صفحات فروشگاه</span>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="{{ route('home.cart') }}">سبد خرید</a></li>
                                                        <li><a class="dropdown-item" href="checkout.html">تسویه حساب</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('home.profile') }}">حساب کاربری</a></li>
                                                        <li><a class="dropdown-item" href="registration.html">ثبت نام</a></li>
                                                        <li><a class="dropdown-item" href="wishlist.html">لیست موردعلاقه</a></li>
                                                        <li><a class="dropdown-item" href="single-shop.html">جزئیات محصول 1</a></li>
                                                        <li><a class="dropdown-item" href="single-shop-2.html">جزئیات محصول 2</a></li>
                                                        <li><a class="dropdown-item" href="single-shop-3.html">جزئیات محصول 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">افکت هاور</span>
                                                    <ul>
                                                        <li><a class="dropdown-item" href="hover-bg-light.html">پس زمینه روشن</a></li>
                                                        <li><a class="dropdown-item" href="hover-shadow-active.html">سایه</a></li>
                                                        <li><a class="dropdown-item" href="hover-image-zoom.html">بزرگنمایی تصویر</a></li>
                                                        <li><a class="dropdown-item" href="hover-btn-slide-1.html">نوار سبد خرید نوع 1</a></li>
                                                        <li><a class="dropdown-item" href="hover-btn-slide-2.html">نوار سبد خرید نوع 2</a></li>
                                                        <li><a class="dropdown-item" href="hover-btn-slide-3.html">نوار سبد خرید نوع 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item {{ request()->routeIs('home.feedback') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home.feedback') }}">پیشنهادات و انتقادات</a></li>
                                <li class="nav-item {{ request()->routeIs('home.contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home.contact') }}">تماس با ما</a></li>
                                <li class="nav-item {{ request()->routeIs('home.about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home.about') }}">درباره ما</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex h-100 justify-content-end">
                        <div class="product-search-one flex-grow-1 global-search touch-screen-view">
                            @if(request()->routeIs('home.shop'))
                                <div class="form-inline search-line-shape">
                                    <input type="text" form="filter" class="form-control search-field text-light" name="search" value="{{ request()->search }}" placeholder="جستجو کالا...">
                                    <button type="submit" form="filter" class="search-submit">
                                        <i class="flaticon-search flat-mini"></i>
                                    </button>
                                </div>
                            @else
                                <form class="form-inline search-line-shape" action="{{ route('home.shop') }}">
                                    <input type="text" class="form-control search-field text-light" name="search" placeholder="جستجو کالا...">
                                    <button type="submit" class="search-submit">
                                        <i class="flaticon-search flat-mini"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                        <div class="margin-right-1 d-flex align-items-center justify-content-end h-100 me-5">
                            <div class="wishlist-view">
                                <a href="{{ route('home.profile') }}" class="position-relative top-quantity d-flex align-items-center text-decoration-none @if(Auth::check() && auth()->user()->vip ) text-dark bg-primary @else text-white @endif">
                                    <i class="flaticon-user-3 flat-mini mx-auto text-dark"></i>
                                </a>
                            </div>
                            <div class="wishlist-view">
                                <a href="{{ route('home.wishlist') }}" class="position-relative top-quantity d-flex align-items-center text-white text-decoration-none">
                                    <i class="flaticon-like flat-mini text-dark mx-auto"></i>
                                </a>
                            </div>
                            <div class="search-view d-xxl-none">
                                <a href="#" class="search-pop top-quantity d-flex align-items-center text-decoration-none">
                                    <i class="flaticon-search flat-mini text-dark mx-auto"></i>
                                </a>
                            </div>
                            <div class="header-cart-1">
                                <a href="{{ route('home.cart') }}" class="cart has-cart-data" title="View Cart">
                                    <div class="cart-icon"><i class="flaticon-shopping-cart flat-mini"></i>
                                        <span class="header-cart-count">{{ cart()->all()->count() }}</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <div class="cart-text">خرید</div>
                                        <span class="header-cart-count">تعداد (2)</span>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>78500<span class="woocommerce-Price-currencySymbol"> تومان</span></bdi>
                                        </span>
                                    </div>
                                </a>
                                <div class="cart-popup">
                                    <ul class="cart_list product_list_widget">
                                        @forelse(cart()->all() as $cart_item)
                                            @php($product = $cart_item['product'])
                                            <li class="mini-cart-item">
                                                <a href="{{ route('cart.remove', $product->id) }}" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                                <a href="{{ route('home.product', $product->id) }}" class="product-image"><img src="{{ $product->featuring_image()->image_url }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $product->name }}" /></a>
                                                <a href="{{ route('home.product', $product->id) }}" class="product-name">{{ $product->name }}</a>
                                                <div class="variation">
                                                    <span>دسته بندی:</span>
                                                    <a href="{{ route('home.shop', ['category' => $product->categories->first()->id]) }}" class="d-inline">{{ $product->categories->first()->name }}</a>
                                                </div>
                                                <div class="cart-item-quantity">
                                                    <span>تعداد: {{ $cart_item['quantity'] }}</span>
                                                </div>
                                            </li>
                                        @empty
                                            <li>
                                            <span class="text-dark font-sixteen">
                                                هیچ محصولی در سبد خرید وجود ندارد!
                                            </span>
                                            </li>
                                        @endforelse
                                    </ul>
                                    <div class="buttons">
                                        <a href="{{ route('home.cart') }}" class="btn btn-primary w-100">سبد خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sticky nav desktop -->
    <div class="header-sticky bg-dark py-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-3 col-6 order-lg-1">
                    <div class="d-flex align-items-center h-100 md-py-10">
                        <div class="nav-leftpush-overlay">
                            <nav class="navbar navbar-expand-lg nav-general nav-primary-hover">
                                <button type="button" class="push-nav-toggle d-lg-none border-0">
                                    <i class="flaticon-menu-2 flat-small text-primary"></i>
                                </button>
                                <div class="navbar-slide-push transation-this bg-dark">
                                    <div class="login-signup bg-dark d-flex justify-content-between py-10 px-20 align-items-center">
                                       @if(Auth::guest())
                                        <a href="{{ route('login') }}" class="d-flex align-items-center text-white">
                                            <i class="flaticon-user flat-small ms-1"></i>
                                            <span>ورود / ثبت نام</span>
                                        </a>
                                        @else
                                        <a href="{{ route('home.profile') }}" class="d-flex align-items-center text-white">
                                            <i class="flaticon-user flat-small ms-1"></i>
                                            <span> {{ auth()->user()->name }} - ورود به پروفایل</span>
                                        </a>
                                        @endif
                                        <span class="slide-nav-close"><i class="flaticon-cancel flat-mini text-danger"></i></span>
                                    </div>
                                    <hr class="bg-light m-0">
                                    <br>
                                    <div class="menu-and-category">
                                        <ul class="nav nav-pills wc-tabs" id="menu-and-category" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-push-menu-tab" data-bs-toggle="pill" href="#pills-push-menu" role="tab" aria-controls="pills-push-menu" aria-selected="true">
                                                    منو
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-push-categories-tab" data-bs-toggle="pill" href="#pills-push-categories" role="tab" aria-controls="pills-push-categories" aria-selected="true">
                                                    دسته بندی ها
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="menu-and-categoryContent">
                                            <div class="tab-pane fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--description" id="pills-push-menu" role="tabpanel" aria-labelledby="pills-push-menu-tab">
                                                <div class="push-navbar">
                                                    <ul class="navbar-nav">
                                                        <li class="nav-item highlight-item"><a class="nav-link" href="#">پیشنهادهای روز</a></li>
                                                        <li class="nav-item highlight-item"><a class="nav-link" href="#">کالاهای جدید</a></li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link" href="{{ route('home.index') }}">خانه</a>
                                                        </li>
                                                        <li class="nav-item dropdown mega-dropdown">
                                                            <a class="nav-link" href="{{ route('home.shop') }}">فروشگاه</a>
                                                        </li>
                                                        <li class="nav-item dropdown mega-dropdown">
                                                            <a class="nav-link" href="{{ route('home.feedback') }}">پیشنهادات و انتقادات</a>
                                                        </li>
                                                        <li class="nav-item dropdown mega-dropdown">
                                                            <a class="nav-link" href="{{ route('home.contact') }}">تماس با ما</a>
                                                        </li>
                                                        <li class="nav-item dropdown mega-dropdown">
                                                            <a class="nav-link" href="{{ route('home.about') }}">درباره ما</a>
                                                        </li>
                                                        <li class="nav-item dropdown mega-dropdown">
                                                            <form action="{{ route('logout') }}" method="post" class="m-0">
                                                                @csrf
                                                                <a href="javascript:void(0)" class="go-to-page">
                                                                    <button type="submit" class="btn btn-default text-danger w-100">
                                                                        خروج از سایت
                                                                    </button>
                                                                </a>
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-push-categories" role="tabpanel" aria-labelledby="pills-push-categories-tab">
                                                <div class="categories-menu">
                                                    <ul class="navbar-nav">
                                                        @each('partials.categories.header', \App\Models\Category::where('parent_id', 0)->get(), 'category')
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <a class="navbar-brand" href="{{ route('home.index') }}"><img class="nav-logo" src="{{ asset('storage') }}/logo/17.png" alt="Image not found !"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-3 col-6 order-lg-3">
                    <div class="margin-right-1 d-flex align-items-center justify-content-end h-100 md-py-10">
                        <div class="sign-in">
                            <a href="{{ route('home.profile') }}" class="position-relative top-quantity d-flex align-items-center text-decoration-none @if(Auth::check() && auth()->user()->vip ) text-dark bg-primary @else text-white @endif">
                                <i class="flaticon-user-3 flat-mini text-dark mx-auto"></i>
                            </a>
                        </div>
{{--                        <div class="sign-in position-relative font-general my-account-dropdown">--}}
{{--                            <a href="{{ route('home.profile') }}" class="has-dropdown d-flex align-items-center text-dark text-decoration-none" title="My Account">--}}
{{--                                <i class="flaticon-user-3 flat-mini mx-auto me-1"></i>--}}
{{--                            </a>--}}
{{--                            <ul class="my-account-popup">--}}
{{--                                <li><a href="{{ route('home.profile') }}"><span class="menu-item-text">حساب کاربری</span></a></li>--}}
{{--                                <li><a href="{{ route('home.wishlist') }}"><span class="menu-item-text">موردعلاقه های من</span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="search-view d-xxl-none">
                            <a href="#" class="search-pop top-quantity d-flex align-items-center text-decoration-none">
                                <i class="flaticon-search flat-mini text-dark mx-auto"></i>
                            </a>
                        </div>
                        <div class="wishlist-view">
                            <a href="{{ route('home.wishlist') }}" class="position-relative top-quantity d-flex align-items-center text-white text-decoration-none">
                                <i class="flaticon-like flat-mini text-dark mx-auto"></i>
                            </a>
                        </div>
                        <div class="header-cart-1">
                            <a href="{{ route('home.cart') }}" class="cart has-cart-data" title="View Cart">
                                <div class="cart-icon"><i class="flaticon-shopping-cart flat-mini"></i>
                                    <span class="header-cart-count">{{ cart()->all()->count() }}</span>
                                </div>
                                <div class="cart-wrap">
                                    <div class="cart-text">خرید</div>
                                    <span class="header-cart-count">تعداد (2)</span>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi>78500<span class="woocommerce-Price-currencySymbol">ت</span></bdi>
                                    </span>
                                </div>
                            </a>
                            <div class="cart-popup">
                                <ul class="cart_list product_list_widget">
                                    @forelse(cart()->all() as $cart_item)
                                        @php($product = $cart_item['product'])
                                        <li class="mini-cart-item">
                                            <a href="{{ route('cart.remove', $product->id) }}" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                            <a href="{{ route('home.product', $product->id) }}" class="product-image"><img src="{{ $product->featuring_image()->image_url }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $product->name }}" /></a>
                                            <a href="{{ route('home.product', $product->id) }}" class="product-name">{{ $product->name }}</a>
                                            <div class="variation">
                                                <span>دسته بندی:</span>
                                                <a href="{{ route('home.shop', ['category' => $product->categories->first()->id]) }}" class="d-inline">{{ $product->categories->first()->name }}</a>
                                            </div>
                                            <div class="cart-item-quantity">
                                                <span>تعداد: {{ $cart_item['quantity'] }}</span>
                                            </div>
                                        </li>
                                    @empty
                                        <li>
                                            <span class="text-dark font-sixteen">
                                                هیچ محصولی در سبد خرید وجود ندارد!
                                            </span>
                                        </li>
                                    @endforelse
                                </ul>
                                <div class="buttons">
                                    <a href="{{ route('home.cart') }}" class="btn btn-primary w-100 mt-2">سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-12 order-lg-2">
                    <div class="product-search-one global-search touch-screen-view">
                        @if(request()->routeIs('home.shop'))
                            <div class="form-inline search-pill-shape">
                                <input type="text" form="filter" class="form-control search-field" name="search" placeholder="جستجو کالا...">
                                <div class="select-appearance-none">
                                    <select class="form-control" form="filter" name="category">
                                        <option value selected>همه دسته بندی</option>
                                        @foreach(\App\Models\Category::where('parent_id', 0)->get() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" form="filter" class="search-submit">
                                    <i class="flaticon-search flat-mini text-white"></i>
                                </button>
                            </div>
                        @else
                            <form class="form-inline search-pill-shape" action="{{ route('home.shop') }}">
                                <input type="text" class="form-control search-field" name="search" placeholder="جستجو کالا...">
                                <div class="select-appearance-none">
                                    <select class="form-control" name="category">
                                        <option value selected>همه دسته بندی</option>
                                        @foreach(\App\Models\Category::where('parent_id', 0)->get() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="search-submit">
                                    <i class="flaticon-search flat-mini text-white"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--==================== Header Section End ====================-->

<!-- search modal start  -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                @if(request()->routeIs('home.shop'))
                    <div class="row">
                        <div class="form-group col-8">
                            <input type="text" form="filter" name="search" class="form-control" placeholder="جستجو کالا...">
                        </div>
                        <div class="form-group col-4">
                            <button type="submit" form="filter" class="btn btn-primary">
                                <i class="flaticon-search flat-mini mx-auto"></i>
                            </button>
                        </div>
                    </div>
                @else
                    <form action="{{ route('home.shop') }}" class="row">
                        <div class="form-group col-8">
                            <input type="text" name="search" class="form-control" placeholder="جستجو کالا...">
                        </div>
                        <div class="form-group col-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="flaticon-search flat-mini mx-auto"></i>
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- search modal end  -->
<!-- cart modal start  -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="cart-modal-content">
                    <div class="cart-modal-body">
                        <ul>
                            @forelse(cart()->all() as $cart_item)
                                @php($product = $cart_item['product'])
                                <li class="row align-items-center">
                                    <a href="{{ route('home.product', $product->id) }}" class="product-image col-3"><img src="{{ $product->featuring_image()->image_url }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $product->name }}" /></a>
                                    <div class="col-7">
                                        <a href="{{ route('home.product', $product->id) }}" class="product-name">{{ $product->name }}</a>
                                        <div class="cart-item-quantity">
                                            <span>تعداد: {{ $cart_item['quantity'] }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('cart.remove', $product->id) }}" class="col-2 text-center text-danger" title="Remove this item"><i class="fas fa-times"></i></a>
                                </li>
                                @unless($loop->last)
                                    <hr class="my-2">
                                @endunless
                            @empty
                                <li>
                                    <span class="text-dark font-sixteen">
                                        هیچ محصولی در سبد خرید وجود ندارد!
                                    </span>
                                </li>
                            @endforelse
                        </ul>
                        <div class="buttons">
                            <a href="{{ route('home.cart') }}" class="btn btn-primary w-100 mt-2">سبد خرید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart modal end  -->
<!-- mobile header sticky bottom start-->
<div class="wrap d-block d-md-none">
    <nav class="menu">
        <div class="list">
            <div class="overlay">
                <span class="overlay-recent"></span>
                <span class="overlay-favourite"></span>
                <span class="overlay-cloud"></span>
                <span class="overlay-settings"></span>
            </div>
            <div class="link-wrap">
                <label for="menu" class="push-nav-toggle">
                    <i class="fa fa-bars"></i>
                    <span>منو</span>
                </label>
                <label for="cart" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <i class="fa fa-shopping-bag"></i>
                    <span>سبدخرید</span>
                </label>
                <label for="search" class="" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fa fa-search"></i>
                    <span>جستجو</span>
                </label>
                @if(Auth::check())
                    <label for="profile" onclick="location.href='{{ route('home.profile') }}'">
                        <i class="fa fa-user @if(Auth::check() && auth()->user()->vip ) text-primary @endif"></i>
                        <span>پروفایل</span>
                    </label>
                @else
                    <label for="profile" onclick="location.href='{{ route('login') }}'">
                        <i class="fa fa-sign-in-alt"></i>
                        <span>ورود</span>
                    </label>
                @endif
                @if(request()->routeIs('home.shop'))
                    <label for="filter" class="" data-bs-toggle="modal" data-bs-target="#filter-modal">
                        <i class="fa fa-filter"></i>
                        <span>فیلترها</span>
                    </label>
                @endif
            </div>
        </div>
    </nav>
</div>
    <!-- TODO : add to styles  -->
<style>

    .wrap{
        width: 100%;
        max-width: 410px;
        margin: 50px auto 0;
        position: fixed;
        z-index: 999;
        bottom: 0;
    }

    .list{
        width:100%;
        height:60px;
        padding:5px;
        overflow:hidden;
        background:#444;
        position:relative;
    }
    .list .link-wrap{
        width:100%;
        height:100%;
        display:table;
    }

    .list .link-wrap>label{
        color:#eee;
        z-index:999;
        width:100px;
        font-size:13px;
        cursor:pointer;
        padding:4px 12px;
        text-align:center;
        position:relative;
        display:table-cell;
        vertical-align:middle;
        text-transform:uppercase;
    }
    .list .link-wrap>label>i,
    .list .link-wrap>label>span{
        transition:all .2s ease-in-out 0s;
    }
    .list .link-wrap>label>i{
        font-size:18px;
        margin-bottom:5px;
    }
    .list .link-wrap>label>span{
        height:0;
        display:block;
        font-weight:500;
    }
    .list .link-wrap>label{
        transform:translateY(-10px);
    }
    .list .overlay{
        top:0;
        left:0;
        right:0;
        bottom:0;
        width:100%;
        height:60px;
        display:table;
        position:absolute;
    }
    .list .overlay>span{
        width:1%;
        position:relative;
        display:table-cell;
    }
    .list .overlay>span:after{
        top:50%;
        left:50%;
        content:'';
        width:20px;
        height:20px;
        margin-top:-10px;
        margin-left:-10px;
        border-radius:50%;
        position:absolute;
        background-color:#fff;
        transform:scale(0);
        transition:all .4s ease-in-out 0s;
    }
    @keyframes active{
        from{transform:scale(0)}
        to{transform:scale(40)}
    }
</style>
<script>

</script>
<!-- mobile header sticky bottom end-->
