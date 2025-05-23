@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Details</li>
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
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body px-4 pt-4">
										<a href="javascript:void(0);"><img src="{{asset('assets/img/media/blog-details.jpg')}}" alt="img" class="rounded-5 w-100"></a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class=" card-body ">
										<h5 class="mb-3">File details :</h5>
										<div class="">
											<div class="row">
												<div class="col-xl-12">
													<div class="table-responsive">
														<table class="table mb-0 border-top table-bordered text-nowrap">
															<tbody>
																<tr>
																	<th scope="row">File-name</th>
																	<td>image.jpg</td>
																</tr>
																<tr>
																	<th scope="row">File-size</th>
																	<td>12.45mb</td>
																</tr>
																<tr>
																	<th scope="row">uploaded-date</th>
																	<td>01-12-2020</td>
																</tr>
																<tr>
																	<th scope="row">uploaded-by</th>
																	<td>prityy abodh</td>
																</tr>
																<tr>
																	<th scope="row">image-width</th>
																	<td>1000</td>
																</tr>
																<tr>
																	<th scope="row">image-height</th>
																	<td>600</td>
																</tr>
																<tr>
																	<th scope="row">File-formate</th>
																	<td>jpg</td>
																</tr>
																<tr>
																	<th scope="row">File-location</th>
																	<td>storage/photos/image.jpg</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-12  col-md-12">
								<div class="">
									<div class=" h-100">
										<div id="owl-demo2" class="owl-carousel owl-carousel-icons2 mb-3 mt-3">
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-9.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-8.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-7.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-6.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-5.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-4.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-2.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-1.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-3.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<h5 class="mb-3">Recent Files</h5>
										<div class="row row-sm">
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-8.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-6.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-7.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-2.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-5.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-4.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-3.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="card custom-card">
													<img src="{{asset('assets/img/files/img-9.jpg')}}" alt="img" class="rounded-5">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!-- INTERNAL OWL CAROUSEL JS -->
		<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
		@vite('public/assets/js/carousel.js')


@endsection