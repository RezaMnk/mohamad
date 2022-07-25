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
                                        <th>
                                            تصویر
                                        </th>
                                        <th>
                                            نام کالا
                                        </th>
                                        <th>
                                            تعداد
                                        </th>
                                        <th>
                                            عملیات
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="wishlist-items-wrapper">
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets/images/products/squire-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">
                                                ساعت مچی دیجیتال مردانه یونیک مدل کنتوری تاچ
                                            </a>
                                        </td>
                                        <td class="product-price">
                                            <form id="add-to-cart-{{ 2 }}" action="{{ route('cart.add' , 2) }}" method="post">
                                                @csrf
                                                <div>
                                                    <div class="quantity mb-0" style="margin-bottom: 0 !important;">
                                                        <input type="number" name="quantity" min="1" step="1" value="1">
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="product-add-to-cart">
                                            <button type="submit" form="add-to-cart-{{ 2 }}" class="btn btn-primary">افزودن به سبد</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Wishlist Section End ====================-->
@endsection
