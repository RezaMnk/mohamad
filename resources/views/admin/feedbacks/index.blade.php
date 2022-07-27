@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row align-items-end">
                    <div class="col-sm-12 col-md-6">
                        <a class="btn btn-success mb-2" href="=">خوانده شده ها</a>
                        <a class="btn btn-danger mb-2" href="">خوانده نشده ها</a>
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
                        <table id="example1" class="table table-striped table-bordered dataTable dtr-inline" width="100%" role="grid" aria-describedby="example1_info" style="width: 100%;">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کد : فعال سازی نمایش به صورت نزولی">وضعیت</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نام : فعال سازی نمایش به صورت نزولی">نام</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن : فعال سازی نمایش به صورت نزولی">تلفن</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وضعیت : فعال سازی نمایش به صورت صعودی">عتوان</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="زمان ایجاد : فعال سازی نمایش به صورت صعودی">خلاصه پیام</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="badge badge-success">خوانده شده</span>
                                        
                                    </td>
                                    <td>رضا نداف</td>
                                    <td>۰۹۱۲۹۹۹۴۴۴۴</td>
                                    <td>مشکل دارم</td>
                                    <td>سلام من خیلی مشکل دارم و میخوام که ...</td>
                                    <td><button class="btn btn-success">مشاهده پیام</button></td>
                                </tr>
                            @foreach($feedbacks as $k => $feedback)
                                <tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }}">
                                    <td>
                                        {{ $feedback->created_at() }}
                                        <span class="badge badge-danger">خوانده نشده</span>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        {{ $feedback->name }}
                                    </td>
                                    <td>
                                        {{ $feedback->phone }} 
                                    </td>
                                    <td>
                                        @if($feedback->status)
                                            <button type="button" class="btn btn-successw-100 justify-content-center" disabled="disabled">منتشر شده</button>
                                        @else
                                            <button type="button" class="btn btn-lightw-100 justify-content-center" disabled="disabled">پیش نویس</button>
                                        @endif
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td><button class="btn btn-success">مشاهده پیام</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $feedbacks->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>
@endsection

@section('footer-assets')
    <script src="{{ asset('admin/vendors/dataTable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dataTable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dataTable/jquery.dataTables.min.js') }}"></script>
@endsection
