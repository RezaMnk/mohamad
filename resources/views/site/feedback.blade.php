@extends('layouts.app')


@section('title', '')

@section('content')
  <!--============== Support article section start ==============-->
  <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bg-dark position-sticky table-of-content">
                            <h4 class="mb-4 down-line">توضیحات بیشتر</h4>
                            <ul class="artical-list list-color-general">
                                <li><a href="#">چگونه می توانم خدمات را دریافت کنم؟</a></li>
                                <li><a href="#">چطور آدرس خود را در حساب کاربری ثبت کنم؟</a></li>
                                <li><a href="#">چطور کارت هدیه خود را در پروفایل ثبت کنم ؟</a></li>
                                <li><a href="#">استفاده از کد تخفیف چه شرایطی دارد؟</a></li>
                                <li><a href="#">آیا میتوانم کارت هدیه خود را مرجوع کنم؟</a></li>
                                <li><a href="#">چه کالاهایی از طریق باربری ارسال می شوند؟</a></li>
                                <li><a href="#">چطور آدرس خود را در حساب کاربری ثبت کنم؟</a></li>
                                <li><a href="#">در چه شرایطی میتوانم کالای خود را بازگردانم؟</a></li>
                                <li><a href="#">چگونه میتوانم یک پروفایل ایجاد کنم؟</a></li>
                                <li><a href="#">آیا امکان بازگشت گل طبیعی وجود دارد؟</a></li>
                                <li><a href="#">می‏‌توانم سفارشم را تلفنی ثبت کنم؟</a></li>
                                <li><a href="#">چطور گوشی جدید خود را فعال ( رجیستر ) کنم؟</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-8 md-mt-30">
                    <div class="form-simple mb-5">
                        <h4 class="mb-4 down-line">پیشنهادات و انتقادات</h4>
                            <form id="contact-form" action="{{ route('feedback.store') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name">نام و نام خانوادگی</label>
                                            <input type="text" id="name" class="form-control bg-dark border border-light" name="name" placeholder="نام و نام خانوداگی شما" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone">شماره تلفن</label>
                                            <input type="number" id="phone" class="form-control bg-dark border border-light" name="phone" placeholder="شماره تلفن همراه شما" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="title">عنوان پیام</label>
                                            <input type="text" id="title" class="form-control bg-dark border border-light" name="title" placeholder="عنوان پیام ارسالی" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="text">متن پیام</label>
                                            <textarea class="form-control bg-dark border border-light" id="text" name="text" rows="8" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" name="submit" type="submit">ارسال پیام</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Terms & condition section end ==============-->
@endsection
