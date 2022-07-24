@extends('layouts.app')


@section('title', '')

@section('content')
<div class="full-row pt-0">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <!-- order box  -->
            <div class="full-row p-4 d-block d-md-none" style="font-size: 13px;">
                <h2>
                    سفارشات من
                    <hr>
                </h2>
                <div class="border border-light p-1">
                    <div class="px-1 pb-3 pt-2">
                        <div class="row">
                            <div class="col-6">
                                 سفارش : <span class="text-primary">۱۲۵۲۳</span>
                                 <br>
                                 ۱۴/۲۰/۲۰۰۰
                            </div>
                            <div class="col-6 text-start">
                                قیمت تعیین نشده
                                <br>
                                <span class="text-success"> در انتظار پرداخت</span>
                            </div>
                        </div>
                        <hr class="">
                        <div class="row">
                            <div class="col-12 d-flex">
                                <img class="border-light border-start" style="max-width: 20%;" src="/storage/products/thumbs/squire-14.png" alt="Product 4 gallery image">
                                <img class="border-light border-start" style="max-width: 20%;" src="/storage/products/thumbs/squire-14.png" alt="Product 4 gallery image">
                                <img class="border-light border-start" style="max-width: 20%;" src="/storage/products/thumbs/squire-14.png" alt="Product 4 gallery image">
                                <img class="border-light border-start" style="max-width: 20%;" src="/storage/products/thumbs/squire-14.png" alt="Product 4 gallery image">
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <span>
                                        <bdi>+2</bdi>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center">
                            <div class="col-6">
                                <button type="submit" name="order" value="3" class="text-warning">
                                    سفارش مجدد
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="text-light" style="">
                                    مشاهده فاکتور
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- orders part  -->
            <div class="col-12 col-md-9 d-none d-md-block">
                <div class="card-body">
                    <div class="row">
                            <div class="col-sm-12 table-responsive text-nowrap mb-4">
                                <table class="table table-striped table-dark table-bordered dataTable dtr-inline">
                                    <thead>
                                    <tr role="row">
                                        <th>شماره سفارش</th>
                                        <th>قیمت نهایی</th>
                                        <th>وضعیت</th>
                                        <th> ایجاد</th>
                                        <th class="">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($user->orders as $order)
                                        <tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }} align-middle">
                                            <td>
                                                {{ $order->id }}
                                            </td>
                                            <td>
                                                {!! $order->total_price ? number_format($order->total_price) . ' ریال' : '<button type="button" class="btn btn-light w-100 justify-content-center" disabled="disabled">قیمت تعیین نشده</button>' !!}
                                            </td>
                                            <td>
                                                @switch($order->status)
                                                    @case('unapproved')
                                                        <button type="button" class="btn btn-secondary w-100 justify-content-center" disabled="disabled">در انتظار بررسی</button>
                                                        @break
                                                    @case('priced')
                                                        @unless($order->time_to_pay)
                                                            <button type="button" class="btn btn-danger w-100 justify-content-center" disabled="disabled">سفارش منقضی شده</button>
                                                        @else
                                                            <button type="button" class="btn btn-warning w-100 justify-content-center" disabled="disabled">در انتظار پرداخت</button>
                                                        @endunless
                                                        @break
                                                    @case('paid')
                                                        <button type="button" class="btn btn-info w-100 justify-content-center" disabled="disabled">پرداخت شده</button>
                                                        @break
                                                    @case('approved')
                                                        <button type="button" class="btn btn-success w-100 justify-content-center" disabled="disabled">تکمیل شده</button>
                                                        @break
                                                    @case('canceled')
                                                        <button type="button" class="btn btn-danger w-100 justify-content-center" disabled="disabled">لغو شده</button>
                                                        @break
                                                @endswitch
                                            </td>

                                            <td>
                                                {{ $order->created_at() }}
                                            </td>
                                            <td>
                                                @if(in_array($order->status, ['unapproved', 'priced']))
                                                    <a href="{{ route('order.invoice', $order->id) }}">
                                                        <button type="button" class="btn btn-light" style="">
                                                            مشاهده فاکتور
                                                        </button>
                                                    </a>
                                                    @if($order->status == 'priced')
                                                        @if($order->time_to_pay)
                                                            <span class="btn btn-danger countdown p-0" data-id="{{ $order->id }}" style="">
                                                                {{ sprintf("%02d", $order->time_to_pay->minutes) .':'. sprintf("%02d", $order->time_to_pay->seconds) }}
                                                            </span>
                                                        @else
                                                            <form action="{{ route('order.reorder', $order->id) }}" class="d-inline" method="post">
                                                                @csrf
                                                                <button type="submit" name="order" value="{{ $order->id }}" class="btn btn-warning" >
                                                                    سفارش مجدد
                                                                </button>
                                                            </form>
                                                        @endif
                                                    @else
                                                    <form action="{{ route('order.cancel', $order->id) }}" class="d-inline" method="post">
                                                        @csrf
                                                        <button type="submit" name="order" value="{{ $order->id }}" class="btn btn-danger p-0" style="width: 30%">
                                                            لغو
                                                        </button>
                                                    </form>
                                                @endif
                                                @else
                                                    <a href="{{ route('order.invoice', $order->id) }}">
                                                        <button type="button" class="btn btn-light w-100">
                                                            مشاهده فاکتور
                                                        </button>
                                                    </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                        <tr>
                                            <td colspan="5"  class="py-3">
                                                هیچ سفارشی یافت نشد!
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            <!-- profile detail part -->
            <div class="col-12 col-md-3 d-flex justify-content-center flex-wrap h-100 sticky-sm-top sticky-section">
                <!--  prodile image start -->

                <div class="rounded-circle profile-image p-1 mt-3 w-100 d-flex justify-content-center flex-wrap">
                    <img src="/admin/media/image/avatar.jpg" class="rounded-circle w-75" alt="">
                </div>
                <!-- profile image end -->
                <!-- profile info start -->
                <div class="p-2">
                    <h5 class="text-center">
                        @if($user->vip)
                            <span class="badge rounded-pill bg-warning text-dark">
                                کاربر ویژه
                            </span>
                        @endif
                        {{ $user->name }}
                    </h5>
                    <p class="text-center">{{ $user->phone }}</p>
                    <p class="text-center">خیابان آزادی، شهر آزادی، کوچه آزادی، پلاک آزادی</p>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('footer-assets')
    <script>
        function TimerCountdown(duration, display) {
            let timer = duration, minutes, seconds;
            let countdownInterval = setInterval(function () {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownInterval);
                    display.textContent = 'منقضی شده'
                }
            }, 1000);
        }

        window.onload = function () {
            @foreach($user->orders as $order)
                @if($order->status == 'priced' && $order->time_to_pay)
                    TimerCountdown({{ $order->time_to_pay->minutes * 60 + $order->time_to_pay->seconds }},
                                document.querySelector('.countdown[data-id="'+ {{ $order->id }} +'"]'));
                @endif
            @endforeach
        };
    </script>
@endsection
