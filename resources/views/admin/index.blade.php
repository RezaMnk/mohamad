@extends('admin.layouts.app')


@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between align-items-center">
                <h6>آمار کلی وبسایت</h6>
                <div class="slick-single-arrows">
                    <a class="btn btn-outline-light btn-sm">
                        <i class="ti-angle-right"></i>
                    </a>
                    <a class="btn btn-outline-light btn-sm">
                        <i class="ti-angle-left"></i>
                    </a>
                </div>
            </div>
            <div class="row slick-single-item">
                <div class="col-xl-3 col-lg-6 col-lg-6 col-sm-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <div class="icon-block icon-block-sm bg-danger icon-block-floating mr-2">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <a href="{{ route('admin.users.unapproved') }}" class="font-size-13">کاربران تایید نشده</a>
                                <h2 class="mb-0 ml-auto font-weight-bold text-danger primary-font line-height-30">{{ \App\Models\User::count('zarin', false) }} از {{ \App\Models\User::count('all') }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ \App\Models\User::count('zarin', false) / \App\Models\User::count('all') * 100 }}%" aria-valuenow="{{ \App\Models\User::count('zarin', false) / \App\Models\User::count('all') * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-lg-6 col-sm-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <div class="icon-block icon-block-sm bg-warning icon-block-floating mr-2">
                                        <i class="fa fa-list-ul"></i>
                                    </div>
                                </div>
                                <a href="{{ route('admin.orders.index') }}" class="font-size-13">سفارشات تایید نشده</a>
                                <h2 class="mb-0 ml-auto font-weight-bold text-warning primary-font line-height-30">{{ \App\Models\Order::count('unapproved', false) }} از {{ \App\Models\Order::count('all') }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ \App\Models\Order::count('unapproved', false) / \App\Models\Order::count('all') * 100 }}%" aria-valuenow="{{ \App\Models\Order::count('unapproved', false) / \App\Models\Order::count('all') * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-lg-6 col-sm-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <div class="icon-block icon-block-sm bg-info icon-block-floating mr-2">
                                        <i class="fa fa-list-ol"></i>
                                    </div>
                                </div>
                                <a href="{{ route('admin.orders.index') }}" class="font-size-13">سفارشات نهایی نشده</a>
                                <h2 class="mb-0 ml-auto font-weight-bold text-info primary-font line-height-30">{{ \App\Models\Order::count('paid', false) }} از {{ \App\Models\Order::count('all') }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ \App\Models\Order::count('paid', false) / \App\Models\Order::count('all') * 100 }}%" aria-valuenow="{{ \App\Models\Order::count('paid', false) / \App\Models\Order::count('all') * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-lg-6 col-sm-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <div class="icon-block icon-block-sm bg-success icon-block-floating mr-2">
                                        <i class="fa fa-comment"></i>
                                    </div>
                                </div>
                                <a href="{{ route('admin.orders.index') }}" class="font-size-13">پیام های خوانده نشده</a>
                                <h2 class="mb-0 ml-auto font-weight-bold text-success primary-font line-height-30">{{ \App\Models\Order::count('approved', false) }} از {{ \App\Models\Order::count('all') }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ \App\Models\Order::count('approved', false) / \App\Models\Order::count('all') * 100 }}%" aria-valuenow="{{ \App\Models\Order::count('approved', false) / \App\Models\Order::count('all') * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    جدید ترین سفارشات
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-default p-0 font-size-11">
                        مشاهده همه
                    </a>
                </div>
                <div class="card-body pt-2">
                    <ul class="list-group list-group-flush">
                        @foreach(\App\Models\Order::all()->take(4) as $order)
                            <li class="list-group-item d-flex align-items-center p-l-r-0">
                                <div>
                                    <h6 class="m-b-0 primary-font">سفارش شماره {{ $order->id }}</h6>
                                    <small class="text-muted">{{ $order->user->name }}</small>
                                </div>
                                @switch($order->status)
                                    @case('unapproved')
                                        <span class="badge badge-warning ml-auto">در انتظار بررسی</span>
                                        @break
                                    @case('priced')
                                        <span class="badge badge-secondary ml-auto">در انتظار پرداخت</span>
                                        @break
                                    @case('paid')
                                        <span class="badge badge-info ml-auto">پرداخت شده</span>
                                        @break
                                    @case('approved')
                                        <span class="badge badge-success ml-auto">تکمیل شده</span>
                                        @break
                                    @case('canceled')
                                        <span class="badge badge-light ml-auto">لغو شده</span>
                                        @break
                                @endswitch
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    کاربران جدید
                    <a href="{{ route('admin.users.index') }}" class="btn btn-default p-0 font-size-11">
                        مشاهده همه
                    </a>
                </div>
                <div class="card-body pt-2">
                    <ul class="list-group list-group-flush">
                        @foreach(\App\Models\User::whereAdmin(false)->latest()->take(4)->get() as $user)
                            <li class="list-group-item d-flex align-items-center p-l-r-0">
                                <div>
                                    <h6 class="m-b-0 primary-font">{{ $user->name }}</h6>
                                    <small class="text-muted">
                                        @if($user->zarin)
                                            کاربر زرین
                                        @else
                                            در زرین یافت شد
                                        @endif
                                    </small>
                                </div>
                                @if($user->vip)
                                    <span class="badge badge-warning ml-auto">VIP</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
