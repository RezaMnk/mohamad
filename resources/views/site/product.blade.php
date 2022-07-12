@extends('layouts.app')


@section('title', '')

@section('content')

<div class="full-row">
    <div class="container">
        <div class="row single-product-wrapper">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="product-images">
                    <div class="images-inner">
                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                            <figure class="woocommerce-product-gallery__wrapper">
                                <div class="bg-light">
                                    <img id="single-image-zoom" src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Thumb Image" data-zoom-image="assets/images/products/squire-233.png" />
                                </div>

                                <div id="gallery_09" class="product-slide-thumb">
                                    <div class="owl-carousel four-carousel dot-disable nav-arrow-middle owl-mx-5" dir="ltr">
                                        <div class="item">
                                            <a class="active" href="#" data-image="assets/images/products/squire-269.png" data-zoom-image="assets/images/products/squire-269.png">
                                                <img src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Thumb Image" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#" data-image="assets/images/products/squire-270.png" data-zoom-image="assets/images/products/squire-270.png">
                                                <img src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Thumb Image" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#" data-image="assets/images/products/squire-271.png" data-zoom-image="assets/images/products/squire-271.png">
                                                <img src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Thumb Image" />
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="#" data-image="assets/images/products/squire-271.png" data-zoom-image="assets/images/products/squire-271.png">
                                                <img src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Thumb Image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="summary entry-summary">
                    <div class="summary-inner">
                        <div class="product-navigation-share">
                            <div class="product-share bigbazar-arrow">
                                <div class="bigbazar-social">
                                    <a href="#" class="social-facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="social-telegram"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" class="social-pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="entry-breadcrumbs">
                            <nav class="breadcrumb-divider-slash" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                    <li class="breadcrumb-item"><a href="#">فروشگاه</a></li>
                                    <li class="breadcrumb-item"><a href="#">مردانه</a></li>
                                    <li class="breadcrumb-item"><a href="#">ساعت هوشمند</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ساعت مچی دیجیتال مردانه پیائوما</li>
                                </ol>
                            </nav>
                        </div>
                        <h1 class="product_title entry-title">{{ $product->name }}</h1>
                        <h2 class="my-3">مشخصات</h2>
                        <table class="borderless woocommerce-product-attributes shop_attributes">
                            <tbody>
                                @foreach($product->attributes as $attribute)
                                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color">
                                        <th class="woocommerce-product-attributes-item__label">وزن :</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>۳۸.۸ گرم</p>
                                        </td>
                                    </tr>
                                @endforeach

{{--                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">--}}
{{--                                    <th class="woocommerce-product-attributes-item__label">ابعاد قاب :</th>--}}
{{--                                    <td class="woocommerce-product-attributes-item__value">--}}
{{--                                        <p>۴۵x۳۸x۱۰.۷ میلی‌متر</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">--}}
{{--                                    <th class="woocommerce-product-attributes-item__label">ظرفیت باتری :</th>--}}
{{--                                    <td class="woocommerce-product-attributes-item__value">--}}
{{--                                        <p>نامشخص میلی آمپر ساعت</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">--}}
{{--                                    <th class="woocommerce-product-attributes-item__label">مدل :</th>--}}
{{--                                    <td class="woocommerce-product-attributes-item__value">--}}
{{--                                        <p>MF841HN/A</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">--}}
{{--                                    <th class="woocommerce-product-attributes-item__label">سیستم عامل :</th>--}}
{{--                                    <td class="woocommerce-product-attributes-item__value">--}}
{{--                                        <p>WatchOS</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">--}}
{{--                                    <th class="woocommerce-product-attributes-item__label">سایر مشخصات سخت افزاری :</th>--}}
{{--                                    <td class="woocommerce-product-attributes-item__value">--}}
{{--                                        <p>پردازنده دو هسته ای</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                            </tbody>
                        </table>
                        <div class="position-sticky add-to-cart" style="">
                            <form class="variations_form cart kapee-swatches-wrap" action="#" method="post" enctype="multipart/form-data">
                                <div class="single_variation_wrap align-items-start">
                                    <div class="quantity">
                                        <input type="number" min="1" max="9" step="1" value="1">
                                    </div>
                                    <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">
                                        <button type="submit" class="btn btn-primary single_add_to_cart_button button alt single_add_to_cart_ajax_button">افزودن به سبد</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--==================== Related Products Section Start ====================-->
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head border-bottom d-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex section-head-side-title">
                        <h4 class="text-light mb-0">کالاهای مشابه</h4>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="products product-style-1 owl-mx-15">
                    <div class="five-carousel owl-carousel dot-disable nav-arrow-middle-show e-title-hover-primary e-hover-image-zoom e-info-center" dir="ltr">
                        <x-product-card type="new" count="9" :slider="true"></x-product-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Related Products Section End ====================-->

@endsection
