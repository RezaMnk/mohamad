@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
    <!-- TODO : all cdns should be local  -->
    <link rel="stylesheet" href="{{ asset('admin/css/izmir.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2.min.css') }}">

@endsection


@section('title', 'Create Products')

@section('content')
    <!-- row : start  -->
    <form action="{{ route('admin.products.update', $product->id) }}" method="post" class="row">
        @csrf
        @method('patch')

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
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="النگو طلای 24 عیار" value="{{ old('name') ?? $product->name }}" required>

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
                    <textarea id="description" name="description" @error('description') class="is-invalid" @enderror>{{ old('description') ?? $product->description }}</textarea>

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
                            <input type="text" id="code" name="code" class="form-control @error('code') is-invalid @enderror" placeholder="کد محصول در زرین" value="{{ old('code') ?? $product->code }}" required>

                            @error('code')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="weight">وزن</label>
                            <input type="number" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" placeholder="حدود وزن به گرم" value="{{ old('weight') ?? $product->weight }}" required>

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
                    @php
                        $parents = [];
                    @endphp
                    @foreach((old('attributes') ?? $product->attributes->pluck('id')->toArray()) as $selected_attribute)
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
                                        <option value="{{ $attribute_child->id }}" @if(in_array($attribute_child->id, (old('attributes') ?? $product->attributes->pluck('id')->toArray()))) selected @endif>
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
                </div>
            </div>
            <!-- attributes card : end -->
            <!-- short description card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> توضیحات کوتاه محصول </h6>
                    <textarea id="short-description" name="short_description" @error('short_description') class=is-invalid" @enderror> {{ old('short_description') ?? $product->short_description }}</textarea>

                    @error('short_description')
                    <div class="invalid-feedback">
                        {{ $message }}
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
                        <button type="submit" name="status" value="1" class="btn btn-success w-100 justify-content-center">بروزرسانی</button>
                    </div>
                </div>
            </div>
            <!-- detail card : end  -->
            <!-- image card : start -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">تصویر محصول</h6>
                    <figure class="c4-izmir c4-border-corners-2 c4-image-zoom-in" style="--primary-color: var(--light);">
                        <img src="{{ $product->featuring_image()->image_url }}" class="aspect-ratio-1" alt="Product Image" id="product-image">
                        <figcaption class="c4-layout-center-center" id="button-image">
                            <div class="c4-izmir-icon-wrapper c4-fade">
                                <input type="hidden" id="product-image-input" class="form-control" name="image" value="{{ old('image') ?? $product->featuring_image()->image }}" required>
                                <button type="button" class="btn btn-light w-100">تصویر محصول</button>
                            </div>
                        </figcaption>
                    </figure>
                    @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="d-flex flex-wrap">
                        @foreach($product->gallery->skip(1) as $gallery)
                            <div class="px-1" style="max-width: 33.3%">
                                <figure class="c4-izmir c4-border-corners-2 c4-image-zoom-in gallery" style="--primary-color: var(--light);" data-id="{{ $loop->iteration }}">
                                    <img src="{{ $gallery->image_url }}" class="aspect-ratio-1" alt="Gallery image {{ $loop->iteration }}" id="product-gallery-{{ $loop->iteration }}">
                                    <figcaption class="c4-layout-center-center gallery-image">
                                        <div class="c4-izmir-icon-wrapper c4-fade">
                                            <input type="hidden" id="input-gallery-{{ $loop->iteration }}" class="form-control" name="gallery[]" value="{{ $gallery->image }}" required>
                                        </div>
                                        <button type="button" class="btn btn-danger btn-floating position-absolute top-0 left-0" style="transform: translate(30%, -30%); width: 20px; height: 20px">
                                            <i class="ti-close font-size-10"></i>
                                        </button>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                        <div class="px-1" id ="add-gallery" style="max-width: 33.3%">
                            <figure class="c4-izmir c4-image-zoom-in" id="add-gallery-image" style="--primary-color: var(--light);">
                                <img src="{{ asset('storage/plus.png') }}" alt="Add product gallery image">
                            </figure>
                        </div>
                    </div>
                    @error('gallery')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <!-- image card : end -->
            <!-- categories card : start -->
            <div class="card h-300px">
                <div class="card-body">
                    <h6 class="card-title">دسته بندی محصولات</h6>
                    <div class="h-200px overflow-auto border p-3">
                        <div class="overflow-auto mb-4">
                            @include('admin.partials.categories.shop', ['categories' => $categories])
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

@section('footer-assets')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/vendors/select2/js/select2.min.js') }}"></script>
    <x-ckeditor :text-area-id="['description', 'short-description']"></x-ckeditor>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                inputId = 'product-image-input';
                imageId = 'product-image';

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // input
        let inputId = '';
        let imageId = '';

        // set file link
        function fmSetLink($url) {
            document.getElementById(inputId).value = $url;
            document.getElementById(imageId).src = "{{ asset('storage/products') }}" + $url;
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

            @php
                $parents = [];
            @endphp
            @foreach((old('attributes') ?? $product->attributes->pluck('id')->toArray()) as $selected_attribute)
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

            let gallery_id = {{ $product->gallery->skip(1)->count() + 1 }};
            $('#add-gallery-image').on('click', function () {
                let html = `<div class="px-1" style="max-width: 33.3%">
                            <figure class="c4-izmir c4-border-corners-2 c4-image-zoom-in gallery" style="--primary-color: var(--light);" data-id="${gallery_id}">
                                <img src="{{ asset('storage/default.png') }}" class="aspect-ratio-1" alt="Gallery image ${gallery_id}" id="product-gallery-${gallery_id}">
                                <figcaption class="c4-layout-center-center gallery-image">
                                    <div class="c4-izmir-icon-wrapper c4-fade">
                                        <input type="hidden" id="input-gallery-${gallery_id}" class="form-control" name="gallery[]" required>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-floating position-absolute top-0 left-0" style="transform: translate(30%, -30%); width: 20px; height: 20px">
                                        <i class="ti-close font-size-10"></i>
                                    </button>
                                </figcaption>
                            </figure>
                        </div>`;

                $('#add-gallery').before(html);

                inputId = 'input-gallery-' + gallery_id;
                imageId = 'product-gallery-' + gallery_id;

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');

                gallery_id++;

                $('.gallery').on('click', function () {
                    inputId = 'input-gallery-' + $(this).data('id');
                    imageId = 'product-gallery-' + $(this).data('id');

                    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                });
            })

            $('.gallery').on('click', function () {
                console.log('test');
                inputId = 'input-gallery-' + $(this).data('id');
                imageId = 'product-gallery-' + $(this).data('id');

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });
    </script>
@endsection

