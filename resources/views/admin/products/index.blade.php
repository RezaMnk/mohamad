@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
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
                        <table id="example1" class="table table-striped table-bordered dataTable dtr-inline" width="100%" role="grid" aria-describedby="example1_info" style="width: 100%;">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 122px;" aria-sort="ascending" aria-label="نام : فعال سازی نمایش به صورت نزولی">نام </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 157px;" aria-label="کد محصولات: فعال سازی نمایش به صورت صعودی">کد محصولات </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 26px;" aria-label="دفتر: فعال سازی نمایش به صورت صعودی">وضعیت </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 21px;" aria-label="سن: فعال سازی نمایش به صورت صعودی">عملیات </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $k => $product)
                                <tr role="row" class="{{ $k % 2 == 0 ? 'odd' : 'even' }}">
                                    <td class="sorting_1" tabindex="0">
                                        <img src="{{ $product->title }}" alt="{{ $product->title }}" width="50px">
                                        <span>
                                            {{ $product->title }}
                                        </span>
                                    </td>
                                    <td>13662548</td>
                                    <td>
                                        <button type="button" class="btn btn-danger">ناموجود</button>
                                    </td>
                                    <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}">
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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
