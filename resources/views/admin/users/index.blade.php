@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="dataTables_wrapper dt-bootstrap4">
                <div class="row align-items-end">
                    <div class="col-sm-12 col-md-6">
                        <a class="btn btn-primary mb-2" href="{{ route('admin.users.create') }}">افزودن</a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <form class="d-flex justify-content-end">

                            <label for="search">جستجو:
                            <input type="search" id="search" class="form-control form-control-sm" name="search" value="{{ request('search') ?? '' }}">
                            </label>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table">
                            <thead>
                            <tr class="bg-primary">
                                <th scope="col">شناسه</th>
                                <th scope="col">نام کاربر</th>
                                <th scope="col">شماره تلفن</th>
                                <th scope="col">وضعیت زرین</th>
                                <th scope="col">کاربر ویژه</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td class="ls-1">{{ $user->phone }}</td>
                                    <td>
                                        @if($user->zarin)
                                            <button type="button" class="btn btn-success">تایید شده</button>
                                        @else
                                            <button type="button" class="btn btn-danger">تایید نشده</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->vip)
                                            <i class="ti-check"></i>
                                        @else
                                            <i class="ti-close"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $users->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row align-items-end">
                    <div class="col-sm-12 col-md-6">
                        <a class="btn btn-primary mb-2" href="{{ route('admin.users.create') }}">افزودن</a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <form class="d-flex justify-content-end">

                            <label for="search">جستجو:
                                <input type="search" id="search" class="form-control form-control-sm" name="search" value="{{ request('search') ?? '' }}">
                            </label>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-striped table-busered dataTable dtr-inline" width="100%" role="grid" aria-describedby="example1_info" style="width: 100%;">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کد : فعال سازی نمایش به صورت نزولی">شناسه</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نام : فعال سازی نمایش به صورت نزولی">نام</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن : فعال سازی نمایش به صورت نزولی">شماره تلفن</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وضعیت : فعال سازی نمایش به صورت صعودی">وضعیت زرین</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="زمان ایجاد : فعال سازی نمایش به صورت صعودی">زمان ایجاد</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="زمان ایجاد : فعال سازی نمایش به صورت صعودی">کاربر ویژه</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $k => $user)
                                <tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }}">
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td class="ls-1">{{ $user->phone }}</td>
                                    <td>
                                        @if($user->zarin)
                                            <button type="button" class="btn btn-success">تایید شده</button>
                                        @else
                                            <button type="button" class="btn btn-danger">تایید نشده</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->vip)
                                            <i class="ti-check"></i>
                                        @else
                                            <i class="ti-close"></i>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $user->created_at() }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $users->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>
@endsection
