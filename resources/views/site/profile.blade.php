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
                <div>
                    @forelse($orders as $order)
                        <div class="border border-light px-2 pb-3 pt-2 my-4">
                            <div class="row">
                                <div class="col-6">
                                     سفارش : <span class="text-primary">{{ $order->id }}</span>
                                     <br>
                                    {{ $order->created_at() }}
                                </div>
                                <div class="col-6 text-start">
                                     {{ $order->total_price ? number_format($order->total_price) . ' ﷼' : 'قیمت تعیین نشده' }}

                                    <br>
                                    @switch($order->status)
                                        @case('unapproved')
                                            <span class="text-secondary">در انتظار بررسی</span>
                                            @break
                                        @case('priced')
                                        @unless($order->time_to_pay)
                                                <span class="text-danger">منقضی شده</span>
                                            @else
                                                <span class="text-warning">در انتظار پرداخت</span>
                                            @endunless
                                        @break
                                        @case('paid')
                                            <span class="text-info">پرداخت شده</span>
                                            @break
                                        @case('approved')
                                            <span class="text-success">تکمیل شده</span>
                                            @break
                                        @case('canceled')
                                            <span class="text-danger">لغو شده</span>
                                            @break
                                    @endswitch
                                </div>
                            </div>
                            <hr class="">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    @foreach($order->products as $product)
                                        <img @class(['border-light border-start' => !$loop->last]) style="max-width: 20%;" src="{{ $product->featuring_image()->image_url }}" alt="{{ $product->name }}">
                                        @if ($loop->iteration > 3)
                                            <div class="w-100 d-flex justify-content-center align-items-center">
                                                <span>
                                                    <bdi>+2</bdi>
                                                </span>
                                            </div>
                                            @break
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                @if(in_array($order->status, ['unapproved', 'priced']))
                                    <div class="col-6">
                                        <a href="{{ route('order.invoice', $order->id) }}">
                                            <button type="button" class="text-light">
                                                مشاهده فاکتور
                                            </button>
                                        </a>
                                    </div>
                                <div class="col-6">
                                    @if($order->status == 'priced')
                                        @if($order->time_to_pay)
                                            <span class="text-danger border border-danger py-2 px-3 countdown" data-id="{{ $order->id }}">
                                                {{ sprintf("%02d", $order->time_to_pay->minutes) .':'. sprintf("%02d", $order->time_to_pay->seconds) }}
                                            </span>
                                        @else
                                            <form action="{{ route('order.reorder', $order->id) }}" class="d-inline" method="post">
                                                @csrf
                                                <button type="submit" name="order" value="{{ $order->id }}" class="text-warning" >
                                                    سفارش مجدد
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        <form action="{{ route('order.cancel', $order->id) }}" class="d-inline" method="post">
                                            @csrf
                                            <button type="submit" name="order" value="{{ $order->id }}" class="text-danger p-0">
                                                لغو
                                            </button>
                                        </form>
                                    @endif
                                </div>
                                @else
                                    <div class="col-">
                                        <a href="{{ route('order.invoice', $order->id) }}">
                                            <button type="button" class="text-light w-100">
                                                مشاهده فاکتور
                                            </button>
                                        </a>
                                    </div>12
                                @endif
                            </div>
                        </div>
                    @empty
                        هیچ سفارشی یافت نشد!
                    @endforelse
                </div>
                <div class="d-block">
                    {{ $orders->onEachSide(1)->links('vendor.pagination.shop', ['search' => request('search')]) }}
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
                                @forelse($orders as $order)
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
                                                    <button type="button" class="btn btn-light">
                                                        مشاهده فاکتور
                                                    </button>
                                                </a>
                                                @if($order->status == 'priced')
                                                    @if($order->time_to_pay)
                                                        <span class="btn btn-danger countdown" data-id="{{ $order->id }}">
                                                            {{ sprintf("%02d", $order->time_to_pay->minutes) .':'. sprintf("%02d", $order->time_to_pay->seconds) }}
                                                        </span>
                                                    @else
                                                        <form action="{{ route('order.reorder', $order->id) }}" class="d-inline" method="post">
                                                            @csrf
                                                            <button type="submit" name="order" value="{{ $order->id }}" class="btn btn-warning">
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
                        {{ $orders->onEachSide(1)->links('vendor.pagination.shop', ['search' => request('search')]) }}
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
                    <p class="text-center">
                        {{ $user->address }}
                    </p>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="text-danger">خروج از حساب کاربری</button>
                    </form>
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
                    document.querySelectorAll('.countdown[data-id="'+ {{ $order->id }} +'"]').forEach(function (countdown) {
                        TimerCountdown({{ $order->time_to_pay->minutes * 60 + $order->time_to_pay->seconds }}, countdown)
                    });
                @endif
            @endforeach
        };
    </script>
@endsection
