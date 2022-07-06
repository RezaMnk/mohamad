@extends('layouts.app')


@section('title', '')

@section('content')

        <!-- Slider HTML markup -->
        <div class="full-row py-0 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="watch-slider" style="width:1420px; height:740px; margin:0 auto; margin-bottom: 0px;">

                            <!-- Slide 1-->
                            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">

                                <div style="width:100%; height:100%; top:50%; right:50%;" class="ls-l bg-dark" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; static:forever; position:fixed;"></div>

                                <img width="450" height="450" src="{{ asset('storage') }}/slider/35.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; durationout:400; parallax:false; position:fixed; loop:true; loopduration:60000; loopstartat:transitioninstart + 0; looprotate:360; loopcount:-1;"
                                    alt="image not found!">

                                <img width="1920" height="840" src="{{ asset('storage') }}/slider/34.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:100; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <img width="311" height="503" src="{{ asset('storage') }}/slider/slider-1.png" style="top:50%; right:50.5%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

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

                                <img width="450" height="450" src="{{ asset('storage') }}/slider/35.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; durationout:400; parallax:false; position:fixed; loop:true; loopduration:60000; loopstartat:transitioninstart + 0; looprotate:360; loopcount:-1;"
                                    alt="image not found!">

                                <img width="1920" height="840" src="{{ asset('storage') }}/slider/34.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:100; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <img width="311" height="503" src="{{ asset('storage') }}/slider/slider-2.png" style="top:50%; right:50.5%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

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
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/87.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/88.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">ساعت مچی مردانه</a>
                                        <h4 class="title"><a href="#">بهترین کالکشن</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-outline-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/91.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/90.png" alt="Banner Image"></div>
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
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/89.png" alt="Banner Image"></div>
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
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/92.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/93.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">ساعت مچی بچگانه</a>
                                        <h4 class="title"><a href="#">محصولات جدید</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-outline-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/94.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/95.png" alt="Banner Image"></div>
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
                                        <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/height-21.png" alt="Product Image"></a>
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
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-0">
                                        <div class="imgBx">
                                            <img src="https://lavigueur.com/products/_crop_750x750/330JF50060010.PNG">
                                        </div>
                                        <div class="contentBx">
                                            <h2>حلقه طلای ۲۴ عیار ۹ گرمی</h2>
                                            <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>                                        </div>
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
        <div class="full-row">
            <div class="">
                <div class="row">
                    <div class="col">
                        <div class="banner-four" style="background: url({{ asset('storage') }}/background/15.png) no-repeat center / 100%; margin: 40px 0;">
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
                                        <img src="{{ asset('storage') }}/banner/96.png" alt="Add Product">
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
        <div class="full-row pb-0 bg-dark">
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-271.png" alt="Product Image" class="product-hover"></a>
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
                            <x-product-card slider="true"></x-product-card>
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-272.png" alt="Product Image"></a>
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-274.png" alt="Product Image"></a>
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-275.png" alt="Product Image"></a>
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-271.png" alt="Product Image"></a>
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-272.png" alt="Product Image"></a>
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-274.png" alt="Product Image"></a>
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
                                            <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{ asset('storage') }}/products/squire-275.png" alt="Product Image"></a>
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
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-122 bg-dark" style="background: url({{ asset('storage') }}/banner/97.png) no-repeat;">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/98.png" alt="Banner Image"></div>
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
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/99.png" alt="Banner Image"></div>
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
@endsection
