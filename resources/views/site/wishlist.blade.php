@extends('layouts.app')


@section('title', '')

@section('content')
  <!--==================== Wishlist Section Start ====================-->
  <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive-lg">
                            <table class="text-light shop_table cart wishlist_table wishlist_view traditional table" data-pagination="no" data-per-page="5" data-page="1" data-id="3989" data-token="G5CZRAZPRKEY">
                                <thead class="text-dark">
                                    <tr>
                                        <th>تصویر</th>
                                        <th>نام کالا</th>
                                        <th>تعداد</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody class="wishlist-items-wrapper">
                                    @foreach(auth()->user()->wishlist as $wishlist)
                                        @php($product = $wishlist->product)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="{{ route('home.product', $product->id) }}">
                                                    <img src="{{ $product->featuring_image()->image_url }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{ $product->name }}">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="{{ route('home.product', $product->id) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </td>
                                            <td class="product-price">
                                                <form id="add-to-cart-{{ $product->id }}" action="{{ route('cart.add') }}" method="post">
                                                    @csrf
                                                    <div>
                                                        <div class="quantity mb-0" style="margin-bottom: 0 !important;">
                                                            <input type="number" name="quantity" min="1" step="1" value="1">
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="product-add-to-cart">
                                                <button type="submit" form="add-to-cart-{{ $product->id }}" name="product" value="{{ $product->id }}" class="btn btn-primary">افزودن به سبد</button>
                                                <form action="{{ route('wishlist.remove') }}" method="post" class="d-inline">
                                                    @csrf
                                                    <button type="submit" name="product" value="{{ $product->id }}" class="btn btn-danger">حذف محصول</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Wishlist Section End ====================-->
@endsection
