@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/nestable/nestable.css') }}">
    <!-- TODO : all cdns should be local  -->
    <link rel="stylesheet" href="{{ asset('admin/css/izmir.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2.min.css') }}">

@endsection


@section('title', 'Users')

@section('content')
    <div class="row card flex-row">
        <!-- right col : start  -->
        <div class="card-body col-3">
            <h6 class="card-title">ایجاد / تغییر</h6>
            @if(isset($category))
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                    @method('PATCH')
            @else
                <form action="{{ route('admin.categories.store') }}" method="post">
            @endif
                    @csrf

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">نام</label>
                        <input name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                               type="text" value="{{ $category->name ?? '' }}">

                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- select box -->
                    <div class="form-group">
                        <label for="parent">دسته بندی</label>
                        <select name="parent_id" id="parent" class="form-control">
                            <option value="0">بدون والد</option>
                            @include('admin.categories.select-list', ['categories' => $categories, 'current_category' => $category ?? null])
                        </select>

                        @error('parent_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100 justify-content-center">
                        {{ isset($category) ? 'بروزرسانی دسته بندی' : 'افزودن دسته جدید' }}
                    </button>
                </form>
        </div>
        <!-- right col : end  -->
        <!-- left col : start  -->
        <div class="card-body col-9">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">دسته بندی ها</h6>
                            <p class="text-muted">شما می توانید دسته بندی ها را بکشید و درگ کنید</p>
                            <div class="dd" id="categories">

                                <!-- TODO: add below styles to .css -->

                                <style>
                                    .nested-list-item {
                                        display: block;
                                        height: 30px;
                                        margin-bottom: 5px;
                                        padding: 5px 10px;
                                        color: #333;
                                        text-decoration: none;
                                        font-weight: bold;
                                        border: 1px solid #dddddd;
                                        background: #fafafa;
                                        -webkit-border-radius: 3px;
                                        border-radius: 3px;
                                        box-sizing: border-box;
                                        -moz-box-sizing: border-box;
                                    }
                                </style>
                                @include('admin.categories.categories-list', ['list' => $categories])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- left col : end  -->


    </div>
@endsection
<!-- adding nestable js to project  -->
@section('footer-assets')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/vendors/nestable/jquery.nestable-rtl.js') }}"></script>
    <script>
        $(function () {
            $('#categories').nestable({
                group: 1
            });
        });
    </script>
    <script src="{{ asset('admin/vendors/select2/js/select2.min.js') }}"></script>

@endsection
