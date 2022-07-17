@extends('layouts.app')


@section('title', '')

@section('content')
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <!-- orders part  -->
            <div class="col-9">
                <div class="card-body bg-light">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-striped table-bordered dataTable dtr-inline" width="100%" role="grid" aria-describedby="example1_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کد : فعال سازی نمایش به صورت نزولی">شماره سفارش</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نام : فعال سازی نمایش به صورت نزولی">نام خریدار</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن : فعال سازی نمایش به صورت نزولی">قیمت نهایی</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وضعیت : فعال سازی نمایش به صورت صعودی">وضعیت</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="زمان ایجاد : فعال سازی نمایش به صورت صعودی">زمان ایجاد</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                1
                                            </td>
                                            <td class="sorting_1" tabindex="0">
                                                <span>
                                                    Reza Nadaf
                                                </span>
                                            </td>
                                            <td class="text-danger">
                                                در انتظار ثبت قیمت
                                            </td>
                                            <td class="text-success">
                                                پرداخت شده
                                            </td>
                                            <td>
                                                تیر 25، 1401
                                            </td>
                                            <td>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-dark">
                                                        پرداخت
                                                    </button>
                                                </a>
                                                <a href="http://localhost:8000/panel/orders/1/edit">
                                                    <button type="button" class="btn btn-light">
                                                        دانلود فاکتور
                                                    </button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- profile detail part -->
            <div class="col-3 bg-light d-flex justify-content-center flex-wrap h-100 position-sticky sticky-section">
                <!--  prodile image start -->
                
                <div class="rounded-circle profile-image p-2 w-100 d-flex justify-content-center flex-wrap">
                    <img src="http://localhost:8000/admin/media/image/avatar.jpg" class="rounded-circle w-75" alt="">
                </div>
                <!-- profile image end -->
                <!-- profile info start -->
                <div class="p-2">
                    <h5 class="text-center text-dark">
                        <span class="badge rounded-pill bg-warning text-dark">
                            کاربر ویژه
                        </span>
                        رضا میر نداف
                    </h5>
                    <p class="text-center text-dark">rezaforever@gmail.com</p>
                    <p class="text-center text-dark">+98 912 123 4567</p>
                    <p class="text-center text-dark">خیابان آزادی، شهر آزادی، کوچه آزادی، پلاک آزادی</p>
                    

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
