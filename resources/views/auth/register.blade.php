@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex justify-content-center mb-3 p-3 border-bottom-gray">
                <h3 class="card-header">{{ __('Register') }}</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" autocomplete="on">

                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror form-control bg-dark border border-light" name="name" value="{{ old('name') }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror form-control bg-dark border border-light" name="phone" value="{{ old('phone') }}" required >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="address">{{ __('Address') }}</label>
                                <textarea id="address" type="number" class="form-control @error('address') is-invalid @enderror form-control bg-dark border border-light" name="address" required>{{ old('address') }}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control bg-dark border border-light" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror form-control bg-dark border border-light" name="password_confirmation" required>

                                @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-5">
                        <div class="col-md-12">
                            <x-recaptcha :has-error="$errors->has('g-recaptcha-response')"></x-recaptcha>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary border border-primary">
                                @lang('Register')
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">
                                @lang('Login')
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
