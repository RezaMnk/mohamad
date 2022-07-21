@extends('layouts.app')


@section('title', '')

@section('content')
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <!-- orders part  -->
            <div class="col-9">
                <div class="card-body">
                    <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-dark table-bordered dataTable dtr-inline">
                                    <thead>
                                    <tr role="row">
                                        <th>شماره سفارش</th>
                                        <th>قیمت نهایی</th>
                                        <th>وضعیت</th>
                                        <th> ایجاد</th>
                                        <th>عملیات</th>
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
                                                    <button type="button" class="btn btn-warning w-100 justify-content-center" disabled="disabled">در انتظار پرداخت</button>
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
                                                @if($order->status == 'unapproved')
                                                    <a href="{{ route('order.invoice', $order->id) }}">
                                                        <button type="button" class="btn btn-light float-end" style="width: 70%">
                                                            مشاهده فاکتور
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('order.cancel', $order->id) }}" class="d-inline" method="post">
                                                        @csrf

                                                        <button type="submit" name="order" value="{{ $order->id }}" class="btn btn-danger" style="width: 30%">
                                                            لغو
                                                        </button>
                                                    </form>
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
            <div class="col-3 d-flex justify-content-center flex-wrap h-100 position-sticky sticky-section">
                <!--  prodile image start -->

                <div class="rounded-circle profile-image p-1 mt-3 w-100 d-flex justify-content-center flex-wrap">
                    <img src="http://localhost:8000/admin/media/image/avatar.jpg" class="rounded-circle w-75" alt="">
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
