@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="https://ciar4n.com/izmir/assets/css/izmir.css">

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
            <!-- short description card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> توضیحات کوتاه محصول </h6>
                    <textarea id="short-description"></textarea>
                </div>
            </div>
            <!-- short description card : end -->
        </div>
        <!-- right col end -->

        <!-- left col start -->
        <div class="col-9 col-md-4">
            <!-- detail card : start  -->
            <div class="card">
                <div class="card-body row">
                    <div class="col-8">
                        <button type="button" class="btn btn-success w-100 justify-content-center">انتشار</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-danger w-100 justify-content-center">لغو</button>
                    </div>
                </div>
            </div>
            <!-- detail card : end  -->
            <!-- image card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">تصویر محصول</h6>
                <figure class="c4-izmir c4-border-cc-2 c4-gradient-bottom-left c4-image-zoom-in" style="--primary-color: #ef6698; --secondary-color: #4028ac;">
                    <img src="https://media.gucci.com/style/HEXFFC7D4_Center_0_0_1200x1200/1652199383/702895_J1631_8029_001_100_0000_Light-adidas-x-Gucci-gourmette-necklace-with-Trefoil-pendant.jpg" alt="Sample Image">
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
            </div>  
            <!-- image card : end -->
            <!-- categories card : start -->
            <div class="card">
                <div class="card-body">
                    <div class="" tabindex="7" style="outline: none;">
                        <div class="">
                            <div class="h-drk">
                                <h6 class="card-title">دسته بندی محصولات</h6>
                            </div>
                            <div>
                                <div>
                                    <div scope="row">
                                        <ul class="overflow-auto border pt-2 pb-2 pr-3 pl-3">
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
        </div>
    </div>
    <!-- left col end -->
@endsection

@section('footer-assets')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    @ckeditor('description')
    @ckeditor('short-description')
@endsection

