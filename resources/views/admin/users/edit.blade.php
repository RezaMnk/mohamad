@extends('admin.layouts.app')


@section('title', 'Create User')

@section('content')
    <div class="card card-body overflow-hidden" data-backround-image="{{ asset('admin/media/image/profile-bg.png') }}" style="background: url({{ asset('admin/media/image/profile-bg.png') }});">
        <div class="p-3 d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div>
                    <figure class="avatar avatar-xl mr-3">
                        <img src="{{ asset('admin/media/image/avatar.jpg') }}" class="rounded-circle" alt="...">
                    </figure>
                </div>
                <div class="text-white">
                    <h3 class="line-height-30 m-b-10">
                        جان اسنو
                        <a href="#" data-toggle="tooltip" title="" class="font-size-15 text-white btn-floating m-l-5 align-middle" data-original-title="ویرایش پروفایل">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </h3>
                    <p class="mb-0 opacity-8">طراح وب</p>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>

    <div class="row row-sm">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">اطلاعات کاربر</h6>
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method("PATCH")

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">نام</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">شماره تلفن</label>
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}">

                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">آدرس</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2"></textarea>

                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">کلمه عبور</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="کلمه عبور جدید">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password_confirmation">تکرار کلمه عبور</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="تکرار کلمه عبور جدید">

                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="vip" id="vip" {{ $user->vip ? 'checked' : '' }}>
                                <label class="form-check-label" for="vip">
                                    کاربر ویژه
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">بروزرسانی</button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-light-dark">لغو</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
