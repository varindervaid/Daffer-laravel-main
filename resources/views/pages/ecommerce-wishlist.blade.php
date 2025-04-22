@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Wishlist</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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

						<!--Row-->
						<div class="row row-sm" id="wishlist">
							<div class="col-md-12 col-lg-12 col-xl-12">
								<div class="row row-sm">
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/1.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Party Wear Fancy Top</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$49.00</span>
																<span class="fs-18">$39.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/2.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Long Slit Full Sleeve</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$30.00</span>
																<span class="fs-18">$21.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/3.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Party wear black top</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$29.00</span>
																<span class="fs-18">$15.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/4.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Women's Rayon top</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$32.00</span>
																<span class="fs-18">$22.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/5.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Western Skirt & Top</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$30.00</span>
																<span class="fs-18">$21.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (14)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/6.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Long Floral Tunic Tops</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$29.00</span>
																<span class="fs-18">$15.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (22)</a>
														</div>
														<div class=" mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/7.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Long Slit Full Sleeve</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$200.00</span>
																<span class="fs-18">$149.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (19)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-xxl-3 col-sm-6 alert mb-0">
										<div class="card custom-card">
											<div class="p-0">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/8.png')}}">
														</a>
														<a class="wishlist-icon" href="javascript:void(0);"  data-bs-dismiss="alert" aria-label="Close"><i class="far fa-heart"></i></a>
													</div>
													<div class="product-content">
														<div class="d-flex">
															<div>
																<h3 class="title"><a href="javascript:void(0);">Long Floral Tunic Tops</a></h3>
															</div>
															<div class="price text-end ms-auto">
																<span class="old-price">$49.00</span>
																<span class="fs-18">$39.00</span>
															</div>
														</div>
														<div>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);"><i class="far fa-star text-warning"></i></a>
															<a href="javascript:void(0);" class="me-4 text-muted"> (25)</a>
														</div>
														<div class="mt-3">
															<a href="{{url('ecommerce-cart')}}" class="btn btn-block btn-primary"><i class="fe fe-shopping-cart me-2"></i>Add to Cart</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<nav>
									<ul class="pagination justify-content-end">
										<li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Prev</a></li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<!-- row closed  -->
						
@endsection

@section('scripts')

		<!-- INTERNAL CHART.BUNDLE JS -->
		<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- PEITY JS -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- INTERNAL APEXCHART JS -->
		@vite('public/assets/js/apexcharts.js')


		<!-- INTERNAL POLYFILLS JS -->
		<script src="{{asset('assets/plugins/polyfill/polyfill.min.js')}}"></script>
		<script src="{{asset('assets/plugins/polyfill/classList.min.js')}}"></script>
		<script src="{{asset('assets/plugins/polyfill/polyfill_mdn.js')}}"></script>

		<!-- INTERNAL JVECTORMAP JS -->
		<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>

@endsection