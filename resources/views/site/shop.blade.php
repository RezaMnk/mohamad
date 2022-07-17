@extends('layouts.app')


@section('title', '')

@section('content')
<div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div id="sidebar" class="widget-title-bordered-full">
                            <form>
                                <div class="widget woocommerce widget_layered_nav widget-toggle">
                                    <h2 class="widget-title">دسته بندی</h2>
                                    @include('layouts.shop.categories', ['categories' => $categories])
                                </div>
                                <div class="widget widget_layered_nav widget-toggle closed">
                                    <h2 class="widget-title">فیلتر براساس وزن</h2>

                                    <ul class="price-filter-list">
                                        <div class="form-check checkbox my-3 align-items-center">
                                            @php(dd(request()->input('filter.weight')))
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="filter[weight][]" {{ request()->input('filter.weight') == 'w-0-2' ? 'checked="checked"' : '' }} value="w-0-2">
                                            <label class="form-check-label">
                                                0 - 2 گرم
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="filter[weight][]" value="0-2">
                                            <label class="form-check-label">
                                                2 - 4 گرم
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="filter[weight][]" value="0-2">
                                            <label class="form-check-label">
                                                4 - 6 گرم
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="filter[weight][]" value="0-2">
                                            <label class="form-check-label">
                                                6 - 10 گرم
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="filter[weight]" value="0-2">
                                            <label class="form-check-label">
                                                10 - 20 گرم
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="filter[weight]" value="0-2">
                                            <label class="form-check-label">
                                                +20 گرم
                                            </label>
                                        </div>
                                        {{--                                    <li class="wc-layered-nav-term">--}}
                                        {{--                                        <span class="woocommerce-Price-amount amount">--}}
                                        {{--                                                <bdi>20 +<span class="woocommerce-Price-currencySymbol me-1">گرم</span></bdi>--}}
                                        {{--                                        </span>--}}
                                        {{--                                    </li>--}}
                                    </ul>
                                </div>
                                @foreach($attributes as $attribute)
                                    <div class="widget woocommerce widget_layered_nav widget-toggle closed">
                                        <h2 class="widget-title">{{ $attribute->name }}</h2>
                                        <ul class="swatch-filter-pa_brands">

                                            @foreach($attribute->children as $child_attribute)
                                                <div class="form-check checkbox my-3 align-items-center @if($loop->last) mb-4 @endif">
                                                    <input class="form-check-input checkbox-sm" type="checkbox" name="filter[attribute][]" value="{{ $child_attribute->id }}">
                                                    <label class="form-check-label">
                                                        {{ $child_attribute->name }} ({{ $child_attribute->products()->count() }})
                                                    </label>
                                                </div>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary w-100 mt-3">اعمال فیلتر ها</button>
                            </form>
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
