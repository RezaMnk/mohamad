@extends('layouts.app')


@section('title', '')

@section('content')
    <div class="full-row pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="products-header d-flex justify-content-between align-items-center py-10 px-20 bg-light md-mt-30">
                        <div class="products-header-left d-flex align-items-center">
                            <h6 class="woocommerce-products-header__title page-title">همه دسته بندی</h6>
                            <div class="woocommerce-result-count"> ( نمایش 1 – 28 محصول از 23945 محصول )</div>
                        </div>
                        <div class="products-header-right">
                            <div class="product-show">
                                <span class="h6 font-700 text-secondary mb-0">نمایش:</span>
                                <select class="show-number">
                                    <option value="1">6</option>
                                    <option value="2">9</option>
                                    <option value="3" selected="selected">12</option>
                                    <option value="4">24</option>
                                    <option value="5">36</option>
                                    <option value="6">48</option>
                                </select>
                            </div>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="1" selected="selected">مرتب سازی پیش فرض</option>
                                    <option value="2">مرتب سازی براساس محبوب ترین</option>
                                    <option value="3">مرتب سازی براساس امتیاز بالا</option>
                                    <option value="4">مرتب سازی براساس جدیدترین</option>
                                    <option value="5">مرتب سازی براساس قیمت: پایین به بالا</option>
                                    <option value="6">مرتب سازی براساس قیمت: بالا به پایین</option>
                                </select>
                                <input type="hidden" name="paged" value="1">
                                <input type="hidden" name="shop-page-layout" value="left-sidebar">
                            </form>
                            <div class="products-view">
                                <a class="grid-view active" data-shopview="grid-view" href="#"><i class="flaticon-menu-1 flat-mini"></i></a>
                                <a class="list-view" data-shopview="list-view" href="#"><i class="flaticon-list flat-mini"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="showing-products pt-30 pb-50 border-2 border-bottom border-light">
                        <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 product-style-3 e-hover-image-zoom e-image-bg-light g-4">
{{--                            <div class="col">--}}
{{--                                <div class="product type-product">--}}
{{--                                    <div class="product-wrapper">--}}
{{--                                        <div class="product-image">--}}
{{--                                            <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-79.png" alt="Product Image"></a>--}}
{{--                                            <div class="product-variations">--}}
{{--                                                <span class="active"><a href="#" style="background-color: #b78269;"></a></span>--}}
{{--                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>--}}
{{--                                                <span><a href="#" style="background-color: #31749e;"></a></span>--}}
{{--                                                <span><a href="#" style="background-color: #672a4f;"></a></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-labels">--}}
{{--                                                <div class="shape1-badge3"><span>جدید</span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-info">--}}
{{--                                            <div class="product-cats"><a href="#">پوشاک مردانه</a></div>--}}
{{--                                            <h3 class="product-title"><a href="#">هودی مردانه به رسم طرح یوونتوس</a></h3>--}}
{{--                                            <div class="product-price">--}}
{{--                                                <div class="price">--}}
{{--                                                    <ins>295000 - 685000 تومان</ins>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>12000 تومان</span> </div>--}}
{{--                                            <div class="shipping-feed-back">--}}
{{--                                                <div class="star-rating">--}}
{{--                                                    <div class="rating-wrap">--}}
{{--                                                        <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="rating-counts-wrap">--}}
{{--                                                        <a href="#">(132)</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="sold-items">--}}
{{--                                                    <span>326</span> <span>فروش</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="hover-area">--}}
{{--                                                <div class="cart-button">--}}
{{--                                                    <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="wishlist-button">--}}
{{--                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="compare-button">--}}
{{--                                                    <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <x-product-card type="new" count="25"></x-product-card>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <div class="showing-result">نمایش 1 تا 28 از 23945 نتیجه</div>
                        <div class="pagination-style-one">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!--==================== Recomended For You Section Start ====================-->
                    <div class="row mt-50">
                        <div class="col-12">
                            <div class="section-head d-flex justify-content-between align-items-end">
                                <div class="d-flex">
                                    <h4 class="font-700 text-secondary mb-0 pb-1">محصولات پیشنهادی</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product-style-3 owl-carousel owl-item-mb-50 owl-nav-hover-primary nav-top-right five-carousel product-carousel dot-disable e-bg-light after-border-two" dir="ltr">
                                <div class="item">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-43.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک مردانه</a></div>
                                                <h3 class="product-title"><a href="#">پولوشرت آستین کوتاه مردانه</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>128000 - 365000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>رایگان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.75</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(123)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>282</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-3.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>حراج</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک زنانه</a></div>
                                                <h3 class="product-title"><a href="#">شومیز زنانه مارینا رینالدی</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>99000 - 999000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>20000 تومان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-8.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک مردانه</a></div>
                                                <h3 class="product-title"><a href="#">کاپشن مردانه ایکات مدل بهاره</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>125000 - 955000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>5000 تومان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(393)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-11.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک مردانه</a></div>
                                                <h3 class="product-title"><a href="#">تیشرت آستین کوتاه مردانه شین دیزاین</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>250000 - 895000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>12000 تومان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(543)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-14.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک مردانه</a></div>
                                                <h3 class="product-title"><a href="#">پولوشرت آستین کوتاه آریان نخ باف</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>89000 - 685000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(563)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-16.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک مردانه</a></div>
                                                <h3 class="product-title"><a href="#">کاپشن کلاه دار مردانه JootiJeans</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>10000 - 780000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>11000 تومان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.5</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(39)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-15.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">هندزفری، هدفون</a></div>
                                                <h3 class="product-title"><a href="#">هندزفری بی‌ سیم مدل AirPods V5</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>89000 - 750000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>8000 تومان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(139)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-14.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">پوشاک مردانه</a></div>
                                                <h3 class="product-title"><a href="#">پولوشرت آستین کوتاه مردانه </a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>78000 - 825000 تومان</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+هزینه ارسال: </span> <span>13000 تومان</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.7</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(73)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>فروش</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">افزودن به سبد خرید</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="افزودن به علاقه مندی" aria-label="Add to Wishlist">افزودن به علاقه مندی</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="مقایسه" aria-label="Compare">مقایسه</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== Recomended For You Section End ====================-->
                </div>
            </div>
        </div>
    </div>
@endsection
