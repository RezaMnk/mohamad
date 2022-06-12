@extends('admin.layouts.app')


@section('title', 'Users')

@section('content')
    <div class="row m-t-50">

        <div class="card-body col-4">
            <p style="font-weight: 600; font-size: 16px;">افزودن دسته جدید</p>
            <p style="margin-bottom: 0;">نام</p>

            <input type="text" style="width: 90%;">
            <p style="margin-bottom: 0; margin-top: 15px;">دسته اصلی</p>
            <!-- select box -->
            <div class="form-group">
                <select class="js-example-basic-single">
                    <option>هیچ کدام</option>
                    <option >دسته 1</option>
                    <option >دسته 2</option>
                    <option >دسته 3</option>
                    <option >دسته 4</option>
                    <option >دسته 5</option>

                </select>
            </div>
            <p style="margin-bottom: 0; margin-top: 15px;">توضیح</p>
            <textarea class="form-control" rows="6"></textarea>
            <form>
                <div class="form-group">
                    <label style="margin-bottom: 0; margin-top : 25px;" >تصویر بند انگشتی</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>




            <button type="button" class="btn btn-primary">افزودن دسته جدید</button>





        </div>



        <div class="card col-12 col-md-8">
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                        <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length">
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
                                   width="100%" role="grid" aria-describedby="example1_info" style="width: 100%;">
                                <thead>
                                <tr role="row">

                                    <th class="sorting_asc"  rowspan="1" colspan="1"
                                        style="width: 122px;">نام
                                    </th>
                                    <th class="sorting"   rowspan="1" colspan="1" style="width: 157px;">
                                        توضیحات
                                    </th>
                                    <th class="sorting" rowspan="1" colspan="1" style="width: 26px;">
                                        تعداد
                                    </th>
                                    <th class="sorting"  rowspan="1" colspan="1" style="width: 21px;">
                                        عملیات
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px" >
                                        تبلت ایسوس
                                    </td>

                                    <td>13662548</td>
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


                                    <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px" >
                                        آیفون 13 پرومکس</td>
                                    <td>89657897</td>
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
                                    <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px" >
                                        تبلت ایسوس
                                    </td>

                                    <td>13662548</td>
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
                                    <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px" >
                                        تبلت ایسوس
                                    </td>

                                    <td>13662548</td>
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
                                    <td class="sorting_1" tabindex="0"><img src="./assets/media/image/avatar.jpg" width="50px" >
                                        تبلت ایسوس
                                    </td>

                                    <td>13662548</td>
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
                                    <th rowspan="1" colspan="1">نام </th>
                                    <th rowspan="1" colspan="1">توضیحات </th>
                                    <th rowspan="1" colspan="1">تعداد</th>
                                    <th rowspan="1" colspan="1">عملیات</th>
                                </tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">نمایش 21 تا 30 از 57 رکورد</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">قبلی</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">بعدی</a></li></ul></div></div></div></div>
            </div>
        </div>



    </div>
@endsection
