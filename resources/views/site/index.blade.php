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
                            <div class="ls-slide " data-ls="bgsize:cover; bgposition:50% 50%; duration:10000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">

                                <div style="width:100%; height:100%; top:50%; right:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:400; parallaxlevel:0; static:forever; position:fixed;"></div>

                                <img width="450" height="450" src="{{ asset('storage') }}/slider/35.png" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; durationout:400; parallax:false; position:fixed; loop:true; loopduration:60000; loopstartat:transitioninstart + 0; looprotate:360; loopcount:-1;"
                                    alt="image not found!">

                                <img width="1920" height="840" src="{{ asset('storage') }}/slider/Comp3.gif" style="top:50%; right:50%;" class="ls-l" data-ls="offsetin:100; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!">

                                <!-- <img width="311" height="503" src="{{ asset('storage') }}/slider/slider-1.png" style="top:50%; right:50.5%;" class="ls-l" data-ls="offsetin:200; fadein:true; rotatein:0; delayin:500; durationout:400; parallax:false; position:fixed;" alt="image not found!"> -->

                                <p style="font-weight:400; text-align:right; width:300px; font-size:17px; line-height:50px; top:70px; right:20px; white-space:normal;" class="ls-l text-primary text-uppercase" data-ls="offsetyin:40; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:200; parallax:false;">برندهای لوکس</p>

                                <p style="font-weight:600; text-align:right; width:400px; font-size:45px; line-height:60px; top:120px; right:20px; white-space:normal; font-family: 'IRANyekan' !important" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:250; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationout:400; parallax:false;">انگشتر ۱۰ قیراتی از طلای ۱۲ عیار</p>

                                <p style="font-weight:400; text-align:right; width:380px; font-size:17px; line-height:30px; top:270px; right:20px; white-space:normal;" class="ls-l text-general" data-ls="offsetyin:40; delayin:450; easingin:easeOutQuint; offsetyout:-200; durationout:400; parallax:false;">طلای مناسب شخصیت مناسب</p>

                                <p style="font-weight:400; text-align:right; width:300px; font-size:16px; line-height:30px; top:150px; right:87.5%; white-space:normal;" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:700; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:false;">
                                حلقه های ساده رینگی یکی از پرطرفدارترین و پرفروشترین حلقه انگشترها می باشند که برای مراسم نامزدی که هم مردانه و هم زنانه استفاده می گردد راحتی استفاده ساده بودن و عمر طولانی از خصوصیات منحصر به فرد این حلقه ها می باشد
                                </p>

                                <div style="font-weight:400; text-align:right; width:300px; font-size:17px; line-height:30px; top:290px; left:87.5%; white-space:normal;" dir="rtl" class="ls-l higlight-font text-secondary" data-ls="offsetyin:40; delayin:900; easingin:easeOutQuint; offsetyout:-250; durationout:400; parallax:false;"><ins class="text-primary"></ins> <del></del></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Slider Section End-->

        <!--==================== Banner Section Start ====================-->
        <br>
        <br>
        <div class="full-row" style="background: url({{ asset('storage') }}/pattern/main-gold.png); background-size: contain; background-position: center; background-repeat: no-repeat">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="row row-cols-1 g-4">
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/87.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/88.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category"> گوشواره های خاص </a>
                                        <h4 class="title"><a href="#" class="text-dark">بهترین کالکشن</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/91.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/90.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category">النگو های طلایی</a>
                                        <h4 class="title"><a href="#" class="text-dark">زیبایی در سادگی</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex justify-content-center align-items-center">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-126">
                            <div class="banner-image overflow-hidden transation">
                            </div>
                            <div class="banner-content position-absolute">
                                <div class="middle-content bg-dark p-5 rounded-circle">
                                    <span class="sale">رینگ</span>
                                    <span class="up-to-sale">در انواع طرح ها</span>
                                    <a href="shop-grid-full.html" class="btn btn-light">مشاهده و خرید</a>
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
                                        <a href="#" class="category"> انگشتر های نگین دار </a>
                                        <h4 class="title"><a href="#" class="text-dark">محصولات جدید</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-125" style="background: url({{ asset('storage') }}/banner/94.png) no-repeat;">
                                    <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/95.png" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <a href="#" class="category"> گردن بند ها و آویز ها </a>
                                        <h4 class="title"><a href="#" class="text-dark">متنوع ترین برندها</a></h4>
                                        <a href="shop-grid-full.html" class="btn btn-primary">مشاهده و خرید</a>
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
                    <div class="col-xl-4 col-lg-5 md-mb-30 banner-bg" style="background: url('{{ asset('storage') }}/banner/homepage-banner.jpeg');">
                        
                    </div>
                    <div class="col-xl-8 col-lg-7">
						<div class="products product-style-1">
							<div class="row gy-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-hover-primary e-hover-image-zoom e-info-center">
                                <x-product-card type="new" count="6"></x-product-card>
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
                        <div class="banner-four fixed-bg" style="background: url({{ asset('storage') }}/pattern/main.png) no-repeat center / 100%; margin: 40px 0;">
                            <div class="row justify-content-center p-4">
                                <div class="col-xl-5 col-lg-6 offset-md-1 col-md-6 sm-mb-50">
                                    <div class="banner-four-content position-relative y-center watch-banner">
                                        <h2 class="font-400 f-iransans"><a href="#" class="text-white">همراه دونفره با طراحی کلاسیک <br> مشاهده برند picto</a></h2>
                                        <span class="d-block text-white my-4">شروع قیمت از 2530000 تومان</span>
                                        <a href="shop-grid-full.html" class="btn btn-primary">مشاهده و خرید</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 offset-lg-1 col-md-5 col-sm-8">
                                    <div style="margin: -40px 0;" class="banner-four d-table ml-auto position-relative md-ml-50">
                                        <img src="{{ asset('storage') }}/banner/trinity-ring.png" alt="Add Product">
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
        <div class="full-row bg-dark">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="col-xxl-4 col-xl-6 col-lg-7 col-md-8">
                        <div class="text-center mb-5">
                            <h3 class="text-center font-400 mb-4 font-extra-large">محصولات پیشنهادی</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
						<div class="products product-style-1 owl-mx-15">
							<div class="five-carousel owl-carousel dot-disable nav-arrow-middle-show e-title-hover-primary e-hover-image-zoom e-info-center" dir="ltr">
                                <x-product-card type="new" count="10" :slider="true"></x-product-card>
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
                    <div class="col-xl-4 col-lg-8">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-122 bg-dark" style="background: url({{ asset('storage') }}/banner/97.png) no-repeat;">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/98.png" alt="Banner Image"></div>
                            <div class="banner-content y-center position-absolute">
                                <div class="middle-content">
                                    <span class="up-to-sale">محصولات تابستانه</span>
                                    <h3><a href="single-shop.html" class="text-dark text-decoration-none">انگشتر خاص</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-122 bg-dark" style="background: url({{ asset('storage') }}/banner/97.png) no-repeat;">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/98.png" alt="Banner Image"></div>
                            <div class="banner-content y-center position-absolute">
                                <div class="middle-content">
                                    <span class="up-to-sale">محصولات تابستانه</span>
                                    <h3><a href="single-shop.html" class="text-dark text-decoration-none">انگشتر خاص</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-122 bg-dark" style="background: url({{ asset('storage') }}/banner/97.png) no-repeat;">
                            <div class="banner-image overflow-hidden transation"><img src="{{ asset('storage') }}/banner/98.png" alt="Banner Image"></div>
                            <div class="banner-content y-center position-absolute">
                                <div class="middle-content">
                                    <span class="up-to-sale">محصولات تابستانه</span>
                                    <h3><a href="single-shop.html" class="text-dark text-decoration-none">انگشتر خاص</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--==================== Banner Section End ====================-->
@endsection
