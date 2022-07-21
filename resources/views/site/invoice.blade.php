<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('admin.layouts.sections.head')

@section('header-assets')
    <link rel="stylesheet" href="">
@endsection

@section('title', 'Invoice')

<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
</div>
<!-- end::page loader -->

<!-- begin::main content -->
<main class="main-content ml-0">
    <!-- row : start  -->
    <div class="card" id="section-to-print">

        <div class="card-body p-50">
            <div class="invoice">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h2 class="d-flex align-items-center">
                        <img class="m-r-20" src="{{ asset('storage/logo/19.png') }}" alt="image">
                    </h2>
                    <div>
                        <h3 class="text-xs-left m-b-0">صورتحساب #{{ $order->id }}</h3>
                        <p class="text-xs-left m-t-2">وضعیت:
                            @switch($order->status)
                                @case('unapproved')
                                    در انتظار بررسی
                                    @break
                                @case('priced')
                                    در انتظار پرداخت
                                    @break
                                @case('paid')
                                    پرداخت شده
                                    @break
                                @case('approved')
                                    تکمیل شده
                                    @break
                                @case('canceled')
                                    لغو شده
                                    @break
                            @endswitch
                        </p>
                    </div>

                </div>
                <hr class="m-t-b-50">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <b>فروشنده :</b>
                        </p>
                        <p>استان آذربایجان شرقی<br>
                            شهر تبریز<br>
                            فلکه دانشگاه، برج بلور، طبقه 567
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-right">
                            <b>صورتحساب به</b>
                        </p>
                        <p class="text-right">استان تهران<br>شهر تهران<br>خیابان تجریش، جنب بانک ملی، پلاک 789</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table m-t-b-50">
                        <thead>
                        <tr class="bg-dark text-white print-text-black">
                            <th>#</th>
                            <th>تصویر محصول</th>
                            <th>نام محصول</th>
                            <th style="width: 12%">تعداد</th>
                            <th>قیمت</th>
                            <th style="width: 25%" class="text-right">جمع</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->products as $product)
                            <tr class="text-right">
                                <td class="text-left">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-left">
                                    <img src="{{ $product->featuring_image()->image_url }}" width="50px">
                                </td>
                                <td class="text-left">
                                    {{ $product->name }}
                                </td>
                                <td class="text-left">
                                    <p class="form-control m-0">{{ $product->pivot->quantity }}</p>
                                </td>
                                <td class="text-left">
                                    <div class="input-group">
                                        <p class="form-control text-left">{{ $product->pivot->price ? number_format($product->pivot->price) : 'قیمت تعیین نشده' }}</p>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ریال</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="" data-id="{{ $loop->iteration }}">
                                    {{ number_format($product->pivot->quantity * $product->pivot->price) ?? '0'}}
                                     ریال
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <p>جمع مبالغ: <span id="total_price">{{ number_format($product->pivot->quantity * $product->pivot->price) ?? '0'}} ریال</span></p>
                    <p>مالیات (0%): 0 ریال</p>
                    <h4 class="primary-font">جمع: <span id="total_price_with_tax">{{ number_format($product->pivot->quantity * $product->pivot->price) ?? '0'}} ریال</span></h4>
                </div>
                <p class="text-center small text-muted  m-t-50">
						<span class="row">
							<span class="col-md-6 offset-md-3">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
							</span>
						</span>
                </p>
            </div>
            <div class="text-right d-print-none">
                <hr class="m-t-b-50">
                <button type="submit" class="btn btn-primary my-1">
                    <i class="fa fa-dollar m-r-5"></i>
                    ثبت پرداخت
                </button>
                <a href="javascript:window.print()" class="btn btn-light m-l-5 my-1">
                    <i class="fa fa-print m-r-5"></i> چاپ
                </a>
            </div>
        </div>
    </div>
    <div class="text-danger ltr-text">
    @foreach($errors->all() as $error)
            {{ $error }}
    @endforeach
    </div>
    <!-- row : end -->
</main>
<!-- end::main content -->

@include('admin.layouts.sections.footer-scripts')

<!-- App scripts -->
<script src="{{ asset('admin/js/app.js') }}"></script>

</body>
</html>


