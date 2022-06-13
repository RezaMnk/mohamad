@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
    <!-- TODO : all cdns should be local  -->
    <link rel="stylesheet" href="https://ciar4n.com/izmir/assets/css/izmir.css">
    <link rel="stylesheet" href="https://v3dboy.ir/previews/html/nextable/default/vendors/select2/css/select2.min.css">

@endsection


@section('title', 'Create Products')

@section('content')
    <!-- row : start  -->
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
                    <h6 class="card-title">مشخصات محصول</h6>
                    <form _lpchecked="1">
                        <div class="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="وزن">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control text-left" placeholder="قیمت" dir="ltr">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- price card : end -->
            <!-- attributes card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">ویژگی محصولات</h6>
                    <select class="js-example-basic-single select2-hidden-accessible" multiple="" data-select2-id="12" tabindex="-1" aria-hidden="true">
                        <option data-select2-id="39">انتخاب</option>
                        <optgroup label="شهرها" data-select2-id="40">
                            <option value="Wonosari" data-select2-id="41">تبریز</option>
                            <option value="Antipolo" data-select2-id="42">تهران</option>
                            <option value="Lesuhe" data-select2-id="43">اصفهان</option>
                            <option selected="" value="Sunzhuang" data-select2-id="14">شیراز</option>
                            <option value="Hongchuan" data-select2-id="44">همدان</option>
                        </optgroup>
                        <optgroup label="کشورها" data-select2-id="45">
                            <option value="France" data-select2-id="46">ایران</option>
                            <option selected="" value="Brazil" data-select2-id="15">برزیل</option>
                            <option selected="" value="Yemen" data-select2-id="16">ایتالیا</option>
                            <option selected="" value="United States" data-select2-id="17">آلمان</option>
                            <option value="China" data-select2-id="47">چین</option>
                            <option value="Argentina" data-select2-id="48">آرژانتین</option>
                            <option value="Bulgaria" data-select2-id="49">اسپانیا</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <!-- attributes card : end -->
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
                        <a href="{{ route('admin.products.index') }}">
                            <button type="button" class="btn btn-danger w-100 justify-content-center">لغو</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- detail card : end  -->
            <!-- image card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">تصویر محصول</h6>
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
            </div>  
            <!-- image card : end -->
            <!-- categories card : start -->
            <div class="card h-300px">
                <div class="card-body">
                    <h6 class="card-title">دسته بندی محصولات</h6>
                    <div class="h-200px overflow-auto">
                        <div class="overflow-auto mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check ml-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check ml-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check ml-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check ml-6">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check ml-6">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check ml-6">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <!-- categories card : end -->
        </div>
        <!-- left col : end -->
    </div>
    <!-- row : end -->
@endsection

@section('footer-assets')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    <!-- TODO : all cdn should be local -->
    <script src="https://v3dboy.ir/previews/html/nextable/default/vendors/select2/js/select2.min.js"></script>
    <script src="https://v3dboy.ir/previews/html/nextable/default/assets/js/examples/select2.js"></script>
    @ckeditor('description')
    @ckeditor('short-description')
@endsection

