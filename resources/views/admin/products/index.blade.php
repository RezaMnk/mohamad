@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row align-items-end">
                    <div class="col-sm-12 col-md-6">
                        <a class="btn btn-primary mb-2" href="{{ route('admin.products.create') }}">افزودن</a>
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
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 7%;" aria-label="کد : فعال سازی نمایش به صورت نزولی">کد</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نام : فعال سازی نمایش به صورت نزولی">نام</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15%;" aria-label="وزن : فعال سازی نمایش به صورت نزولی">حدود وزن</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 15%;" aria-label="وضعیت : فعال سازی نمایش به صورت صعودی">وضعیت</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 10%;" aria-label="زمان ایجاد : فعال سازی نمایش به صورت صعودی">زمان ایجاد</th>
                                <th style="width: 10%;">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $k => $product)
                                <tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }}">
                                    <td>
                                        {{ $product->code }}
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        <img src="{{ $product->title }}" alt="{{ $product->title }}" width="50px">
                                        <span>
                                            {{ $product->name }}
                                        </span>
                                    </td>
                                    <td>
                                        {{ $product->weight }} گرم
                                    </td>
                                    <td>
                                        @if($product->status)
                                            <button type="button" class="btn btn-success disabled w-100 justify-content-center">منتشر شده</button>
                                        @else
                                            <button type="button" class="btn btn-light disabled w-100 justify-content-center">پیش نویس</button>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $product->created_at() }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $product->id) }}">
                                            <button type="button" class="btn btn-warning btn-floating">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                        <a href="{{ $product->status ? route('admin.products.edit', $product->id) : 'javascript:void(0)' }}">
                                            <button type="button" class="btn btn-success btn-floating @if(!$product->status) disabled @endif">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $products->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>
@endsection

@section('footer-assets')
    <script src="{{ asset('admin/vendors/dataTable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dataTable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dataTable/jquery.dataTables.min.js') }}"></script>
@endsection
