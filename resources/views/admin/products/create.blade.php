@extends('admin.layouts.app')


@section('title', 'Create User')

@section('content')
    <main class="main-content">
        <div class="row">
            <!-- ستون سمت راست -->
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"> توضیحات محصول </h6>
                        <textarea id="editor-demo1"></textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">قیمت محصول</h6>
                        <form _lpchecked="1">
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="قیمت عادی">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control text-left" placeholder="قمتی کاربران ویژه" dir="ltr">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h6 class="card-title">ویژگی محصول</h6>
                            <div class="" tabindex="7" style="outline: none;">
                                <div class="">

                                    <div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">ورودی برچسب</h6>
                                                <div class="bootstrap-tagsinput"> <span class="tag label label-info"> CSS3<span data-role="remove"></span></span> <span class="tag label label-info"> JavaScript<span data-role="remove"></span></span> <span class="tag label label-info"> Laravel<span data-role="remove"></span></span> <span class="tag label label-info">sksak<span data-role="remove"></span></span> <input type="text" placeholder="برچسب ها" size="8"></div><input type="text" class="form-control tagsinput" placeholder="برچسب ها" value="HTML5, CSS3, JavaScript, Laravel" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"> توضیحات کوتاه محصول </h6>
                        <textarea id="editor-demo2"></textarea>
                    </div>
                </div>
                <div class="card">
                    <p class="card-title">ویژگی های محصول </p>
                    <div class="card-body"></div>
                </div>
            </div>
            <!-- ستون سمت چپ -->
            <div class="col-9 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">نویسنده :‌رضا نداف</p>
                        <p class="card-title">تاریخ انتشار :‌۱۲ / ۰۲ / ۱۴۰۰</p>
                        <div class="text-center">
                            <button type="button" class="btn btn-success">انتشار</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="" tabindex="7" style="outline: none;">
                            <div class="">
                                <div class="h-drk">
                                    <tr>
                                        <th scope="col">دسته بندی</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </div>
                                <div>
                                    <div>
                                        <div scope="row">
                                            <ul class="ul-c" style="margin-right: 20px;">
                                                <li>
                                                    <input type="checkbox">دسته 1
                                                </li>
                                                <li>
                                                    <input type="checkbox">دسته 2
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li>
                                                            <input type="checkbox">دسته 1
                                                        </li>
                                                        <li>
                                                            <input type="checkbox">دسته 2
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <input type="checkbox">دسته 3
                                                </li>
                                                <li>
                                                    <input type="checkbox">دسته 4
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <p class="card-title">تصویر محصول</p>
                        <img src="./assets/media/image/photo3.jpg" style="max-width: 100%; padding: 20px;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl" style="width: 45%;margin: 0 auto 20px 20px ;font-size: 14px;"> تغییر عکس </button>
                        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true">
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
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
