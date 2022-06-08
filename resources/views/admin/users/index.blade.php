@extends('admin.layouts.app')


@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">جدول بدون دور خط</h6>
            <div class="table-responsive" tabindex="13" style="overflow: hidden; outline: none;">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">نام خریدار</th>
                        <th scope="col">تلفن </th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">کاربر ویژه</th>
                        <th scope="col">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>بیل</td>
                        <td>+989123456789</td>
                        <td>
                            <button type="button" class="btn btn-danger">تایید نشده</button>
                        </td>
                        <td><i class="ti-check"></i></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-floating">
                                <a href="profile.html"> <i class="fa fa-pencil-square-o" aria-hidden="true">

                                    </i> </a>
                            </button>
                            <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash">

                                </i> </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>بیل</td>
                        <td>گیتس</td>
                        <td>
                            <button type="button" class="btn btn-success btn-uppercase">تایید شده</button>
                        </td>
                        <td><i class="ti-check"></i></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-floating">
                                <a href="profile.html"> <i class="fa fa-pencil-square-o" aria-hidden="true">

                                    </i> </a>
                            </button>
                            <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash">

                                </i> </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>پاول دوروف</td>
                        <td>دوروف</td>
                        <td>
                            <button type="button" class="btn btn-danger">تایید نشده</button>
                        </td>
                        <td><i class="ti-check"></i></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-floating">
                                <a href="profile.html"> <i class="fa fa-pencil-square-o" aria-hidden="true">

                                    </i> </a>
                            </button>
                            <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash">

                                </i> </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>پاول دوروف</td>
                        <td>دوروف</td>
                        <td>
                            <button type="button" class="btn btn-success btn-uppercase">تایید شده</button>
                        </td>
                        <td><i class="ti-close"></i></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-floating">
                                <a href="profile.html"> <i class="fa fa-pencil-square-o" aria-hidden="true">

                                    </i> </a>
                            </button>
                            <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash">

                                </i> </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>پاول دوروف</td>
                        <td>دوروف</td>
                        <td>
                            <button type="button" class="btn btn-danger">تایید نشده</button>
                        </td>
                        <td><i class="ti-close"></i></td>
                        <td>
                            <button type="button" class="btn btn-warning btn-floating">
                                <a href="profile.html"> <i class="fa fa-pencil-square-o" aria-hidden="true">

                                    </i> </a>
                            </button>
                            <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash">

                                </i> </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
