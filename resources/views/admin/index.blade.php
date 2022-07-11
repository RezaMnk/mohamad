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
                                <h2 class="mb-0 ml-auto font-weight-bold text-danger primary-font line-height-30">{{ $statistics->users_zarin_false->zarin }} از {{ $statistics->users_zarin_false->new }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $statistics->users_zarin_false->zarin_diff_percent }}%" aria-valuenow="{{ $statistics->users_zarin_false->zarin_diff_percent }}" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h2 class="mb-0 ml-auto font-weight-bold text-warning primary-font line-height-30">{{ $statistics->orders_unapproved->status }} از {{ $statistics->orders_unapproved->new }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $statistics->orders_unapproved->status_diff_percent }}%" aria-valuenow="{{ $statistics->orders_unapproved->status_diff_percent }}" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h2 class="mb-0 ml-auto font-weight-bold text-info primary-font line-height-30">{{ $statistics->orders_paid->status }} از {{ $statistics->orders_paid->new }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $statistics->orders_paid->status_diff_percent }}%" aria-valuenow="{{ $statistics->orders_paid->status_diff_percent }}" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h2 class="mb-0 ml-auto font-weight-bold text-success primary-font line-height-30">{{ $statistics->orders_approved->status }} از {{ $statistics->orders_approved->new }}</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $statistics->orders_approved->status_diff_percent }}%" aria-valuenow="{{ $statistics->orders_approved->status_diff_percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-header">کل کاربران</div>
                <div class="card-body text-center">
                    <div class="mb-2">
                        <span class="bar-4">{{ join(',', $statistics->users->daily) }}</span>
                    </div>
{{--                    @php(dd($statistics->users))--}}
                    <div class="font-size-40 font-weight-bold text-danger">{{ number_format($statistics->users->new) }}</div>
                    <p class="m-b-0">
                        <i class="fa {{ $statistics->users->increased ? 'fa-caret-up text-success' : 'fa-caret-down text-danger' }} m-r-5"></i> {{ $statistics->users->new_diff_percent }} % {{ $statistics->users->increased ? 'افزایش' : 'کاهش' }} نسبت به هفته پیش
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-header">کل سفارشات</div>
                <div class="card-body text-center">
                    <div class="mb-2">
                        <span class="bar-5">{{ join(',', $statistics->orders->daily) }}</span>
                    </div>
                    <div class="font-size-40 font-weight-bold text-warning">{{ number_format($statistics->orders->new) }}</div>
                    <p class="m-b-0">
                        <i class="fa {{ $statistics->orders->increased ? 'fa-caret-up text-success' : 'fa-caret-down text-danger' }} m-r-5"></i> {{ $statistics->orders->new_diff_percent }} % {{ $statistics->orders->increased ? 'افزایش' : 'کاهش' }} نسبت به هفته پیش
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-header">کل محصولات</div>
                <div class="card-body text-center">
                    <div class="mb-2">
                        <span class="bar-6">{{ join(',', $statistics->products->daily) }}</span>
                    </div>
                    <div class="font-size-40 font-weight-bold text-info">{{ number_format($statistics->products->new) }}</div>
                    <p class="m-b-0">
                        <i class="fa {{ $statistics->products->increased ? 'fa-caret-up text-success' : 'fa-caret-down text-danger' }} m-r-5"></i> {{ $statistics->products->new_diff_percent }} % {{ $statistics->products->increased ? 'افزایش' : 'کاهش' }} نسبت به هفته پیش
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-header">کل بازدید محصولات</div>
                <div class="card-body text-center">
                    <div class="mb-2">
                        <span class="bar-3">{{ join(',', $statistics->users->daily) }}</span>
                    </div>
                    <div class="font-size-40 font-weight-bold text-success">{{ number_format($statistics->users->new) }}</div>
                    <p class="m-b-0">
                        <i class="fa {{ $statistics->users->increased ? 'fa-caret-up text-success' : 'fa-caret-down text-danger' }} m-r-5"></i> {{ $statistics->users->new_diff_percent }} % {{ $statistics->users->increased ? 'افزایش' : 'کاهش' }} نسبت به هفته پیش
                    </p>
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
                        @foreach(\App\Models\Order::all()->sortByDesc('created_at')->take(4) as $order)
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

@section('footer-assets')
    <script src="{{ asset('admin/js/exampled/peity.js') }}"></script>
@endsection
