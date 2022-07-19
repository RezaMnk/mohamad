@extends('layouts.app')


@section('title', '')

@section('content')
  <!--==================== Cart Section Start ====================-->
  <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                        <form action="{{ route('order.create') }}" id="cart" method="post">
                            @csrf
                            <table class="shop_table cart">
                                <thead>
                                    <th class="product-thumbnail">تصویر</th>
                                    <th class="product-name">نام کالا</th>
                                    <th class="product-quantity">تعداد</th>
                                    <th class="product-actuib">عملیات</th>
                                </thead>
                                @foreach(cart()->all() as $cart_item)
                                    @php($product = $cart_item['product'])
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-thumbnail">
                                            <a href="{{ route('home.product', $product->id) }}">
                                                <img src="{{ $product->featuring_image()->image_url }}" alt="Product image">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{ route('home.product', $product->id) }}">{{ $product->name }}</a>
                                            <dl class="variation">
                                                <dt class="variation-Vendor">وزن:</dt>
                                                <dd class="variation-Vendor">حدود {{ $product->weight }} گرم</dd>
                                            </dl>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <input type="number" name="quantity[{{ $product->id }}]" value="{{ $cart_item['count'] }}">
                                            </div>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#" class="remove">×</a>
                                        </td>
                                    </tr>
                                @endforeach
{{--                                <tr>--}}
{{--                                    <td colspan="6" class="actions">--}}
{{--                                        <div class="coupon">--}}
{{--                                            <label for="coupon_code">کد تخفیف</label>--}}
{{--                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="کد تخفیف">--}}
{{--                                            <button type="submit" class="button" name="apply_coupon" value="Apply coupon">اعمال</button>--}}
{{--                                        </div>--}}
{{--                                        <button type="submit" class="button update_cart" name="update_cart" value="Update cart" disabled="">بروزرسانی</button>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                            </table>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>جمع سبد خرید</h2>
                                <table>
                                    <tr>
                                        <th>قیمت کالاها</th>
                                        <td>
                                            <span><bdi>۵,۵۹۰,۰۰۰<span> تومان</span></bdi>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>نحوه ارسال</th>
                                        <td>
                                            <ul>
                                                <li>
                                                    <input type="radio" name="shipping_method" class="shipping_method" id="shipping_method_0_free_shipping1" checked="checked">
                                                    <label for="shipping_method_0_free_shipping1">ارسال رایگان</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="shipping_method" class="shipping_method" id="shipping_method_0_flat_rate2">
                                                    <label for="shipping_method_0_flat_rate2">ارسال سریع</label>
                                                </li>
                                            </ul>
                                            <p class="woocommerce-shipping-destination">گزینه ی ارسال سریع در هنگام تسویه حساب به روز می شود. </p>
{{--                                            <form class="woocommerce-shipping-calculator" action="#" method="post">--}}
{{--                                                <a href="#" class="shipping-calculator-button btn-link-down-line">محاسبه هزینه ارسال سریع</a>--}}
{{--                                                <div class="shipping-calculator-form">--}}
{{--                                                    <p>--}}
{{--                                                        <select name="calc_shipping_country" class="country_to_state">--}}
{{--                                                      <option value="default">انتخاب کشور/ استان...</option>--}}
{{--                                                      <option value="AF">تهران</option>--}}
{{--                                                      <option value="AX">مشهد</option>--}}
{{--                                                      <option value="AL">شیراز</option>--}}
{{--                                                      <option value="DZ">بوشهر</option>--}}
{{--                                                      <option value="AS">قزوین</option>--}}
{{--                                                      <option value="AD">شهریار</option>--}}
{{--                                                      <option value="AO">کرچ</option>--}}
{{--                                                      <option value="AI">کرمان</option>--}}
{{--                                                      <option value="AQ">ایلام</option>--}}
{{--                                                      <option value="AG">سمنان</option>--}}
{{--                                                      <option value="AR">گرمسار</option>--}}
{{--                                                      <option value="AM">گلستان</option>--}}
{{--                                                      <option value="AW">سیستان و بلوچستان</option>--}}
{{--                                                      <option value="AU">آمل</option>--}}
{{--                                                      <option value="AT">اردبیل</option>--}}
{{--                                                      <option value="AZ">آذربایجان شرقی</option>--}}
{{--                                                      <option value="BS">رشت</option>--}}
{{--                                                      <option value="BH">شاهرود</option>--}}
{{--                                                      <option value="BD">ری</option>--}}
{{--                                                      <option value="BB">آذربایجان غربی</option>--}}
{{--                                                      <option value="BY">پرند</option>--}}
{{--                                                      <option value="PW">دماوند</option>--}}
{{--                                                      <option value="BE">پردیس</option>--}}
{{--                                                      <option value="BZ">بومهن</option>--}}
{{--                                                      <option value="BJ">گیلاوند</option>--}}
{{--                                                      <option value="BM">رودهن</option>--}}
{{--                                                      <option value="BT">کردستان</option>--}}
{{--                                                      <option value="BO">بندرعباس</option>--}}
{{--                                                      <option value="BQ">جزیره کیش</option>--}}
{{--                                                      <option value="BA">بندر ریگ</option>--}}
{{--                                                      <option value="BW">قم</option>--}}
{{--                                                      <option value="BV">اکباتان</option>--}}
{{--                                                      <option value="BR">شهر قدس</option>--}}
{{--                                                      <option value="IO">پاکدشت</option>--}}
{{--                                                      <option value="BN">دامغان</option>--}}
{{--                                                      <option value="BG">خراسان جنوبی</option>--}}
{{--                                                      <option value="BF">یزد</option>--}}
{{--                                                      <option value="BI">اصفهان</option>--}}
{{--                                                      <option value="KH">زاهدان</option>--}}
{{--													  <option value="IO">لرستان</option>--}}
{{--                                                      <option value="BN">کرمانشاه</option>--}}
{{--                                                      <option value="BG">هرمزگان</option>--}}
{{--                                                      <option value="BF">زنجان</option>--}}
{{--                                                    </select>--}}
{{--                                                    </p>--}}
{{--                                                    <p>--}}
{{--                                                        <input type="text" class="input-text" value="" placeholder="استان" name="calc_shipping_state">--}}
{{--                                                    </p>--}}
{{--                                                    <p>--}}
{{--                                                        <input type="text" class="input-text" value="" placeholder="شهرستان" name="calc_shipping_city">--}}
{{--                                                    </p>--}}
{{--                                                    <p>--}}
{{--                                                        <input type="text" class="input-text" value="" placeholder="کد پستی" name="calc_shipping_postcode">--}}
{{--                                                    </p>--}}
{{--                                                    <p>--}}
{{--                                                        <button type="submit" name="calc_shipping" value="1" class="button">بروزرسانی</button>--}}
{{--                                                    </p>--}}
{{--                                                    <input type="hidden" id="woocommerce-shipping-calculator-nonce" name="woocommerce-shipping-calculator-nonce" value="0a66074d35">--}}
{{--                                                    <input type="hidden" name="_wp_http_referer" value="">--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>جمع نهایی</th>
                                        <td><strong><span class="woocommerce-Price-amount amount"><bdi>۵,۵۹۰,۰۰۰<span> تومان</span></bdi></span></strong> </td>
                                    </tr>
                                </table>
                                <button class="btn btn-primary">بروزرسانی</button>
                                <button type="submit" form="cart" class="btn btn-primary">ثبت سفارش</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Cart Section End ====================-->
@endsection
