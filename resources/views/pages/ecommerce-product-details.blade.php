@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Product-Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product-Details</li>
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
								<div class="card custom-card productdesc">
									<div class="card-body h-100">
										<div class="row">
											<div class="col-xl-6 col-lg-12 col-md-12">
												<div class="row">
													<div class="col-3 col-xl-2">
														<div class="clearfix carousel-slider">
															<div id="thumbcarousel" class="carousel slide" data-bs-interval="false">
																<div class="carousel-inner">
																	<div class="carousel-item active">
																		<div data-bs-target="#carousel" data-bs-slide-to="0" class="thumb my-2"><img src="{{asset('assets/img/pngs/shirt-3.png')}}" alt="img"></div>
																		<div data-bs-target="#carousel" data-bs-slide-to="1" class="thumb my-2"><img src="{{asset('assets/img/pngs/shirt-5.png')}}" alt="img"></div>
																		<div data-bs-target="#carousel" data-bs-slide-to="2" class="thumb my-2"><img src="{{asset('assets/img/pngs/shirt-4.png')}}" alt="img"></div>
																		<div data-bs-target="#carousel" data-bs-slide-to="3" class="thumb my-2"><img src="{{asset('assets/img/pngs/shirt-2.png')}}" alt="img"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-7 offset-md-1 col-sm-9 col-8">
														<div class="product-carousel">
															<div id="carousel" class="carousel slide" data-bs-ride="false">
																<div class="carousel-inner">
																	<div class="carousel-item active"><img src="{{asset('assets/img/pngs/shirt-3.png')}}" alt="img" class="img-fluid mx-auto d-block"></div>
																	<div class="carousel-item"> <img src="{{asset('assets/img/pngs/shirt-5.png')}}" alt="img" class="img-fluid mx-auto d-block"></div>
																	<div class="carousel-item"> <img src="{{asset('assets/img/pngs/shirt-4.png')}}" alt="img" class="img-fluid mx-auto d-block"></div>
																	<div class="carousel-item"> <img src="{{asset('assets/img/pngs/shirt-2.png')}}" alt="img" class="img-fluid mx-auto d-block"></div>
																</div>
																<div class="text-center mt-4 mb-4 btn-list">
																	<a href="{{url('ecommerce-cart')}}" class="btn ripple btn-primary"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
																	<a href="javascript:void(0);" class="btn ripple btn-secondary me-2"><i class="fe fe-credit-card"> </i> Buy Now</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-12 col-md-12">
												<div class="mt-4 mb-4">
                                                    <h4 class="mt-1 mb-3">Touch Screen Waterproof Smartwatch</h4>

                                                    <p class="text-muted float-start me-3">
                                                        <span class="fe fe-star text-warning"></span>
                                                        <span class="fe fe-star text-warning"></span>
                                                        <span class="fe fe-star text-warning"></span>
                                                        <span class="fe fe-star text-warning"></span>
                                                        <span class="fe fe-star"></span>
                                                    </p>
                                                    <p class="text-muted mb-4">( 135 Customers Review )</p>
													<h6 class="text-success text-uppercase">20 % Off</h6>
													<h5 class="mb-2">Price : <span class="text-muted me-2"><del>$499 USD</del></span> <b>$299 USD</b></h5>
													<p class="tx-13 text-muted">FREE SHIPPING on above Purchase of <b>$359</b> </p>
													<h6 class="mt-4 fs-16">Description</h6>
													<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized .</p>
													<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
												</div>
												<div class="d-flex  mt-2">
													<div class="mt-2 sizes">Quantity:</div>
													<div class="d-flex ms-2">
														<div class="form-group">
															<select name="quantity" id="select-countries17" class="form-control select2  wd-150">
																<option value="1" selected="">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</div>
													</div>
												</div>
												<div class="colors d-flex me-3 mt-2">
													<span class="mt-2">colors:</span>
													<div class="d-flex gutters-xs ms-4">
														<div class="me-2">
															<label class="colorinput">
																<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
																<span class="colorinput-color bg-dark"></span>
															</label>
														</div>
														<div class="me-2">
															<label class="colorinput">
																<input name="color" type="radio" value="indigo" class="colorinput-input">
																<span class="colorinput-color bg-secondary"></span>
															</label>
														</div>
														<div class="me-2">
															<label class="colorinput">
																<input name="color" type="radio" value="purple" class="colorinput-input">
																<span class="colorinput-color bg-danger"></span>
															</label>
														</div>
														<div class="me-2">
															<label class="colorinput">
																<input name="color" type="radio" value="pink" class="colorinput-input">
																<span class="colorinput-color bg-pink"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mt-4">
											<h5 class="mb-3">Specifications :</h5>
											<div class="">
												<div class="row">
													<div class="col-xl-12">
														<div class="table-responsive">
															<table class="table mb-0 border-top table-bordered text-nowrap">
																<tbody>
																	<tr>
																		<th scope="row">Category</th>
																		<td>Watches</td>
																	</tr>
																	<tr>
																		<th scope="row">Brand</th>
																		<td>Willful</td>
																	</tr>
																	<tr>
																		<th scope="row">Color</th>
																		<td>White</td>
																	</tr>
																	<tr>
																		<th scope="row">Connections</th>
																		<td>Bluetooth</td>
																	</tr>
																	<tr>
																		<th scope="row">Application</th>
																		<td>Messages, Phone, Pedometer, Heart Rate Monitor</td>
																	</tr>
																	<tr>
																		<th scope="row">Supported </th>
																		<td>Fitness Tracker, Sleep Monitor, Reminders</td>
																	</tr>
																	<tr>
																		<th scope="row">Warranty Summary</th>
																		<td>1 Year</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-xl-12 mt-4">
														<div class="card">
															<div class="card-body p-0">
																<div class="d-flex p-3">
																	<h5 class="float-start main-content-label mb-0 mt-2">All Ratings and Reviews</h5>
																	<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm float-end ms-auto">Top Rated</a>
																</div>
																<div class="media mt-0 p-4 border-bottom border-top">
																	<div class="d-flex me-3">
																		<a href="javascript:void(0);"><img class="media-image avatar avatar-md rounded-circle" alt="64x64" src="{{asset('assets/img/users/8.jpg')}}"> </a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-0 mb-1 font-weight-semibold tx-16">Bruce Tran
																			<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
																		</h5>
																		<span class="text-muted tx-13">Tue, 20 Mar 2020</span>
																		<div class="text-warning mt-1">
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star"></i>
																		 </div>
																		<p class="font-13  mb-2 mt-2">
																		   Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
																		</p>
																		<a href="javascript:void(0);" class="me-2"><span class="badge bg-primary">Helpful</span></a>
																		<a href="javascript:void(0);" class="me-2"><span class="">Comment</span></a>
																		<a href="javascript:void(0);" class="me-2"><span class="">Report</span></a>
																	</div>
																</div>
																<div class="media mt-0  p-4 border-bottom">
																	<div class="d-flex me-3">
																		<a href="javascript:void(0);"><img class="media-image avatar avatar-md rounded-circle" alt="64x64" src="{{asset('assets/img/users/3.jpg')}}"> </a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-0 mb-1 font-weight-semibold tx-16">Mina Harpe
																			<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
																		</h5>
																		<span class="text-muted tx-13">Tue, 20 Mar 2020</span>
																		<div class="text-warning mt-1">
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star"></i>
																		 </div>
																		<p class="font-13  mb-2 mt-2">
																		   Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
																		</p>
																		<a href="javascript:void(0);" class="me-2"><span class="badge bg-primary">Helpful</span></a>
																		<a href="javascript:void(0);" class="me-2"><span class="">Comment</span></a>
																		<a href="javascript:void(0);" class="me-2"><span class="">Report</span></a>
																	</div>
																</div>
																<div class="media mt-0 p-4 border-bottom">
																	<div class="d-flex me-3">
																		<a href="javascript:void(0);"><img class="media-image avatar avatar-md rounded-circle" alt="64x64" src="{{asset('assets/img/users/5.jpg')}}"> </a>
																	</div>
																	<div class="media-body">
																		<h5 class="mt-0 mb-1 font-weight-semibold tx-16">Maria Quinn
																			<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
																		</h5>
																		<span class="text-muted tx-13">Tue, 20 Mar 2020</span>
																		<div class="text-warning mt-1">
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star active"></i>
																			<i class="bx bxs-star text-light"></i>
																		 </div>
																		<p class="font-13  mb-2 mt-2">
																		   Lorem Ipsum available, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
																		</p>
																		<a href="javascript:void(0);" class="me-2"><span class="badge bg-primary">Helpful</span></a>
																		<a href="javascript:void(0);" class="me-2"><span class="">Comment</span></a>
																		<a href="javascript:void(0);" class="me-2"><span class="">Report</span></a>
																	</div>
																</div>
																<a class="text-center w-100 d-block p-3 font-weight-bold" href="javascript:void(0);">See All Reviews</a>
															</div>
															<div class="border-top px-4 pb-2 pt-4">
																<h5 class="mb-4">Leave Comment</h5>
																<div class="mb-1">
																	<div class="row">
																		<div class="form-group col-md-6">
																			<div class="mb-3 font-weight-semibold">Your Name</div> <input class="form-control" placeholder="Your Name" type="text">
																		</div>
																		<div class="form-group col-md-6">
																			<div class="mb-3 font-weight-semibold">Email Address</div> <input class="form-control" placeholder="Email Address" type="text">
																		</div>
																	</div>
																</div>
																<span class="star-rating">
																	<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
																	<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
																	<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
																	<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
																	<a href="javascript:void(0);"><i class="icofont-ui-rating icofont-2x"></i></a>
																</span>
																<form>
																	<div class="form-group">
																		<div class="mb-3 font-weight-semibold">Your Comment</div>
																		<textarea class="form-control"></textarea>
																	</div>
																	<div class="form-group">
																		<button class="btn btn-primary mt-3 mb-0" type="button">Post your review</button>
																	</div>
																</form>
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
						<!-- End Row -->
						
@endsection

@section('scripts')

		<!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('public/assets/js/check-all-mail.js')


@endsection