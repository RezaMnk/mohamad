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
                                <span class="font-size-13">کاربران</span>
                                <h2 class="mb-0 ml-auto font-weight-bold text-danger primary-font line-height-30">2,587</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                </div>
                                <span class="font-size-13">مجموع فروش</span>
                                <h2 class="mb-0 ml-auto font-weight-bold text-success primary-font line-height-30">562</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-lg-6 col-sm-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <div class="icon-block icon-block-sm bg-info icon-block-floating mr-2">
                                        <i class="fa fa-dropbox"></i>
                                    </div>
                                </div>
                                <span class="font-size-13">محصولات</span>
                                <h2 class="mb-0 ml-auto font-weight-bold text-info primary-font line-height-30">256</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-lg-6 col-sm-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <div class="icon-block icon-block-sm bg-facebook icon-block-floating mr-2">
                                        <i class="fa fa-list-alt"></i>
                                    </div>
                                </div>
                                <span class="font-size-13">سفارشات</span>
                                <h2 class="mb-0 ml-auto font-weight-bold text-facebook primary-font line-height-30">147</h2>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar bg-facebook" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <a href="#" class="js-card-refresh link-1">
                        <i class="fa fa-refresh"></i>
                    </a>
                </div>
                <div class="card-body pt-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">سفارش شماره ۳۴۵۲</h6>
                                <small class="text-muted">رضا صادری</small>
                            </div>
                            <span class="badge badge-danger ml-auto">لغو شده</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">سفارش شماره ۳۴۵۵</h6>
                                <small class="text-muted">مجتمع کوروش</small>
                            </div>
                            <span class="badge badge-success ml-auto">تکمیل شده</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">سفارش شماره ۳۴۵۶</h6>
                                <small class="text-muted">طلافروشی رضایی</small>
                            </div>
                            <span class="badge badge-warning ml-auto">پیش فاکتور</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">سفارش شماره ۳۴۵۹</h6>
                                <small class="text-muted">طلافروشی صادقی</small>
                            </div>
                            <span class="badge badge-primary ml-auto">در انتظار پرداخت</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-block text-center font-size-13 p-b-0">
                        مشاهده همه
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    کاربران جدید
                    <a href="#" class="js-card-refresh link-1">
                        <i class="fa fa-refresh"></i>
                    </a>
                </div>
                <div class="card-body pt-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">مجتمع کسری</h6>
                                <small class="text-muted">در زرین یافت شد</small>
                            </div>
                            <span class="badge badge-danger ml-auto">غیرفعال</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">طلای صحرا</h6>
                                <small class="text-muted">در زرین یافت نشد</small>
                            </div>
                            <span class="badge badge-success ml-auto">تایید شده</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">طلای ناصری</h6>
                                <small class="text-muted">در زرین یافت شد</small>
                            </div>
                            <span class="badge badge-warning ml-auto">VIP</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                            <div>
                                <h6 class="m-b-0 primary-font">طلای صدر</h6>
                                <small class="text-muted">در زرین یافت شد</small>
                            </div>
                            <span class="badge badge-primary ml-auto">در انتظار تایید</span>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-block text-center font-size-13 p-b-0">
                        مشاهده همه
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
