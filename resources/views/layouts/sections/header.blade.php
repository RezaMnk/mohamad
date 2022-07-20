<!--==================== Header Section Start ====================-->
<header class="ecommerce-header">
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
                                                        <li><a class="dropdown-item" href="cart.html">سبد خرید</a></li>
                                                        <li><a class="dropdown-item" href="checkout.html">تسویه حساب</a></li>
                                                        <li><a class="dropdown-item" href="my-account.html">حساب کاربری</a></li>
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
                                    <button type="submit" name="submit" class="search-submit">
                                        <i class="flaticon-search flat-mini"></i>
                                    </button>
                                </div>
                            @else
                                <form class="form-inline search-line-shape" action="{{ route('home.shop') }}">
                                    <input type="text" class="form-control search-field text-light" name="search" placeholder="جستجو کالا...">
                                    <button type="submit" name="submit" class="search-submit">
                                        <i class="flaticon-search flat-mini"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                        <div class="margin-right-1 d-flex align-items-center justify-content-end h-100 me-5">
                            <div class="wishlist-view">
                                <a href="{{ route('home.profile') }}" class="position-relative top-quantity d-flex align-items-center text-white text-decoration-none">
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
                                    <div class="cart-icon"><i class="flaticon-shopping-cart flat-mini"></i> <span class="header-cart-count">2</span></div>
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
                                        <li class="mini-cart-item">
                                            <a href="#" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                            <a href="#" class="product-image"><img src="{{ asset('storage/images/products/squire-95.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Cart product" /></a>
                                            <a href="#" class="product-name">پیراهن مشکی زنانه</a>
                                            <div class="woocommerce-product-rating">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9 (68)</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="variation">
                                                <span>دسته بندی:</span>
                                                <span>پوشاک زنانه</span>
                                            </div>
                                            <div class="cart-item-quantity">
                                                XL
                                                <span class="woocommerce-Price-amount amount">
                                                            <bdi>24000 <span class="woocommerce-Price-currencySymbol"></span>تومان</bdi>
                                                        </span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-item">
                                            <a href="#" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                            <a href="#" class="product-image"><img src="{{ asset('storage/images/products/squire-105.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Cart product" /></a>
                                            <a href="#" class="product-name">کُت لی Blazar</a>
                                            <div class="woocommerce-product-rating">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (73)</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="variation">
                                                <span>دسته بندی:</span>
                                                <span>پوشاک مردانه</span>
                                            </div>
                                            <div class="cart-item-quantity">
                                                L
                                                <span class="woocommerce-Price-amount amount">
                                                            <bdi>38000 <span class="woocommerce-Price-currencySymbol"></span>تومان</bdi>
                                                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="total-cart">
                                        <div class="title">جمع کل:</div>
                                        <div class="price">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>62000</span> تومان
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ route('home.cart') }}" class="btn btn-primary rounded-0 view-cart w-100">سبد خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <div class="navbar-slide-push transation-this">
                                    <div class="login-signup bg-secondary d-flex justify-content-between py-10 px-20 align-items-center">
                                        <a href="registration.html" class="d-flex align-items-center text-white">
                                            <i class="flaticon-user flat-small ms-1"></i>
                                            <span>ورود / ثبت نام</span>
                                        </a>
                                        <span class="slide-nav-close"><i class="flaticon-cancel flat-mini text-white"></i></span>
                                    </div>
                                    <div class="menu-and-category">
                                        <ul class="nav nav-pills wc-tabs" id="menu-and-category" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-push-menu-tab" data-bs-toggle="pill" href="#pills-push-menu" role="tab" aria-controls="pills-push-menu" aria-selected="true">منو</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-push-categories-tab" data-bs-toggle="pill" href="#pills-push-categories" role="tab" aria-controls="pills-push-categories" aria-selected="true">
                                                    دسته بندی کالاها
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
                                                            <a class="nav-link dropdown-toggle" href="index.html">خانه</a>
                                                            <!-- <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="index.html">دموهای صفحه اصلی</a></li>
                                                                <li><a class="dropdown-item" href="index-minimal.html">پیش فرض</a></li>
                                                                <li><a class="dropdown-item" href="index-watches.html">ساعت مچی</a></li>
                                                                <li><a class="dropdown-item" href="index-fatloss.html">پزشکی</a></li>
                                                                <li><a class="dropdown-item" href="index-handicruft.html">هنرهای دستی</a></li>
                                                                <li><a class="dropdown-item" href="index-food-corner.html">رستوران</a></li>
                                                                <li><a class="dropdown-item" href="index-classic.html">کلاسیک</a></li>
                                                                <li><a class="dropdown-item" href="index-optical-shop.html">عینک</a></li>
                                                                <li><a class="dropdown-item" href="index-furniture-store.html">مبلمان</a></li>
                                                                <li><a class="dropdown-item" href="index-grocery-store.html">مواد غذایی</a></li>
                                                                <li><a class="dropdown-item" href="index-cosmetic-store.html">لوازم آرایشی</a></li>
                                                                <li><a class="dropdown-item" href="index-women-fashion.html">فشن و مُد زنانه</a></li>
                                                                <li><a class="dropdown-item" href="index-pet-shop.html">حیوانات خانگی</a></li>
                                                                <li><a class="dropdown-item" href="index-man-fashion.html">فشن و مُد مردانه</a></li>
                                                                <li><a class="dropdown-item" href="index-electronic.html">لوازم الکترونیکی</a></li>
                                                                <li><a class="dropdown-item" href="index-standard.html">استاندارد</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <li class="nav-item dropdown mega-dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#">فروشگاه</a>
                                                            <ul class="dropdown-menu mega-dropdown-menu">
                                                                <li class="mega-container">
                                                                    <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1">
                                                                        <div class="col">
                                                                            <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">طرح بندی شبکه ای محصولات</span>
                                                                            <!-- <ul>
                                                                                <li><a class="dropdown-item" href="shop-grid-full.html">نمای تمام صفحه</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">لیست محصولات پیش فرض</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-left-sidebar-1.html">فروشگاه نوار کناری سمت چپ 1</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-left-sidebar-2.html">فروشگاه نوار کناری سمت چپ 2</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-left-sidebar-3.html">فروشگاه نوار کناری سمت چپ 3</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-right-sidebar-1.html">فروشگاه نوار کناری سمت راست 1</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-right-sidebar-2.html">فروشگاه نوار کناری سمت راست 2</a></li>
                                                                                <li><a class="dropdown-item" href="shop-grid-right-sidebar-3.html">فروشگاه نوار کناری سمت راست 3</a></li>
                                                                            </ul> -->
                                                                        </div>
                                                                        <div class="col">
                                                                            <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">طرح بندی لیست محصولات</span>
                                                                            <!-- <ul>
                                                                                <li><a class="dropdown-item" href="shop-list-full.html">نمای تمام صفحه</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-left-sidebar.html">لیست محصولات پیش فرض</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-left-sidebar-1.html">فروشگاه نوار کناری سمت چپ 1</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-left-sidebar-2.html">فروشگاه نوار کناری سمت چپ 2</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-left-sidebar-3.html">فروشگاه نوار کناری سمت چپ 3</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-right-sidebar-1.html">فروشگاه نوار کناری سمت راست 1</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-right-sidebar-2.html">فروشگاه نوار کناری سمت راست 2</a></li>
                                                                                <li><a class="dropdown-item" href="shop-list-right-sidebar-3.html">فروشگاه نوار کناری سمت راست 3</a></li>
                                                                            </ul> -->
                                                                        </div>
                                                                        <div class="col">
                                                                            <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">صفحات فروشگاه</span>
                                                                            <!-- <ul>
                                                                                <li><a class="dropdown-item" href="cart.html">سبد خرید</a></li>
                                                                                <li><a class="dropdown-item" href="checkout.html">تسویه حساب</a></li>
                                                                                <li><a class="dropdown-item" href="my-account.html">حساب کاربری</a></li>
                                                                                <li><a class="dropdown-item" href="registration.html">ثبت نام</a></li>
                                                                                <li><a class="dropdown-item" href="wishlist.html">لیست موردعلاقه</a></li>
                                                                                <li><a class="dropdown-item" href="single-shop.html">جزئیات محصول 1</a></li>
                                                                                <li><a class="dropdown-item" href="single-shop-2.html">جزئیات محصول 2</a></li>
                                                                                <li><a class="dropdown-item" href="single-shop-3.html">جزئیات محصول 3</a></li>
                                                                            </ul> -->
                                                                        </div>
                                                                        <div class="col">
                                                                            <span class="d-inline-block px-3 font-600 text-uppercase text-secondary pb-2">افکت هاور</span>
                                                                            <!-- <ul>
                                                                                <li><a class="dropdown-item" href="hover-bg-light.html">پس زمینه روشن</a></li>
                                                                                <li><a class="dropdown-item" href="hover-shadow-active.html">سایه</a></li>
                                                                                <li><a class="dropdown-item" href="hover-image-zoom.html">بزرگنمایی تصویر</a></li>
                                                                                <li><a class="dropdown-item" href="hover-btn-slide-1.html">نوار سبد خرید نوع 1</a></li>
                                                                                <li><a class="dropdown-item" href="hover-btn-slide-2.html">نوار سبد خرید نوع 2</a></li>
                                                                                <li><a class="dropdown-item" href="hover-btn-slide-3.html">نوار سبد خرید نوع 3</a></li>
                                                                            </ul> -->
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!-- <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#">صفحات</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="portfolio-filter-column-four.html">نمونه کار</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="portfolio-column-three.html">سه ستون</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-column-four.html">چهار ستون</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-full-width.html">تمام صفحه</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-filter-column-three.html">سه ستون با فیلتر جستجو</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-filter-column-four.html">چهار ستون با فیلتر جستجو</a></li>
                                                                        <li><a class="dropdown-item" href="portfolio-single-slider-layout.html">جزئیات تصویر با اسلایدر</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="general-support.html">راهنما و پشتیبانی</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="how-it-work.html">سابقه فعالیت</a></li>
                                                                        <li><a class="dropdown-item" href="general-support.html">پشتیبانی</a></li>
                                                                        <li><a class="dropdown-item" href="help-center.html">مرکز پشتیبانی</a></li>
                                                                        <li><a class="dropdown-item" href="support-article-details.html">سوالات متداول</a></li>
                                                                        <li><a class="dropdown-item" href="terms-and-condition.html">قوانین و شرایط</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="about-owner.html">درباره فروشنده</a></li>
                                                                <li><a class="dropdown-item" href="about.html">درباره ما نوع 1</a></li>
                                                                <li><a class="dropdown-item" href="about-2.html">درباره ما نوع 2</a></li>
                                                                <li><a class="dropdown-item" href="service.html">خدمات</a></li>
                                                                <li><a class="dropdown-item" href="gallery.html">گالری تصاویر</a></li>
                                                                <li><a class="dropdown-item" href="404.html">صفحه 404</a></li>
                                                            </ul>
                                                        </li> -->
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="blog-grid-left-sidebar.html">وبلاگ</a>
                                                            <!-- <ul class="dropdown-menu">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="blog-grid-modern.html">طرح بندی شبکه ای</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-grid-modern.html">پیش فرض</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-left-sidebar.html">وبلاگ نوار کناری سمت چپ</a></li>
                                                                        <li><a class="dropdown-item" href="blog-grid-right-sidebar.html">وبلاگ نوار کناری سمت راست</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="blog-list-modern.html">طرح بندی لیستی</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-list-modern.html">پیش فرض</a></li>
                                                                        <li><a class="dropdown-item" href="blog-list-left-sidebar.html">وبلاگ نوار کناری سمت چپ</a></li>
                                                                        <li><a class="dropdown-item" href="blog-list-right-sidebar.html">وبلاگ نوار کناری سمت راست</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="blog-single-modern.html">جزئیات وبلاگ</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="blog-single-modern.html">پیش فرض</a></li>
                                                                        <li><a class="dropdown-item" href="blog-single-left-sidebar.html">وبلاگ نوار کناری سمت چپ</a></li>
                                                                        <li><a class="dropdown-item" href="blog-single-right-sidebar.html">وبلاگ نوار کناری سمت راست</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="blog-missionary-grid.html">طرح بندی شبکه ای نوع 2</a></li>
                                                                <li><a class="dropdown-item" href="blog-video-grid.html">نمایش ویدئو</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#">المان های دیگر</a>
                                                            <!-- <ul class="dropdown-menu">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">لیست محصولات</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="element-product-grid-view.html">نمایش شبکه ای</a></li>
                                                                        <li><a class="dropdown-item" href="element-product-list-view.html">نمایش لیستی</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="element-carousel.html">اسلاید محصولات</a></li>
                                                                <li><a class="dropdown-item" href="element-tab.html">تب محصولات</a></li>
                                                                <li><a class="dropdown-item" href="element-typography.html">تایپوگرافی</a></li>
                                                                <li><a class="dropdown-item" href="element-banner.html">استایل بنر</a></li>
                                                                <li><a class="dropdown-item" href="element-accordions.html">منوی آکاردئون</a></li>
                                                                <li><a class="dropdown-item" href="element-flash-deal.html">شگفت انگیزها</a></li>
                                                                <li><a class="dropdown-item" href="element-product-category.html">دسته بندی محصولات</a></li>
                                                                <li><a class="dropdown-item" href="element-countdown.html">شمارنده</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link" href="contact.html">تماس با ما</a></li>
                                                    </ul>
                                                    <a href="#" class="p-20 d-block bg-secondary text-primary text-uppercase font-600 hover-text-primary">خرید قالب!</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-push-categories" role="tabpanel" aria-labelledby="pills-push-categories-tab">
                                                <div class="categories-menu">
                                                    <ul class="navbar-nav">
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#">پوشاک زنانه</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">پیراهن</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">تاپ</a></li>
                                                                        <li><a class="dropdown-item" href="#">تیشرت</a></li>
                                                                        <li><a class="dropdown-item" href="#">تونیک</a></li>
                                                                        <li><a class="dropdown-item" href="#">شلوار جین</a></li>
                                                                        <li><a class="dropdown-item" href="#">سرهمی</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="nav-item dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">پوشاک ورزشی</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">ژاکت و سویشرت</a></li>
                                                                        <li><a class="dropdown-item" href="#">کُت و شلوار</a></li>
                                                                        <li><a class="dropdown-item" href="#">کُت و جلیقه</a></li>
                                                                        <li><a class="dropdown-item" href="#">تاپ و شلوارک</a></li>
                                                                        <li><a class="dropdown-item" href="#">دمپایی و صندل</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="nav-item dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">لباس ورزشی</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">کیف و کوله پشتی</a></li>
                                                                        <li><a class="dropdown-item" href="#">کفش ورزشی</a></li>
                                                                        <li><a class="dropdown-item" href="#">تیشرت</a></li>
                                                                        <li><a class="dropdown-item" href="#">لوازم جانبی کوهنوردی و سفر</a></li>
                                                                        <li><a class="dropdown-item" href="#">لوازم ورزشی</a></li>
                                                                    </ul>
                                                                </li>

                                                                <li class="nav-item dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">لباس زیر زنانه</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">ست سوتین و لباس زیر</a></li>
                                                                        <li><a class="dropdown-item" href="#">زیرشلواری</a></li>
                                                                        <li><a class="dropdown-item" href="#">لباس فرم</a></li>
                                                                        <li><a class="dropdown-item" href="#">لباس خواب</a></li>
                                                                        <li><a class="dropdown-item" href="#">کفش راحتی</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">ست کیف و کفش</a></li>
                                                                <li><a class="dropdown-item" href="#">اکسسوری</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#">پوشاک مردانه</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">پیراهن</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">تاپ</a></li>
                                                                        <li><a class="dropdown-item" href="#">تیشرت</a></li>
                                                                        <li><a class="dropdown-item" href="#">تونیک</a></li>
                                                                        <li><a class="dropdown-item" href="#">شلوار جین</a></li>
                                                                        <li><a class="dropdown-item" href="#">سرهمی</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="nav-item dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">پوشاک ورزشی</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">ژاکت و سویشرت</a></li>
                                                                        <li><a class="dropdown-item" href="#">کُت و شلوار</a></li>
                                                                        <li><a class="dropdown-item" href="#">کُت و جلیقه</a></li>
                                                                        <li><a class="dropdown-item" href="#">تاپ و شلوارک</a></li>
                                                                        <li><a class="dropdown-item" href="#">دمپایی و صندل</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="nav-item dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">لباس ورزشی</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">کیف و کوله پشتی</a></li>
                                                                        <li><a class="dropdown-item" href="#">کفش ورزشی</a></li>
                                                                        <li><a class="dropdown-item" href="#">تیشرت</a></li>
                                                                        <li><a class="dropdown-item" href="#">لوازم جانبی کوهنوردی و سفر</a></li>
                                                                        <li><a class="dropdown-item" href="#">لوازم ورزشی</a></li>
                                                                    </ul>
                                                                </li>

                                                                <li class="nav-item dropdown">
                                                                    <a class="dropdown-toggle dropdown-item" href="#">لباس زیر زنانه</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="#">ست شورت و رکابی</a></li>
                                                                        <li><a class="dropdown-item" href="#">زیرشلواری</a></li>
                                                                        <li><a class="dropdown-item" href="#">لباس فرم</a></li>
                                                                        <li><a class="dropdown-item" href="#">لباس خواب</a></li>
                                                                        <li><a class="dropdown-item" href="#">کفش راحتی</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">ست کیف و کفش</a></li>
                                                                <li><a class="dropdown-item" href="#">اکسسوری</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link" href="#">کالای دیجیتال</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">کتاب، لوازم تحریر و هنر</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">ابزار و تجهیزات صنعتی</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">زیورآلات و ساعت</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">محصولات بومی و محلی</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">ورزش و سفر</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">اسباب بازی، کودک و نوزاد</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">کالاهای سوپرمارکتی</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">زیبایی و سلامت</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#">خانه و آشپزخانه</a></li>
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
                        <div class="sign-in position-relative font-general my-account-dropdown">
                            <a href="my-account.html" class="has-dropdown d-flex align-items-center text-dark text-decoration-none" title="My Account">
                                <i class="flaticon-user-3 flat-mini mx-auto me-1"></i>
                            </a>
                            <ul class="my-account-popup">
                                <li><a href="my-account.html"><span class="menu-item-text">حساب کاربری</span></a></li>
                                <li><a href="checkout.html"><span class="menu-item-text">تسویه حساب</span></a></li>
                                <li><a href="wishlist.html"><span class="menu-item-text">موردعلاقه های من</span></a></li>
                            </ul>
                        </div>
                        <div class="search-view d-xxl-none">
                            <a href="#" class="search-pop top-quantity d-flex align-items-center text-decoration-none">
                                <i class="flaticon-search flat-mini text-dark mx-auto"></i>
                            </a>
                        </div>
                        <div class="wishlist-view">
                            <a href="wishlist.html" class="position-relative top-quantity d-flex align-items-center text-white text-decoration-none">
                                <i class="flaticon-like flat-mini text-dark mx-auto"></i>
                            </a>
                        </div>
                        <div class="header-cart-1">
                            <a href="cart.html" class="cart has-cart-data" title="View Cart">
                                <div class="cart-icon"><i class="flaticon-shopping-cart flat-mini"></i> <span class="header-cart-count">2</span></div>
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
                                    <li class="mini-cart-item">
                                        <a href="#" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                        <a href="#" class="product-image"><img src="{{ asset('storage/images/products/squire-95.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Cart product" /></a>
                                        <a href="#" class="product-name">پیراهن مشکی زنانه</a>
                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating">
                                                <div class="rating-wrap">
                                                    <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9 (68)</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="variation">
                                            <span>دسته بندی:</span>
                                            <span>پوشاک زنانه</span>
                                        </div>
                                        <div class="cart-item-quantity">
                                            XL
                                            <span class="woocommerce-Price-amount amount">
                                                            <bdi>24000 <span class="woocommerce-Price-currencySymbol"></span>تومان</bdi>
                                                        </span>
                                        </div>
                                    </li>
                                    <li class="mini-cart-item">
                                        <a href="#" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                        <a href="#" class="product-image"><img src="{{ asset('storage/images/products/squire-105.png') }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Cart product" /></a>
                                        <a href="#" class="product-name">کُت لی Blazar</a>
                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating">
                                                <div class="rating-wrap">
                                                    <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (73)</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="variation">
                                            <span>دسته بندی:</span>
                                            <span>پوشاک مردانه</span>
                                        </div>
                                        <div class="cart-item-quantity">
                                            L
                                            <span class="woocommerce-Price-amount amount">
                                                            <bdi>38000 <span class="woocommerce-Price-currencySymbol"></span>تومان</bdi>
                                                        </span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total-cart">
                                    <div class="title">جمع کل:</div>
                                    <div class="price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>62000</span> تومان
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a href="cart.html" class="btn btn-primary rounded-0 view-cart">سبد خرید</a>
                                    <a href="checkout.html" class="btn btn-secondary rounded-0 checkout">تسویه حساب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-12 order-lg-2">
                    <div class="product-search-one global-search touch-screen-view">
                        <form class="form-inline search-pill-shape" action="#" method="post">
                            <input type="text" class="form-control search-field" name="search" placeholder="جستجو کالا...">
                            <div class="select-appearance-none">
                                <select class="form-control">
                                    <option selected>همه دسته بندی</option>
                                    <option value="1">یک</option>
                                    <option value="2">دو</option>
                                    <option value="3">سه</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="search-submit"><i class="flaticon-search flat-mini text-white"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--==================== Header Section End ====================-->
