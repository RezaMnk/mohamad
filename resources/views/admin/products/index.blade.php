@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="example1_length">
                            <label>نمایش
                                <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> رکورد </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>جستجو:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                            </label>
                        </div>
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
                            <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px"> تبلت ایسوس </td>
                                <td>13662548</td>
                                <td>
                                    <button type="button" class="btn btn-danger">ناموجود</button>
                                </td>
                                <td>
                                    <a href="edit-product.html">
                                        <button type="button" class="btn btn-warning btn-floating"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash"></i> </button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px"> آیفون 13 پرومکس</td>
                                <td>89657897</td>
                                <td>
                                    <button type="button" class="btn btn-success">موجود</button>
                                </td>
                                <td>
                                    <a href="edit-product.html">
                                        <button type="button" class="btn btn-warning btn-floating"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-floating"> <i class="ti-trash"></i> </button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">نام </th>
                                <th rowspan="1" colspan="1">کد محصولات</th>
                                <th rowspan="1" colspan="1">وضعیت</th>
                                <th rowspan="1" colspan="1">عملیات</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">نمایش 21 تا 30 از 57 رکورد</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">قبلی</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">بعدی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
