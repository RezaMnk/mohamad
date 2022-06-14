@extends('layouts.app')


@section('title', '')

@section('content')

        <!-- Slider HTML markup -->
        <div class="full-row py-0 overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div id="watch-slider" style="width:1420px; height:740px; margin:0 auto; margin-bottom: 0px;">

                            <!-- Slide 1-->
                            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">

                                <div style="width:100%; height:100%; top:50%; right:50%;" class="ls-l bg-dark" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; static:forever; position:fixed;"></div>

                                <img width="450" height="450" src="{{ asset('storage/site') }}/slider/35.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; durationout:400; parallax:false; position:fixed; loop:true; loopduration:60000; loopstartat:transitioninstart + 0; looprotate:360; loopcount:-1;"
                                    alt="image not found!">

                                <img width="1920" height="840" src="{{ asset('storage/site') }}/slider/34.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:100; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <img width="311" height="503" src="{{ asset('storage/site') }}/slider/36.png" style="top:50%; right:50.5%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <p style="font-weight:400; text-align:right; width:300px; font-size:17px; line-height:50px; top:70px; right:20px; white-space:normal;" class="ls-l text-primary text-uppercase" data-ls="offsetyin:40; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:200; parallax:false;">برندهای لوکس</p>

                                <p style="font-weight:600; text-align:right; width:400px; font-size:45px; line-height:60px; top:120px; right:20px; white-space:normal; font-family: 'IRANyekan' !important" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:false;">ساعت مچی مردانه مدل دیزل Diesel</p>

                                <p style="font-weight:400; text-align:right; width:380px; font-size:17px; line-height:30px; top:270px; right:20px; white-space:normal;" class="ls-l text-general" data-ls="offsetyin:40; delayin:450; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:false;">کالاهای لوکس مانند ساعت نباید گران باشند و به همین دلیل است که ما تصمیم به تاسیس شرکت خود گرفته ایم.</p>

                                <p style="font-weight:400; text-align:right; width:300px; font-size:16px; line-height:30px; top:150px; right:87.5%; white-space:normal;" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:false;">با هر خرید 10% مبلغ خود را هدیه بگیرید!</p>

                                <div style="font-weight:400; text-align:right; width:300px; font-size:17px; line-height:30px; top:190px; right:87.5%; white-space:normal;" dir="rtl" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:900; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:false;"><ins class="text-primary">1640000 تومان</ins> <del>1148000 تومان</del></div>

                                <a class="ls-l ls-hide-phone" href="shop-grid-full.html" target="_self" data-ls="offsetyin:150; durationin:700; delayin:1100; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; hover:true; hoveropacity:1; hoverbgcolor:#e74c3c ; parallaxlevel:0;">
                                    <p style="cursor:pointer; font-weight: 400; padding-top:12px; padding-bottom:12px; font-size:13px; top:250px; right:93%; background:#141926; color:#ffffff; padding-right:25px; padding-left:25px; line-height:25px;" class="text-uppercase">مشاهده</p>
                                </a>
                            </div>

                            <!-- Slide 2 -->
                            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">

                                <div style="width:100%; height:100%; top:50%; right:50%;" class="ls-l bg-dark" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; static:forever; position:fixed;"></div>

                                <img width="450" height="450" src="{{ asset('storage/site') }}/slider/35.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; durationout:400; parallax:false; position:fixed; loop:true; loopduration:60000; loopstartat:transitioninstart + 0; looprotate:360; loopcount:-1;"
                                    alt="image not found!">

                                <img width="1920" height="840" src="{{ asset('storage/site') }}/slider/34.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:100; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <img width="311" height="503" src="{{ asset('storage/site') }}/slider/37.png" style="top:50%; right:50.5%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <p style="font-weight:400; text-align:right; width:300px; font-size:17px; line-height:50px; top:70px; right:20px; white-space:normal;" class="ls-l text-primary text-uppercase" data-ls="offsetyin:40; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:200; parallax:false;">برندهای لوکس</p>

                                <p style="font-weight:600; text-align:right; width:400px; font-size:45px; line-height:60px; top:120px; right:20px; white-space:normal; font-family: 'IRANyekan' !important" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:false;">ساعت مچی زنانه مدل ورساچه</p>

                                <p style="font-weight:400; text-align:right; width:380px; font-size:17px; line-height:30px; top:270px; right:20px; white-space:normal;" class="ls-l text-general" data-ls="offsetyin:40; delayin:450; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:false;">کالاهای لوکس مانند ساعت نباید گران باشند و به همین دلیل است که ما تصمیم به تاسیس شرکت خود گرفته ایم.</p>

                                <p style="font-weight:400; text-align:right; width:300px; font-size:16px; line-height:30px; top:150px; right:87.5%; white-space:normal;" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:false;">با هر خرید 10% مبلغ خود را هدیه بگیرید!</p>

                                <div style="font-weight:400; text-align:right; width:300px; font-size:17px; line-height:30px; top:190px; right:87.5%; white-space:normal;" dir="rtl" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:900; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:false;"><ins class="text-primary">1640000 تومان</ins> <del>1148000 تومان</del></div>

                                <a class="ls-l ls-hide-phone" href="shop-grid-full.html" target="_self" data-ls="offsetyin:150; durationin:700; delayin:1100; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; hover:true; hoveropacity:1; hoverbgcolor:#e74c3c ; parallaxlevel:0;">
                                    <p style="cursor:pointer; font-weight: 400; padding-top:12px; padding-bottom:12px; font-size:13px; top:250px; right:93%; background:#141926; color:#ffffff; padding-right:25px; padding-left:25px; line-height:25px;" class="text-uppercase">مشاهده</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Slider Section End-->

        <!--==================== Banner Section Start ====================-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="row row-cols-1 g-4">
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage/site') }}/banner/87.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/88.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">ساعت مچی مردانه</a>
                                        <h4 class="title"><a href="#">بهترین کالکشن</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-outline-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage/site') }}/banner/91.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/90.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">ساعت مچی زنانه</a>
                                        <h4 class="title"><a href="#">زیبایی در سادگی</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-outline-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-126 bg-dark">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/89.png" alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <div class="middle-content">
                                    <a href="#" class="category">ساعت های مردانـه</a>
                                    <span class="sale">casio</span>
                                    <span class="up-to-sale">swiss made</span>
                                    <a href="shop-grid-full.html" class="btn btn-secondary mx-auto">مشاهده و خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-dm-12">
                        <div class="row row-cols-xl-1 row-cols-md-2 row-cols-1 g-4">
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage/site') }}/banner/92.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/93.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">ساعت مچی بچگانه</a>
                                        <h4 class="title"><a href="#">محصولات جدید</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-outline-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage/site') }}/banner/94.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/95.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">ساعت مچی ست</a>
                                        <h4 class="title"><a href="#">متنوع ترین برندها</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-outline-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Banner Section End ====================-->

        <!--==================== Deal of the day Section Start ====================-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 md-mb-30">
                        <div class="bg-dark deal-product e-title-hover-primary e-image-bg-dark e-hover-image-zoom e-info-center">
                            <div class="product type-product">
                                <div class="product-wrapper">
                                    <div class="product-image">
                                        <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/height-21.png" alt="Product Image"></a>
                                        <div class="on-sale">- 25%</div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="single-shop.html">ساعت مچی مردانه اورینت</a></h3>
                                        <div class="product-price">
                                            <div class="price">
                                                <ins>5700000 تومان</ins>
                                                <del>6850000 تومان</del>
                                            </div>
                                        </div>
                                        <div class="shipping-feed-back">
                                            <div class="star-rating">
                                                <div class="rating-wrap">
                                                    <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-grid-full.html" class="btn btn-primary">افزودن به سبد خرید</a>
                            <div class="time-count time-box text-center flex-between" data-countdown="2021/12/31"></div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
						<div class="products product-style-1">
							<div class="row gy-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-hover-primary e-hover-image-zoom e-info-center">
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img class="product-hover" src="{{ asset('storage/site') }}/products/squire-268.png" alt="Product Image"></a>
                                            
                                            
                                            


                                            <div class="product-variations">
                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="product-labels">
                                                <div class="badge1"><span>جدید</span></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه الفکس</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>2605000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-269.png" class="product-hover" alt="Product Image"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه آیس واچ</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>2850000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-270.png" alt="Product Image" class="product-hover"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی  کاسیو مدل GA-400</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>36850000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-271.png" alt="Product Image" class="product-hover"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی مردانه کاندینو</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>8130000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-272.png" alt="Product Image" class="product-hover"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه دنیل کلین</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>1083000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-273.png" alt="Product Image" class="product-hover"></a>
                                            <div class="product-variations">
                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="product-labels">
                                                <div class="badge1"><span>جدید</span></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه دنیش دیزاین</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>3995000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!--==================== Deal of the day Section End ====================-->

        <!--==================== Banner Full Section Start ====================-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-four" style="background: url({{ asset('storage/site') }}/background/15.png) no-repeat center / 100%; margin: 40px 0;">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-6 offset-md-1 col-md-6 sm-mb-50">
                                    <div class="banner-four-content position-relative y-center watch-banner">
                                        <h2 class="font-400 f-iransans"><a href="#" class="text-white">همراه دونفره با طراحی کلاسیک <br> مشاهده برند picto</a></h2>
                                        <span class="d-block text-white my-4">شروع قیمت از 2530000 تومان</span>
                                        <a href="shop-grid-full.html" class="btn btn-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 offset-lg-1 col-md-5 col-sm-8">
                                    <div style="margin: -40px 0;" class="banner-four d-table ml-auto position-relative md-ml-50">
                                        <img src="{{ asset('storage/site') }}/banner/96.png" alt="Add Product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Banner Full Section End ====================-->

        <!--==================== Trending Products Section Start ====================-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="col-xxl-4 col-xl-6 col-lg-7 col-md-8">
                        <div class="text-center mb-5">
                            <h3 class="text-center font-400 mb-4 font-extra-large">محصولات پیشنهادی</h3>
                            <span class="sub-title">کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
						<div class="products product-style-1 owl-mx-15">
							<div class="four-carousel owl-carousel dot-disable nav-arrow-middle-show e-title-hover-primary e-hover-image-zoom e-info-center" dir="ltr">
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-271.png" alt="Product Image" class="product-hover"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی مردانه الگنگس مدل 403</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>3950000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-272.png" alt="Product Image"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه دخترانه دنیل کلین</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>4450000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-274.png" alt="Product Image"></a>
                                            <div class="product-variations">
                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="product-labels">
                                                <div class="badge1"><span>داغ</span></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه الگنگس</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>1530000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-275.png" alt="Product Image"></a>
                                            <div class="product-variations">
                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="product-labels">
                                                <div class="badge1"><span>داغ</span></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی دنیش دیزاین</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>2350000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-271.png" alt="Product Image"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی مردانه کاندینو</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>3250000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-272.png" alt="Product Image"></a>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی زنانه اسپریت</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>850000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-274.png" alt="Product Image"></a>
                                            <div class="product-variations">
                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="product-labels">
                                                <div class="badge1"><span>داغ</span></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی مردانه ژاک لمن</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>1500000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage/site') }}/products/squire-275.png" alt="Product Image"></a>
                                            <div class="product-variations">
                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="product-labels">
                                                <div class="badge1"><span>داغ</span></div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="cart-button">
                                                    <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به سبد خرید" aria-label="Add to Cart">افزودن به سبد خرید</a>
                                                </div>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                </div>
                                                <div class="compare-button">
                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="single-shop.html">ساعت مچی مردانه تیسوت</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                    <ins>2900000 تومان</ins>
                                                </div>
                                            </div>
                                            <div class="shipping-feed-back">
                                                <div class="star-rating">
                                                    <div class="rating-wrap">
                                                        <a href="index.html"><span>0 امتیاز</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!--==================== Trending Products Section End ====================-->

        <!--==================== Banner Section Start ====================-->
        <div class="full-row pb-30">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 col-lg-8">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-122 bg-dark" style="background: url({{ asset('storage/site') }}/banner/97.png) no-repeat;">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/98.png" alt="Banner Image"></div>
                            <div class="banner-content y-center position-absolute">
                                <div class="middle-content">
                                    <span class="up-to-sale">تخفیف تا 20%</span>
                                    <h3><a href="single-shop.html" class="text-dark text-decoration-none">jacob jensen</a></h3>
                                    <a href="single-shop.html" class="category">گامی دیگر در طراحی ساعت مچی</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 ms-auto">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-123 bg-dark">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage/site') }}/banner/99.png" alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <div class="middle-content">
                                    <a href="single-shop.html" class="category">ساعت های مردانه</a>
                                    <span class="sale">murex</span>
                                    <span class="up-to-sale">تخفیف تا 30%</span>
                                    <a href="shop-grid-full.html" class="btn btn-secondary">مشاهده</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Banner Section End ====================-->

        <!--==================== Our Partner Section Start ====================-->
        <div class="full-row bg-dark pb-30 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel partner-slider" dir="ltr">
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/18.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/19.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/20.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/21.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/22.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/23.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/24.png" alt="Image not found!" /></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('storage/site') }}/partner/25.png" alt="Image not found!" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Our Partner Section End ====================-->

        <!--==================== Inspirational Posts Section Start ====================-->
        <div class="full-row bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="down-line font-extra-large text-center font-500 mb-40">اخبار و مقالات</h3>
                    </div>
                </div>
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 g-4 gy-xl-0">
                    <div class="col">
                        <div class="thumb-blog-simple text-center transation hover-img-zoom">
                            <div class="post-image overflow-hidden">
                                <img src="{{ asset('storage/site') }}/blog/2.png" alt="Image not found!">
                            </div>
                            <div class="post-content">
                                <div class="post-meta font-small text-uppercase list-color-primary">
                                    <a href="blog-single-2.html"><span>مُد وفشن</span></a>
                                </div>
                                <h5><a href="blog-single.html" class="transation text-dark hover-text-primary d-table my-10 mx-auto font-500">ساعت مچی نامرئی که، مرئی شد!</a></h5>
                                <p>در سال 1867، ژرارد پرگو، اولین ساعت مچی توربیلون خود با سه پل طلایی را...</p>
                                <a href="blog-single.html" class="btn-link-down-line d-table mx-auto">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb-blog-simple text-center transation hover-img-zoom">
                            <div class="post-image overflow-hidden">
                                <img src="{{ asset('storage/site') }}/blog/4.png" alt="Image not found!">
                            </div>
                            <div class="post-content">
                                <div class="post-meta font-small text-uppercase list-color-primary">
                                    <a href="#"><span>سبک زندگی</span></a>
                                </div>
                                <h5><a href="blog-single.html" class="transation text-dark hover-text-primary d-table my-10 mx-auto font-500">چگونه ساعتمان را تمیز کنیم ؟</a></h5>
                                <p>اگر H. Moser & Cie یکی از ساعت مچی های شاخص خود به نام Perpetual 1 را...</p>
                                <a href="blog-single.html" class="btn-link-down-line d-table mx-auto">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb-blog-simple text-center transation hover-img-zoom">
                            <div class="post-image overflow-hidden">
                                <img src="{{ asset('storage/site') }}/blog/3.png" alt="Image not found!">
                            </div>
                            <div class="post-content">
                                <div class="post-meta font-small text-uppercase list-color-primary">
                                    <a href="#"><span>ساعت مچی</span></a>
                                </div>
                                <h5><a href="blog-single.html" class="transation text-dark hover-text-primary d-table my-10 mx-auto font-500">کورنوگراف چیست؟</a></h5>
                                <p>ساعتی خریده اید که یکی از مزیت های آن کرنوگراف است. این به چه معنا می‌باشد؟ در چه...</p>
                                <a href="blog-single.html" class="btn-link-down-line d-table mx-auto">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Inspirational Posts Section End ====================-->

        <div class="d-none" style="height: 100vh;width: 100%; position: fixed; top: 0; background: red; z-index: 999;" id="product-background-image">
            
        </div>
        
        <script>
            let product_hovers = document.querySelectorAll('.product-hover');
            let hoverbg = document.getElementById("product-background-image");
            product_hovers.forEach(
                function(item){
                    item.addEventListener('mouseover', function(){
                        this.style.zIndex = "99999999";
                        hoverbg.classList.remove('d-none');
                        hoverbg.classList.add('d-block');
                        hoverbg.style.background = `url(${this.src}) no-repeat`;
                    });
                    item.addEventListener('mouseout', function(){
                        hoverbg.classList.remove('d-block');
                        hoverbg.classList.add('d-none');
                    });
                }
            );
            
        </script>
        <style>
            .product-hover {
                z-index: 1000 !important;
            }
            main{
                z-index: 2 !important;
            }
            .product-hover:hover #product-background-image{
                display: block !important;
            }
        </style>
@endsection
