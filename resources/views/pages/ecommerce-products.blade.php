@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Products</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Products</li>
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
							<div class="col-md-8 col-lg-8">
								<div class="row row-sm">
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/1.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/01.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<span class="product-discount-label">-33%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Women's Red dress</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/2.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/02.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Casual wear top</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/3.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/03.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-info">-50%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Party wear black top</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/4.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/04.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Women's Rayon top</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/5.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/05.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-danger">-40%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Western Skirt & Top</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/1.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/1.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Party Wear Fancy Top</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/6.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/06.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<span class="product-discount-label bg-warning">-33%</span>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Long Floral Tunic Tops</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/7.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/07.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="{{url('ecommerce-cart')}}">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Long Slit Full Sleeve</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
										<div class="card custom-card">
											<div class="p-0 ht-100p">
												<div class="product-grid">
													<div class="product-image">
														<a href="{{url('ecommerce-product-details')}}" class="image">
															<img class="pic-1" alt="product-image-1" src="{{asset('assets/img/pngs/8.png')}}">
															<img class="pic-2" alt="product-image-2" src="{{asset('assets/img/pngs/08.png')}}">
														</a>
														<a class="product-like-icon" href="javascript:void(0);"><i class="far fa-heart"></i></a>
														<div class="product-link">
															<a href="javascript:void(0);">
																<i class="fa fa-shopping-cart"></i>
																<span>Add to cart</span>
															</a>
															<a href="{{url('ecommerce-product-details')}}">
																<i class="fas fa-eye"></i>
																<span>Quick View</span>
															</a>
														</div>
													</div>
													<div class="product-content">
														<h3 class="title"><a href="javascript:void(0);">Long Floral Tunic Tops</a></h3>
														<div class="price"><span class="old-price">$25.00</span><span class="text-danger">$20.00</span></div>
														<ul class="rating">
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="fas fa-star"></li>
															<li class="far fa-star"></li>
														</ul>
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
							<div class="col-md-4 col-lg-4">
								<div class="card custom-card">
									<div class="card-body">
										<div class="row row-sm">
											<div class="col-sm-12">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search ...">
													<span class="">
														<button class="btn ripple btn-primary" type="button">Search</button>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-md-12 col-lg-12">
										<div class="card custom-card">
											<div class="card-header custom-card-header">
												<h6 class="main-content-label mb-3">Categories</h6>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label">Mens</label>
													<select name="beast" id="select-beast" class="form-control select2">
														<option label="Select"></option>
														<option value="1">Foot wear</option>
														<option value="2">Top wear</option>
														<option value="3">Bootom wear</option>
														<option value="4">Men's Groming</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Women</label>
													<select name="beast" id="select-beast1" class="form-control select2">
														<option label="Select"></option>
														<option value="1">Western wear</option>
														<option value="2">Foot wear</option>
														<option value="3">Top wear</option>
														<option value="4">Bootom wear</option>
														<option value="5">Beuty Groming</option>
														<option value="6">Accessories</option>
														<option value="7">jewellery</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Baby & Kids</label>
													<select name="beast" id="select-beast2" class="form-control select2">
														<option label="Select"></option>
														<option value="1">Boys clothing</option>
														<option value="2">girls Clothing</option>
														<option value="3">Toys</option>
														<option value="4">Baby Care</option>
														<option value="5">Kids footwear</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Electronics</label>
													<select name="beast" id="select-beast3" class="form-control select2">
														<option label="Select"></option>
														<option value="1">Mobiles</option>
														<option value="2">Laptops</option>
														<option value="3">Gaming & Accessories</option>
														<option value="4">Health care Appliances</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Sport,Books & More </label>
													<select name="beast" id="select-beast4" class="form-control select2">
														<option label="Select"></option>
														<option value="1">Stationery</option>
														<option value="2">Books</option>
														<option value="3">Gaming</option>
														<option value="4">Music</option>
														<option value="5">Exercise & fitness</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Price</label>
													<label class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
														<span class="custom-control-label">Under $25</span>
													</label>
													<label class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="example-radios" value="option2">
														<span class="custom-control-label">$25 to $50</span>
													</label>
													<label class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="example-radios" value="option2">
														<span class="custom-control-label">$50 to $100</span>
															</label>
													<label class="custom-control custom-radio">
														<input type="radio" class="custom-control-input" name="example-radios" value="option2">
														<span class="custom-control-label">Other (specify)</span>
													</label>
												</div>
												<a class="btn ripple btn-primary btn-block" href="javascript:void(0);">Apply Filter</a>
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