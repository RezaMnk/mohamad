@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row align-items-end">
                    <div class="col-sm-12 col-md-6">
                        @if(request('unread'))
                            <a href="{{ route('admin.feedbacks.index')}}" class="btn btn-success mb-2">
                                مشاهده همه
                            </a>
                        @else
                            <form action="{{ route('admin.feedbacks.index') }}" class="form-inline">
                                <button type="submit" name="unread" value="true" class="btn btn-warning mb-2">خوانده نشده ها</button>
                            </form>
                        @endif
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
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نام : فعال سازی نمایش به صورت نزولی">نام</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نوع کاربر : فعال سازی نمایش به صورت نزولی">نوع کاربر</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="عتوان : فعال سازی نمایش به صورت صعودی">عتوان</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="خلاصه پیام : فعال سازی نمایش به صورت صعودی">خلاصه پیام</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وضعیت : فعال سازی نمایش به صورت نزولی">وضعیت</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="زمان ایجاد : فعال سازی نمایش به صورت نزولی">زمان ایجاد</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($feedbacks as $k => $feedback)
                                <tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }}">
                                    <td class="sorting_1" tabindex="0">
                                        {{ $feedback->name }} - {{ $feedback->phone }}
                                        <a href="tel:{{ $feedback->phone }}" class="text-primary ml-2 font-size-12">(تماس با کاربر)</a>
                                    </td>
                                    <td>
                                        @if($feedback->user_id)
                                            کاربر وبسایت
                                            @if($feedback->user->vip)
                                                <span class="badge badge-warning">ویژه</span>
                                            @endif
                                        @else
                                            کاربر مهمان
                                        @endif
                                    </td>
                                    <td>
                                        {{ Str::limit($feedback->title, 20) }}
                                    </td>
                                    <td>
                                        {{ Str::limit($feedback->text, 60) }}
                                    </td>
                                    <td>
                                        @if($feedback->read)
                                            <button class="btn btn-success btn-block" disabled="disabled">خوانده شده</button>
                                        @else
                                            <button class="btn btn-danger btn-block" disabled="disabled">خوانده نشده</button>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $feedback->created_at() }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.feedbacks.show', $feedback->id) }}" class="btn btn-success">مشاهده پیام</a>
                                    </td>
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
