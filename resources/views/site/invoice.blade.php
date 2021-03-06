@extends('layouts.invoice')


@section('title', 'Invoice')

@section('header-assets')
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="card" id="section-to-print">

        <div class="card-body p-50">
            <div class="invoice">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h2 class="d-flex align-items-center">
                        <img class="m-r-20" src="{{ asset('storage/logo/19.png') }}" alt="image">
                    </h2>
                    <div>
                        <h3 class="text-xs-left m-b-0">صورتحساب #{{ $order->id }}</h3>
                        <p class="text-xs-left m-t-2">وضعیت:
                            @switch($order->status)
                                @case('unapproved')
                                    در انتظار بررسی
                                    @break
                                @case('priced')
                                    در انتظار پرداخت
                                    @break
                                @case('paid')
                                    پرداخت شده
                                    @break
                                @case('approved')
                                    تکمیل شده
                                    @break
                                @case('canceled')
                                    لغو شده
                                    @break
                            @endswitch
                        </p>
                    </div>

                </div>
                <hr class="m-t-b-50">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <b>فروشنده :</b>
                        </p>
                        <p>استان آذربایجان شرقی<br>
                            شهر تبریز<br>
                            فلکه دانشگاه، برج بلور، طبقه 567
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-right">
                            <b>صورتحساب به</b>
                        </p>
                        <p class="text-right">استان تهران<br>شهر تهران<br>خیابان تجریش، جنب بانک ملی، پلاک 789</p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table m-t-b-50">
                        <thead>
                        <tr class="bg-dark text-white print-text-black">
                            <th>#</th>
                            <th>تصویر محصول</th>
                            <th>نام محصول</th>
                            <th style="width: 12%">تعداد</th>
                            <th>قیمت</th>
                            <th style="width: 25%" class="text-right">جمع</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->products as $product)
                            <tr class="text-right">
                                <td class="text-left">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-left">
                                    <img src="{{ $product->featuring_image()->image_url }}" width="50px">
                                </td>
                                <td class="text-left">
                                    {{ $product->name }}
                                </td>
                                <td class="text-left">
                                    <p class="form-control m-0">{{ $product->pivot->quantity }}</p>
                                </td>
                                <td class="text-left">
                                    <div class="input-group">
                                        <p class="form-control text-left">{{ $product->pivot->price ? number_format($product->pivot->price) : 'قیمت تعیین نشده' }}</p>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ریال</span>
                                        </div>
                                    </div>
                                </td>
                                <td data-id="{{ $loop->iteration }}">
                                    {{ number_format($product->pivot->quantity * $product->pivot->price) ?? '0'}}
                                     ریال
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <p>جمع مبالغ: <span id="total_price">{{ number_format($order->total_price) ?? '0'}} ریال</span></p>
                    <p>مالیات (0%): 0 ریال</p>
                    <h4 class="primary-font">جمع: <span id="total_price_with_tax">{{ number_format($order->total_price) ?? '0'}} ریال</span></h4>
                </div>
                <p class="text-center small text-muted  m-t-50">
                    <span class="row">
                        <span class="col-md-6 offset-md-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        </span>
                    </span>
                </p>
            </div>
            <div class="text-right d-print-none">
                <hr class="m-t-b-50">
                @if($order->status == 'priced' && $order->time_to_pay)
                    <button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#Checkout">
                        <i class="fa fa-dollar m-r-5"></i>
                        ثبت پرداخت
                    </button>
                @endif
                <a href="javascript:window.print()" class="btn btn-light m-l-5 my-1">
                    <i class="fa fa-print m-r-5"></i> چاپ
                </a>
            </div>
        </div>
    </div>
    <div class="text-danger ltr-text">
    @foreach($errors->all() as $error)
            {{ $error }}
    @endforeach
    </div>
@endsection

@section('modal')
    <!-- Checkout Modal -->
    <div class="modal fade" id="Checkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">ثبت فیش پرداختی</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="{{ route('order.upload-receipt') }}" method="post" class="dropzone" id="receipt">
                  @csrf
                  <input type="hidden" name="order" value="{{ $order->id }}">

              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
          </div>
        </div>
      </div>
    </div>
@endsection

@include('admin.layouts.sections.footer-scripts')

@section('footer-assets')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <script>
        let receiptDropzone = new Dropzone("#receipt", {
            paramName: "receipt",
            maxFilesize: 5,
            maxFiles: 1,
            uploadMultiple: false,
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
            thumbnailWidth: 120,
            thumbnailHeight: 120,
            thumbnailMethod: "crop",

            dictDefaultMessage:"فایل ها را برای ارسال اینجا بکشید",
            dictFallbackMessage:"مرورگر شما از کشیدن و رها سازی برای ارسال فایل پشتیبانی نمی کند.",
            dictFallbackText:"لطفا از فرم زیر برای ارسال فایل های خود مانند گذشته استفاده کنید.",
            dictFileTooBig:"فایل خیلی بزرگ است (@{{filesize}}MiB). حداکثر اندازه مجاز: @{{maxFilesize}}MiB.",
            dictInvalidFileType:"شما مجاز به ارسال این نوع فایل نیستید.",
            dictResponseError:"سرور با کد @{{statusCode}} پاسخ داد.",
            dictCancelUpload:"لغو ارسال",
            dictUploadCanceled:"ارسال لغو شد.",
            dictCancelUploadConfirmation:"آیا از لغو این ارسال اطمینان دارید؟",
            dictRemoveFile:"حذف فایل",
            dictRemoveFileConfirmation:"آیا از حذف این فایل اطمینان دارید؟",
            dictMaxFilesExceeded:"شما نمی توانید فایل دیگری ارسال کنید.",

            removedfile: function (file, data) {
                fetch('{{ route('uploads.receipt.remove') }}', {
                    method: 'post',
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-Token": "{{ csrf_token() }}"
                    },
                    credentials: "same-origin",
                    body: JSON.stringify({
                        order: {{ $order->id }}
                    })
                })
                    .then(function(response){
                        file.previewElement.remove();
                })
            }
        });

        @if($order->receipt)
        let mockFile = { name: "فایل ارسال", dataURL: "{{ $order->receipt_image }}" };
        receiptDropzone.files.push(mockFile);
        receiptDropzone.emit("addedfile", mockFile);
        receiptDropzone.createThumbnailFromUrl(mockFile,
            receiptDropzone.options.thumbnailWidth,
            receiptDropzone.options.thumbnailHeight,
            receiptDropzone.options.thumbnailMethod, true, function (thumbnail)
            {
                receiptDropzone.emit('thumbnail', mockFile, thumbnail);
            });
        receiptDropzone.emit('complete', mockFile);
        @endif
    </script>
@endsection

