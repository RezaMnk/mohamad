@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
@endsection


@section('title', 'Create Products')

@section('content')
    
    <div class="row">
        <!-- right col start -->
        <div class="col-12 col-md-8">
            <!-- title card : start  -->
            <div class="card">
                <div class="card-body">
                    <input type="text" class="form-control" placeholder="نام محصول">
                </div>
            </div>
            <!-- title card : end  -->

            <!-- description card : start  -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> توضیحات محصول </h6>
                    <textarea id="description"></textarea>
                </div>
            </div>
            <!-- description card : end  -->

            <!-- price card : start -->
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
            <!-- price card : end -->


            
            <!-- shor description card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> توضیحات کوتاه محصول </h6>
                    <textarea id="short-description"></textarea>
                </div>
            </div>
            <!-- shor description card : end -->
        </div>
        <!-- right col end -->

        <!-- left col start -->
        <div class="col-9 col-md-4">
            <!-- detail card : start  -->
            <div class="card">
                <div class="card-body">
                    <p class="card-title">نویسنده :‌رضا نداف</p>
                    <p class="card-title">تاریخ انتشار :‌۱۲ / ۰۲ / ۱۴۰۰</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-success">انتشار</button>
                    </div>
                </div>
            </div>
            <!-- detail card : end  -->
            <!-- categories card : start -->
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
            <!-- categories card : end -->
            <!-- attributes card : start -->
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
            <!-- attributes card : end -->
            <!-- image card : start -->
            <div class="card text-center">
                <div class="card-body">
                    <p class="card-title">تصویر محصول</p>
                    
                    <div class="w-100 position-relative product-image" style="background-size: contain !important; background: url('https://media.gucci.com/style/HEXFFC7D4_Center_0_0_1200x1200/1652199383/702895_J1631_8029_001_100_0000_Light-adidas-x-Gucci-gourmette-necklace-with-Trefoil-pendant.jpg');">
                        <div class="d-flex justify-content-center align-items-center position-absolute product-image-hover w-100" data-toggle="modal" data-target="#exampleModal">
                                <i class="ti-pencil"></i>
                           
                        </div>
                    </div>
                    



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
            </div>
            <!-- image card : end -->
        </div>
        <!-- left col end -->
    </div>

@endsection

@section('footer-assets')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    @ckeditor('description')
    @ckeditor('short-description')
@endsection

