@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
    <!-- TODO : all cdns should be local  -->
    <link rel="stylesheet" href="https://ciar4n.com/izmir/assets/css/izmir.css">
    <link rel="stylesheet" href="https://v3dboy.ir/previews/html/nextable/default/vendors/select2/css/select2.min.css">

@endsection


@section('title', 'Users')

@section('content')
    <div class="row card flex-row">
        <!-- right col : start  -->
        <div class="card-body col-3">
            <h6 class="card-title">ایجاد / تغییر</h6>
            
            <form>
            <label for="name">نام</label>
            <input class="form-control" type="text">

            <label for="name">دسته بندی</label>
            <!-- select box -->
                <div class="form-group">
                    <select class="js-example-basic-single">
                        <option>هیچ کدام</option>
                        <option> o دسته 1</option>
                        <option> oo دسته 2</option>
                        <option> ooo دسته 3</option>
                        <option> ooo دسته 4</option>
                        <option> oo دسته 5</option>
                        <option> o دسته 6</option>
                        <option> o دسته 7</option>
                    </select>
                </div>

                <label for="name">تصویر محصول</label>
                <div class="form-group">
                    <figure class="c4-izmir c4-border-cc-2 c4-gradient-bottom-left c4-image-zoom-in" style="--primary-color: #ef6698; --secondary-color: #4028ac;">
                        <img src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Sample Image">
                        <figcaption class="c4-layout-center-center" data-toggle="modal" data-target="#exampleModal">
                            <div class="c4-izmir-icon-wrapper c4-fade">
                                <h6 class="card-title">تصویر محصول</h6>
                            </div>
                        </figcaption>
                    </figure>
                    <!-- image modal : start -->
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true" id="exampleModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">انتخاب یا تعویض عکس شاخص</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                                        <i class="ti-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" class="dropzone"></form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    <button type="button" class="btn btn-primary">ذخیره تغییرات</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- image modal : end -->
                </div>
            </form>
            <button type="button" class="btn btn-primary w-100 justify-content-center">افزودن دسته جدید</button>
        </div>
        <!-- right col : end  -->
        <!-- left col : start  -->
        <div class="card-body col-9">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="example1_length">
                                <label>نمایش
                                    <select name="example1_length" aria-controls="example1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option><option value="25">25</option>
                                        <option value="50">50</option><option value="100">100</option>
                                    </select> رکورد
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="example1_filter" class="dataTables_filter">
                                <label>جستجو:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row"><div class="col-sm-12">
                            <table id="example1" class="table table-striped table-bordered dataTable dtr-inline"
                                   width="100%" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" rowspan="1" colspan="1">
                                        سطح
                                    </th>
                                    <th class="sorting_asc" rowspan="1" colspan="1">
                                       نام
                                    </th>
                                    <th class="sorting" rowspan="1" colspan="1">
                                        شناسه
                                    </th>
                                    <th class="sorting"  rowspan="1" colspan="1">
                                        عملیات
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۱
                                    </td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۱ - ۱
                                    </td>
                                    <td>97</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۱ - ۱ - ۱
                                    </td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۱ - ۱ - ۲
                                    </td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۱ - ۲
                                    </td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۲
                                    </td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                    </td>
                                    <td class="sorting_1" tabindex="0">
                                        دسته ۳
                                    </td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-floating">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-floating">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">سطح </th>
                                    <th rowspan="1" colspan="1">نام </th>
                                    <th rowspan="1" colspan="1">تعداد</th>
                                    <th rowspan="1" colspan="1">عملیات</th>
                                </tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">نمایش 21 تا 30 از 57 رکورد</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">قبلی</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">بعدی</a></li></ul></div></div></div></div>
        </div>
        <!-- left col : end  -->



    </div>
@endsection

@section('footer-assets')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    <!-- TODO : all cdn should be local -->
    <script src="https://v3dboy.ir/previews/html/nextable/default/vendors/select2/js/select2.min.js"></script>
    <script src="https://v3dboy.ir/previews/html/nextable/default/assets/js/examples/select2.js"></script>

@endsection