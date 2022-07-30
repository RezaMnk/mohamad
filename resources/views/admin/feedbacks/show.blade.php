@extends('admin.layouts.app')


@section('title', 'Feedbacks')

@section('content')
    <div class="card">
        <div class="card-body pt-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="text-muted">
                    <i class="fa fa-user text-primary"></i>
                    {{ $feedback->name }}
                    -
                    <span class="font-size-16">
                        @if($feedback->user_id)
                            کاربر وبسایت
                        @else
                            کاربر مهمان
                        @endif
                    </span>
                </h4>
                <span class="text-muted">
                    {{ $feedback->created_at() }}
                    <i class="fa fa-calendar text-primary ml-1"></i>
                </span>
            </div>
            <hr class="my-2">

            <h4 class="pb-4">
                {{ $feedback->title }}
            </h4>
            <p>
                {{ $feedback->text }}
            </p>
            <hr class="my-4">

            <div class="d-flex justify-content-between">
                <a href="tel:{{ $feedback->phone }}" class="btn btn-primary">
                    <i class="fa fa-phone m-r-5"></i>
                    تماس با کاربر
                </a>
                <a href="{{ route('admin.feedbacks.index') }}" class="btn btn-light">
                    <i class="fa fa-close m-r-5"></i>
                    بستن
                </a>
            </div>
        </div>
    </div>
@endsection
