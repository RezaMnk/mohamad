@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex justify-content-center mb-3 p-3 border-bottom-gray">
                <h3 class="card-header">{{ __('Login') }}</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">

                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror form-control bg-dark border border-light" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control bg-dark border border-light" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8">
                            <div class="form-check">
                                <label class="form-check-label d-inline" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <input class="form-check-input float-end" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
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
                                @lang('Login')
                            </button>
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                                @lang('Register')
                            </a>
                        </div>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="row text-center m-3">
                            <div class="col-md-12 text-center">
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
