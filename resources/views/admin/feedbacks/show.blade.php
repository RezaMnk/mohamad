@extends('admin.layouts.app')


@section('title', 'Feedbacks')

@section('content')
                <div class="card">
					<div class="card-body">
						<h6 class="card-title d-flex justify-content-between align-items-center">
							پیام شماره {{ $feedback->id }}
						</h6>
						<div class="row mb-2">
							<div class="col-4 text-muted">نام:</div>
							<div class="col-8">
                                {{ $feedback->name }}
                            </div>
						</div>
						<div class="row mb-2">
							<div class="col-4 text-muted">تلفن:</div>
							<div class="col-8">
                                {{ $feedback->phone }}
                            </div>
						</div>
						<div class="row mb-2">
							<div class="col-4 text-muted">عنوان پیام:</div>
							<div class="col-8">
                                {{ $feedback->title }}
                            </div>
						</div>
						<div class="row mb-2">
							<div class="col-4 text-muted">متن پیام:</div>
							<div class="col-8">
                                {{ $feedback->text }}
                            </div>
						</div>
					</div>
				</div>
@endsection
