@extends('layouts.app')


@section('title', '')

@section('content')
<div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div id="sidebar" class="widget-title-bordered-full">
                            <div id="bigbazar-attributes-filter-4" class="widget woocommerce bigbazar-attributes-filter widget_layered_nav widget-toggle">
                                <h2 class="widget-title">دسته بندی</h2>
                                @include('layouts.shop.categories', ['categories' => $categories])
                            </div>
                            <div id="bigbazar-price-filter-list-1" class="widget bigbazar_widget_price_filter_list widget_layered_nav widget-toggle closed">
                                <h2 class="widget-title">فیلتر براساس وزن</h2>
                                <ul class="price-filter-list">
                                    <li class="wc-layered-nav-term">
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>0<span class="woocommerce-Price-currencySymbol"></span></bdi>
                                        </span> -
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>2<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>
                                        </span>
                                    </li>
                                    <li class="wc-layered-nav-term">
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>2<span class="woocommerce-Price-currencySymbol"></span></bdi>
                                        </span> -
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>4<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>
                                        </span>
                                    </li>
                                    <li class="wc-layered-nav-term">
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>4<span class="woocommerce-Price-currencySymbol"></span></bdi>
                                        </span> -
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>6<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>
                                        </span>
                                    </li>
                                    <li class="wc-layered-nav-term">
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>6<span class="woocommerce-Price-currencySymbol"></span></bdi>
                                        </span> -
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>10<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>
                                        </span>
                                    </li>
                                    <li class="wc-layered-nav-term">
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>10<span class="woocommerce-Price-currencySymbol"></span></bdi>
                                        </span> -
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>20<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>
                                        </span>
                                    </li>
                                    <li class="wc-layered-nav-term">
                                        <span class="woocommerce-Price-amount amount">
                                                <bdi>20 +<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <form>
                                <div id="bigbazar-price-filter-list-1" class="widget bigbazar_widget_price_filter_list widget_layered_nav widget-toggle closed">
                                    <h2 class="widget-title">فیلتر براساس تست</h2>

                                    <div class="form-check checkbox">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check checkbox">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check checkbox">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check checkbox">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Checked checkbox
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary">اعمال فیلتر ها</button>
                            </form>
                            @foreach($attributes as $attribute)
                                <div id="bigbazar-attributes-filter-4" class="widget woocommerce bigbazar-attributes-filter widget_layered_nav widget-toggle closed">
                                    <h2 class="widget-title">{{ $attribute->name }}</h2>
                                    <ul class="swatch-filter-pa_brands">

                                    @foreach($attribute->children as $child_attribute)
                                        <li @class(['mb-4' => $loop->last])>
                                            <form class="d-inline">
                                                <button type="submit" name="filter[attribute]" value="{{ $child_attribute->id }}" class="text-light">{{ $child_attribute->name }}</button>
                                            </form>
                                            <span class="count">({{ $child_attribute->products()->count() }})</span>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <form class="border-bottom-gray pb-2">
                            <p class="d-inline ms-2">
                                مرتب سازی براساس:
                            </p>
                            <button type="submit" name="filter[order]" value="new" class="text-light ms-4">
                                جدیدترین
                            </button>
                            <button type="submit" name="filter[order]" value="popular" class="text-warning font-600 ms-4">
                                مجبوب‌ترین
                            </button>
                            <button type="submit" name="filter[order]" value="sold" class="text-light ms-4">
                                پرفروش‌ترین
                            </button>
                        </form>
                        <div class="showing-products pt-30 pb-50 border-2 border-bottom border-light">
                            <div class="row gy-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-4 row-cols-sm-4 row-cols-1 e-title-hover-primary e-hover-image-zoom e-info-center">
                                @forelse($products as $product)
                                    <x-product-card id="{{ $product->id }}"></x-product-card>
                                @empty
                                    <p class="text-light">محصولی یافت نشد! مشاهده <a href="{{ route('home.shop') }}">همه محصولات</a></p>
                                @endforelse
                            </div>
                        </div>
                        {{ $products->onEachSide(1)->links('vendor.pagination.shop', ['search' => request('search')]) }}


                        <!--==================== Recomended For You Section Start ====================-->
                        <div class="row mt-50">
                            <div class="col-12">
                                <div class="section-head d-flex justify-content-between align-items-end">
                                    <div class="d-flex">
                                        <h4 class="font-700 text-secondary mb-0 pb-1">محصولات پیشنهادی</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="products product-style-1 owl-mx-15">
                                        <div class="three-carousel owl-carousel dot-disable nav-arrow-middle-show e-title-hover-primary e-hover-image-zoom e-info-center" dir="ltr">
                                            <x-product-card type="new" count="9" :slider="true"></x-product-card>
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
