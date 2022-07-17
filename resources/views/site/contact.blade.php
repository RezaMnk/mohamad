@extends('layouts.app')


@section('title', '')

@section('content')
          <!--==================== Map Section Start ====================-->
          <div class="full-row p-0">
            <div class="container-fluid">
                <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8237023722886!2d51.42043561520042!3d35.68134273757342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e01f24edf7155%3A0x1083cb76e6fd8022!2sTehran%20Province%2C%20Tehran%2C%20District%2012%2C%20Naser%20Khosrow%20St%2C%20Iran!5e0!3m2!1sen!2s!4v1658058554429!5m2!1sen!2s" width="600" height="450" style="border:0; filter: invert(90%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!--==================== Map Section End ====================-->
filter: invert(90%)
        <!--==================== Contact Section Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="mt-md-30 shadow mb-30 position-relative">
                            <img src="http://localhost:8000/storage/banner/56.png" alt="bigbazar eCommerce">
                            <a data-fancybox="" class="video-popup" href="#" title="video popup">
                                <span class="bg-primary text-white"><img src="http://localhost:8000/storage/icon/video-play.png" alt=""></span>
                            </a>
                            <!-- Use youtube or Aparat video link in href, first open the video and just copy the link from url and past here -->
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
