@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Gallery</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
									  <i class="fe fe-download me-2"></i> Import
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
									  <i class="fe fe-filter me-2"></i> Filter
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fe fe-download-cloud me-2"></i> Download Report
									</button>
								</div>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Light Gallery</h6>
											<p class="text-muted card-sub-title">A customizable, modular, responsive, lightbox gallery plugin for jQuery.</p>
										</div>
										<ul id="lightgallery" class="list-unstyled row mb-0">
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/1.jpg')}}" data-src="{{asset('assets/img/media/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/1.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/2.jpg')}}" data-src="{{asset('assets/img/media/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/2.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/3.jpg')}}" data-src="{{asset('assets/img/media/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/3.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/4.jpg')}}" data-src="{{asset('assets/img/media/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/4.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/5.jpg')}}" data-src="{{asset('assets/img/media/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/5.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 ps-md-2 pe-md-2" data-responsive="{{asset('assets/img/media/6.jpg')}}" data-src="{{asset('assets/img/media/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/6.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/7.jpg')}}" data-src="{{asset('assets/img/media/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/7.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/8.jpg')}}" data-src="{{asset('assets/img/media/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive" src="{{asset('assets/img/media/8.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="{{asset('assets/img/media/9.jpg')}}" data-src="{{asset('assets/img/media/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive mb-0" src="{{asset('assets/img/media/9.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0" data-responsive="{{asset('assets/img/media/10.jpg')}}" data-src="{{asset('assets/img/media/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive mb-0" src="{{asset('assets/img/media/10.jpg')}}" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0" data-responsive="{{asset('assets/img/media/11.jpg')}}" data-src="{{asset('assets/img/media/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive mb-0" src="{{asset('assets/img/media/11.jpg')}}" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 " data-responsive="{{asset('assets/img/media/12.jpg')}}" data-src="{{asset('assets/img/media/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="javascript:void(0);" class="wd-100p">
													<img class="img-responsive mb-0" src="{{asset('assets/img/media/12.jpg')}}" alt="Thumb-2">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!-- INTERNAL GALLERY JS -->
		<script src="{{asset('assets/plugins/gallery/picturefill.js')}}"></script>
		<script src="{{asset('assets/plugins/gallery/lightgallery.js')}}"></script>
		<script src="{{asset('assets/plugins/gallery/lightgallery-1.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-pager.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-hash.js')}}"></script>
        <script src="{{asset('assets/plugins/gallery/lg-share.js')}}"></script>

@endsection