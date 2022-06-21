@extends('admin.layouts.app')

@section('header-assets')
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/nestable/nestable.css') }}">
    <!-- TODO : all cdns should be local  -->
    <link rel="stylesheet" href="https://ciar4n.com/izmir/assets/css/izmir.css">
    <link rel="stylesheet" href="https://v3dboy.ir/previews/html/nextable/default/vendors/select2/css/select2.min.css">

@endsection


@section('title', 'Users')

@section('content')
    <div class="row card flex-row">
        <!-- right col : start  -->
        <div class="card-body col-3">
            <h6 class="card-title">ایجاد / تغییر</h6>
            
            <form>
            <label for="name">نام</label>
            <input class="form-control" type="text">

            <label for="name">دسته بندی</label>
            <!-- select box -->
                <div class="form-group">
                    <select class="js-example-basic-single">
                        <option>هیچ کدام</option>
                        <option> o دسته 1</option>
                        <option> oo دسته 2</option>
                        <option> ooo دسته 3</option>
                        <option> ooo دسته 4</option>
                        <option> oo دسته 5</option>
                        <option> o دسته 6</option>
                        <option> o دسته 7</option>
                    </select>
                </div>

                <label for="name">تصویر محصول</label>
                <div class="form-group">
                    <figure class="c4-izmir c4-border-cc-2 c4-gradient-bottom-left c4-image-zoom-in" style="--primary-color: #ef6698; --secondary-color: #4028ac;">
                        <img src="https://rahamteam.ir/wp-content/uploads/2022/05/rEZ.png" alt="Sample Image">
                        <figcaption class="c4-layout-center-center" data-toggle="modal" data-target="#exampleModal">
                            <div class="c4-izmir-icon-wrapper c4-fade">
                                <h6 class="card-title">تصویر محصول</h6>
                            </div>
                        </figcaption>
                    </figure>
                    <!-- image modal : start -->
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true" id="exampleModal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title">انتخاب یا تعویض عکس شاخص</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                                        <i class="ti-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#" class="dropzone"></form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    <button type="button" class="btn btn-primary">ذخیره تغییرات</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- image modal : end -->
                </div>
            </form>
            <button type="button" class="btn btn-primary w-100 justify-content-center">افزودن دسته جدید</button>
        </div>
        <!-- right col : end  -->
        <!-- left col : start  -->
        <div class="card-body col-9">
        <div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">دسته بندی ها</h6>
						<p class="text-muted">شما می توانید دسته بندی ها را بکشید و درگ کنید</p>
						<div class="dd" id="nestable1">
							<ol class="dd-list">
								<li class="dd-item" data-id="1">
									<div class="dd-handle">آیتم 1</div>
								</li>
								<li class="dd-item" data-id="2">
									<div class="dd-handle">آیتم 2</div>
								</li>
								<li class="dd-item" data-id="3">
									<div class="dd-handle">آیتم 3</div>
									<ol class="dd-list">
										<li class="dd-item" data-id="4">
											<div class="dd-handle">آیتم 4</div>
										</li>
										<li class="dd-item" data-id="5">
											<div class="dd-handle">آیتم 5</div>
										</li>
										<li class="dd-item" data-id="6">
											<div class="dd-handle">آیتم 6</div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="form-group">
					<textarea id="nestable1-output" class="form-control"></textarea>
				</div>
			</div>
		</div>
    </div>
        <!-- left col : end  -->



    </div>
@endsection
    <!-- adding nestable js to project  -->
@section('js')



@section('footer-assets')
    <script src="{{ asset('admin/vendors/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/vendors/nestable/jquery.nestable-rtl.js') }}"></script>
    <script>
		$(function () {
			var updateOutput = function (e) {
				var list = e.length ? e : $(e.target),
					output = list.data('output');
				if (window.JSON) {
					output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
				} else {
					output.val('JSON browser support required for this demo.');
				}
			};

			$('#nestable1').nestable({
				group: 1
			}).on('change', updateOutput);

			updateOutput($('#nestable1').data('output', $('#nestable1-output')));

			$('#nestable-menu').on('click', function (e) {
				var target = $(e.target),
					action = target.data('action');
				if (action === 'expand-all') {
					$('.dd').nestable('expandAll');
				}
				if (action === 'collapse-all') {
					$('.dd').nestable('collapseAll');
				}
			});
		});
	</script>
    <!-- TODO : all cdn should be local -->
    <script src="https://v3dboy.ir/previews/html/nextable/default/vendors/select2/js/select2.min.js"></script>
    <script src="https://v3dboy.ir/previews/html/nextable/default/assets/js/examples/select2.js"></script>

@endsection