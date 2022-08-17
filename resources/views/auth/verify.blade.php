@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="d-flex justify-content-center mb-3 p-3 border-bottom-gray">
                <h3 class="card-header">تاییدیه دو مرحله ای</h3>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('2fa.index') }}">

                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="code">کد تاییدیه جهت ورود</label>
                                <input id="code" type="number" class="form-control @error('code') is-invalid @enderror form-control bg-dark border border-light" name="code" value="{{ old('code') }}" required autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row text-center mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary border border-primary">
                                @lang('Login')
                            </button>

                            @if (Route::has('2fa.resend'))
                                <a class="btn btn-default text-light disabled" id="countdown-btn" href="{{ route('2fa.resend') }}">
                                    ارسال مجدد تا
                                    <span id="countdown">02:00</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer-assets')
    <script>
        window.onload = function () {

            let display = document.querySelector('#countdown');
            let duration = '120';

            let timer = duration, minutes, seconds;
            let countdownInterval = setInterval(function () {
                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdownInterval);
                    let button = document.querySelector('#countdown-btn')
                    button.innerHTML = 'ارسال مجدد کد';
                    button.classList.toggle('disabled')
                }
            }, 1000);

        };
    </script>
@endsection
