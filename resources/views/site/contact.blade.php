@extends('layouts.app')


@section('title', '')

@section('content')
          <!--==================== Map Section Start ====================-->
          <div class="full-row p-0">
            <div class="container-fluid">
                <div class="row">
                    <div id="map" style="height: 500px; width: 100%; overflow: hidden;"></div>
                </div>
            </div>
        </div>
        <!--==================== Map Section End ====================-->

        <!--==================== Contact Section Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <h3 class="down-line mb-5 font-large">ارسال درخواست</h3>
                        <div class="form-simple mb-5">
                            <form id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>نام و نام خانوادگی:</label>
                                            <input type="text" class="form-control bg-gray" name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>پست الکترونیکی:</label>
                                            <input type="email" class="form-control bg-gray" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>عنوان پیام:</label>
                                            <input type="text" class="form-control bg-gray" name="subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label>متن درخواست:</label>
                                            <textarea class="form-control bg-gray" name="message" rows="8" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" name="submit" type="submit">ارسال پیام</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <h3 class="down-line mb-5 font-large">راه های ارتباطی با ما</h3>
                        <p>جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        <div class="d-flex mb-3">
                            <ul>
                                <li class="mb-3">
                                    <strong>آدرس شرکت :</strong><br> ایران، تهران، شهرک غرب، مجتمع آریا، واحد 124، فروشگاه آنلاین 
                                </li>
                                <li class="mb-3">
                                    <strong>شماره های تماس :</strong><br>021658000 ، 81023737
                                </li>
                                <li class="mb-3">
                                    <strong>پست الکترونیکی :</strong><br> Info@patron.com, support@patron.com
                                </li>
                            </ul>
                        </div>
                        <h4 class="mb-2">موقعیت های شغلی</h4>
                        <p>اگر مایل هستید با تیم ما مشغول به کار شوید ، لطفاً رزومه و عنوان شغلی موردنظر خود را به ایمیل زیر ارسال کنید:<br> <a href="#">support@unicoderbd.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Contact Section End ====================-->

@endsection
