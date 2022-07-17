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
                                    @include('partials.categories.shop', ['categories' => $categories])
                                </div>
                                <div class="widget widget_layered_nav widget-toggle {{ in_request_array(['0-2', '2-4', '4-6', '4-10', '10-20', '+20'], 'weight') ? '' : 'closed' }}">
                                    <h2 class="widget-title">فیلتر براساس وزن</h2>

                                    <ul class="price-filter-list">
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="weight[]" {{ in_request_array('0-2', 'weight') ? 'checked="checked"' : '' }} value="0-2">
                                            <label class="form-check-label">
                                                0 - 2 گرم
                                                ({{ \App\Models\Product::all()->whereBetween('weight', [0,2])->count() }})
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="weight[]" {{ in_request_array('2-4', 'weight') ? 'checked="checked"' : '' }} value="2-4">
                                            <label class="form-check-label">
                                                2 - 4 گرم
                                                ({{ \App\Models\Product::all()->whereBetween('weight', [2,4])->count() }})
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="weight[]" {{ in_request_array('4-6', 'weight') ? 'checked="checked"' : '' }} value="4-6">
                                            <label class="form-check-label">
                                                4 - 6 گرم
                                                ({{ \App\Models\Product::all()->whereBetween('weight', [4,6])->count() }})
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="weight[]" {{ in_request_array('4-10', 'weight') ? 'checked="checked"' : '' }} value="4-10">
                                            <label class="form-check-label">
                                                6 - 10 گرم
                                                ({{ \App\Models\Product::all()->whereBetween('weight', [4-10])->count() }})
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="weight[]" {{ in_request_array('10-20', 'weight') ? 'checked="checked"' : '' }} value="10-20">
                                            <label class="form-check-label">
                                                10 - 20 گرم
                                                ({{ \App\Models\Product::all()->whereBetween('weight', [10-20])->count() }})
                                            </label>
                                        </div>
                                        <div class="form-check checkbox my-3 align-items-center">
                                            <input class="form-check-input checkbox-sm" type="checkbox" name="weight[]" {{ in_request_array('+20', 'weight') ? 'checked="checked"' : '' }} value="+20">
                                            <label class="form-check-label">
                                                +20 گرم
                                                ({{ \App\Models\Product::all()->where('weight', '>', 20)->count() }})
                                            </label>
                                        </div>
                                    </ul>
                                </div>
                                @foreach($attributes as $attribute)
                                    <div class="widget woocommerce widget_layered_nav widget-toggle {{ in_request_array(\App\Models\Attribute::all()->pluck('id')->toArray(), 'attribute') ? '' : 'closed' }}">
                                        <h2 class="widget-title">{{ $attribute->name }}</h2>
                                        <ul class="swatch-filter-pa_brands">

                                            @foreach($attribute->children as $child_attribute)
                                                <div class="form-check checkbox my-3 align-items-center @if($loop->last) mb-4 @endif">
                                                    <input class="form-check-input checkbox-sm" type="checkbox" name="attribute[]" {{ in_request_array($child_attribute->id, 'attribute') ? 'checked="checked"' : '' }} value="{{ $child_attribute->id }}">
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
                            <button type="submit" name="order" value="new" class="ms-4 {{ request()->order == 'new' ? 'text-primary fw-bolder' : 'text-light' }}">
                                جدیدترین
                            </button>
                            <button type="submit" name="order" value="popular" class="ms-4 {{ request()->order == 'popular' ? 'text-primary fw-bolder' : 'text-light' }}">
                                مجبوب‌ترین
                            </button>
                            <button type="submit" name="order" value="sold" class="ms-4 {{ request()->order == 'sold' ? 'text-primary fw-bolder' : 'text-light' }}">
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
