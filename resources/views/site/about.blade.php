@extends('layouts.app')


@section('title', '')

@section('content')
<div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-2">
                        <span class="ordenery-font text-primary h5 pb-1 d-table">درباره ما</span>
                        <h3 class="text-dark mb-3 font-large">آشنایی مختصر با شرکت</h3>
                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        <div class="datalist-icon-left py-2 d-flex">
                            <span class="d-table ms-3"><i class="flaticon-startup flat-medium text-primary"></i></span>
                            <div class="pe-3">
                                <h4 class="text-dark mb-3">وظایف ما</h4>
                                <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                        <div class="datalist-icon-left py-2 d-flex">
                            <span class="d-table ms-3"><i class="flaticon-bike flat-medium text-primary"></i></span>
                            <div class="pe-3">
                                <h4 class="text-dark mb-3">اهداف ما</h4>
                                <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 wow fadeIn md-mt-30" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="mt-md-30 shadow mb-30 position-relative">
                            <img src="{{ asset('storage') }}/banner/56.png" alt="bigbazar eCommerce">
                            <a data-fancybox class="video-popup" href="#" title="video popup">
                                <span class="bg-primary text-white"><img src="{{ asset('storage') }}/icon/video-play.png" alt=""></span>
                            </a>
                            <!-- Use youtube or Aparat video link in href, first open the video and just copy the link from url and past here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fact-counter">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-30 count wow fadeIn" data-wow-duration="300ms">
                                        <div class="mb-4 d-inline-block" style="width: 60px"><img src="{{ asset('storage') }}/icon/branding.png" alt="medical unites"></div>
                                        <div class="text-primary"><span class="count-num" style="font-size: 50px; line-height: 50px" data-speed="3000" data-stop="126">0</span><span class="font-extra-large">+</span></div>
                                        <h3 class="my-3 font-large">شرکت های وابسته</h3>
                                        <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-30 count wow fadeIn" data-wow-duration="300ms">
                                        <div class="mb-4 d-inline-block" style="width: 60px"><img src="{{ asset('storage') }}/icon/12.png" alt="medical unites"></div>
                                        <div class="text-primary"><span class="count-num" style="font-size: 50px; line-height: 50px" data-speed="3000" data-stop="721">0</span><span class="font-extra-large">+</span></div>
                                        <h3 class="my-3 font-large">آنالیز فعالیت</h3>
                                        <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="mb-30 count wow fadeIn" data-wow-duration="300ms">
                                        <div class="mb-4 d-inline-block" style="width: 60px"><img src="{{ asset('storage') }}/icon/illumination.png" alt="medical unites"></div>
                                        <div class="text-primary"><span class="count-num" style="font-size: 50px; line-height: 50px" data-speed="3000" data-stop="580">0</span><span class="font-extra-large">+</span></div>
                                        <h3 class="my-3 font-large">باشگاه مشتریان</h3>
                                        <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <span class="ordenery-font text-primary h5 pb-1 d-table">کسب اطلاعات</span>
                        <h3 class="text-dark down-line mb-4">کالاهای خود را بفروشید!</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <a href="{{ asset('storage') }}/banner/30.png" data-fancybox="images" data-caption="Medical research for eye treatment">
                            <img src="{{ asset('storage') }}/banner/30.png" alt="medical template">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <a href="{{ asset('storage') }}/banner/32.png" data-fancybox="images" data-caption="Research about TMC virus">
                            <img src="{{ asset('storage') }}/banner/32.png" alt="medical template">
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
