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
    <form action="{{ route('admin.products.store') }}" method="post" class="row">
        @csrf
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <!-- right col start -->
        <div class="col-12 col-md-9">
            <!-- title card : start  -->
            <div class="card">
                <div class="card-body">
                    <label for="name">نام محصول</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="النگو طلای 24 عیار" value="{{ old('name') }}" required>

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <!-- title card : end  -->

            <!-- description card : start  -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> توضیحات محصول </h6>
                    <textarea id="description" name="description" @error('description') class="is-invalid" @enderror>{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <!-- description card : end  -->

            <!-- price card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">مشخصات محصول</h6>
                    <div class="form-row">
                        <div class="col-6">
                            <label for="code">کد محصول</label>
                            <input type="text" id="code" name="code" class="form-control @error('code') is-invalid @enderror" placeholder="کد محصول در زرین" value="{{ old('code') }}" required>

                            @error('code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="weight">وزن</label>
                            <input type="number" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" placeholder="حدود وزن به گرم" value="{{ old('weight') }}" required>

                            @error('weight')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- price card : end -->
            <!-- attributes card : start -->
            <div class="card">
                <div class="card-body" id="attributes-col">
                    <h6 class="card-title">ویژگی محصولات</h6>
                    <div class="form-group row pb-2">
                        <label for="add-attribute" class="col-2 col-form-label">افزودن ویژگی</label>
                        <div class="col-8">
                            <select class="form-control form-select" id="add-attribute">
                                <option value="0">انتخاب کنید...</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-primary btn-block" id="add-attribute-btn">افزودن</button>
                        </div>
                    </div>

                    @if(old('attributes'))
                        @php
                            $parents = [];
                        @endphp
                        @foreach(old('attributes') as $selected_attribute)
                            @php
                                $parent_id = \App\Models\Attribute::findOrFail($selected_attribute)->parent_id;
                                $attribute = \App\Models\Attribute::findOrFail($parent_id);

                                if (in_array($attribute->id, $parents)) {
                                    continue;
                                }

                                $parents[] = $attribute->id;
                            @endphp
                            <div class="form-group row border-top border-top pt-4" id="attribute-{{ $attribute->id }}-row">
                                <label for="attribute-{{ $attribute->id }}" class="col-2 col-form-label">{{ $attribute->name }}</label>
                                <div class="col-9">
                                    <select id="attribute-{{ $attribute->id }}" name="attributes[]" class="select2-hidden-accessible" multiple tabindex="-1" aria-hidden="true" required="required">`;
                                        @foreach($attribute->children as $attribute_child)
                                            <option value="{{ $attribute_child->id }}" @if(in_array($attribute_child->id, old('attributes'))) selected @endif>
                                                {{ $attribute_child->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-danger btn-block remove-attribute" data-id="{{ $attribute->id }}">حذف</button>
                                </div>
                            </div>
                        @endforeach

                    @endif
                </div>
            </div>
            <!-- attributes card : end -->
            <!-- short description card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> توضیحات کوتاه محصول </h6>
                    <textarea id="short-description" name="short_description" @error('short_description') class=is-invalid" @enderror> {{ old('short_description') }}</textarea>

                    @error('short_description')
                        <div class="invalid-feedback">
{{--                            {{ $message }}--}}
                        </div>
                    @enderror
                </div>
            </div>
            <!-- short description card : end -->
        </div>
        <!-- right col end -->

        <!-- left col start -->
        <div class="col-12 col-md-3">
            <!-- detail card : start  -->
            <div class="card">
                <div class="card-body row">
                    <div class="col-8">
                        <button type="submit" class="btn btn-light w-100 justify-content-center">ذخیره پیش نویس</button>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('admin.products.index') }}">
                            <button type="button" class="btn btn-danger w-100 justify-content-center">لغو</button>
                        </a>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" name="status" value="1" class="btn btn-success w-100 justify-content-center">انتشار</button>
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
                        <figcaption class="c4-layout-center-center" data-toggle="modal" id="button-image" data-target="#exampleModal">
                            <div class="c4-izmir-icon-wrapper c4-fade">
                                <input type="text" id="image_label" class="form-control d-none" name="image"
                                       aria-label="Image" aria-describedby="button-image">
                                <button type="button" class="btn btn-light">تصویر محصول</button>
                            </div>
                        </figcaption>
                    </figure>
                <!-- image modal : start -->
{{--                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true" id="exampleModal">--}}
{{--                    <div class="modal-dialog modal-xl">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h6 class="modal-title">انتخاب یا تعویض عکس شاخص</h6>--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="بستن">--}}
{{--                                    <i class="ti-close"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <form action="#" class="dropzone"></form>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>--}}
{{--                                <button type="button" class="btn btn-primary">ذخیره تغییرات</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- image modal : end -->
                </div>
            </div>
            <!-- image card : end -->
            <!-- categories card : start -->
            <div class="card h-300px">
                <div class="card-body">
                    <h6 class="card-title">دسته بندی محصولات</h6>
                    <div class="h-200px overflow-auto border p-3">
                        <div class="overflow-auto mb-4">
                            @include('admin.products.categories-list', ['categories' => $categories])
                        </div>
                    </div>
                </div>
            </div>
            <!-- categories card : end -->
        </div>
        <!-- left col : end -->
    </form>
    <!-- row : end -->
@endsection

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">--}}
@endsection

@section('footer-assets')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/vendors/select2/js/select2.min.js') }}"></script>
    <x-ckeditor :text-area-id="['description', 'short-description']"></x-ckeditor>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }


        $(document).ready(function () {

            let attributes = {!! $attributes_json !!};

            $('#add-attribute-btn').on('click', function (){
                let attribute_id = parseInt($('#add-attribute').val());

                if(attribute_id && attribute_id > 0) {
                    let attribute = attributes[attribute_id] || null;

                    if (attribute) {
                        let template = `<div class="form-group row border-top border-top pt-4" id="attribute-${attribute_id}-row">
                            <label for="attribute-${attribute_id}" class="col-2 col-form-label">${attribute['name']}</label>
                            <div class="col-9">
                                <select id="attribute-${attribute_id}" name="attributes[]" class="select2-hidden-accessible" multiple tabindex="-1" aria-hidden="true" required="required">`;

                        attribute['children'].forEach(function(attribute_child) {
                            template += `<option value="${attribute_child['id']}">${attribute_child['name']}</option>`
                        })

                        template += `</select>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-danger btn-block remove-attribute" data-id="${attribute_id}">حذف</button>
                            </div>
                        </div>`;

                        $('#attributes-col').append(template);
                        $('#attribute-' + attribute_id).select2({
                            placeholder: 'انتخاب کنید...'
                        });
                        $('#add-attribute').val(0)
                        $('#add-attribute option[value="' + attribute_id + '"]').prop('disabled', true);
                    }
                }
                $('.remove-attribute').on('click', function (){

                    let attribute_id = $(this).data('id');
                    console.log(attribute_id);

                    $('#attribute-' + attribute_id + '-row').remove();
                    $('#add-attribute option[value="' + attribute_id + '"]').prop('disabled', false);
                })
            })

            $('.remove-attribute').on('click', function (){

                let attribute_id = $(this).data('id');
                console.log(attribute_id);

                $('#attribute-' + attribute_id + '-row').remove();
                $('#add-attribute option[value="' + attribute_id + '"]').prop('disabled', false);
            })

            @if(old('attributes'))
                @php
                    $parents = [];
                @endphp
                @foreach(old('attributes') as $selected_attribute)
                    @php
                        $parent_id = \App\Models\Attribute::findOrFail($selected_attribute)->parent_id;
                        $attribute = \App\Models\Attribute::findOrFail($parent_id);

                        if (in_array($attribute, $parents))
                            continue;

                        $parents[] = $attribute;
                    @endphp
                    $('#attribute-' + {{ $attribute->id }}).select2({
                        placeholder: 'انتخاب کنید...'
                    });
                    $('#add-attribute option[value="' + {{ $attribute->id }} + '"]').prop('disabled', true);
                @endforeach
            @endif
        });
    </script>
@endsection

