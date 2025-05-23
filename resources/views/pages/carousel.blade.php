@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Carousel</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Carousel</li>
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
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Static Carousel</h6>
											<p class="text-muted card-sub-title">Here’s a carousel with slides only.</p>
										</div>
										<div class="">
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/8.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/9.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/10.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">With Controls</h6>
											<p class="text-muted card-sub-title">Adding in the previous and next controls.</p>
										</div>
										<div>
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExample2">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/11.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/12.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/13.jpg')}}">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExample2" role="button" data-bs-slide="prev">
													<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carouselExample2" role="button" data-bs-slide="next">
													<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">With Indicator</h6>
											<p class="text-muted card-sub-title">You can also add the indicators to the carousel, alongside the controls, too align any where</p>
										</div>
										<div>
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExample3">
												<ol class="carousel-indicators">
													<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample3"></li>
													<li data-bs-slide-to="1" data-bs-target="#carouselExample3"></li>
													<li data-bs-slide-to="2" data-bs-target="#carouselExample3"></li>
												</ol>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/14.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/15.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/16.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">With Caption</h6>
											<p class="text-muted card-sub-title">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item.</code></p>
										</div>
										<div>
											<div class="carousel slide" data-bs-ride="carousel" id="carouselExample4">
												<ol class="carousel-indicators">
													<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample4"></li>
													<li data-bs-slide-to="1" data-bs-target="#carouselExample4"></li>
													<li data-bs-slide-to="2" data-bs-target="#carouselExample4"></li>
												</ol>
												<div class="carousel-inner bg-dark">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100 op-3" src="{{asset('assets/img/media/17.jpg')}}">
														<div class="carousel-caption d-none d-md-block">
															<h5>First Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100 op-3" src="{{asset('assets/img/media/18.jpg')}}">
														<div class="carousel-caption d-none d-md-block">
															<h5>Second Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100 op-3" src="{{asset('assets/img/media/19.jpg')}}">
														<div class="carousel-caption d-none d-md-block">
															<h5>Third Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Fade Animate Carousel</h6>
											<p class="text-muted card-sub-title">Add fade transition to your carousel to animate slides with a fade transition instead of a slide.</p>
										</div>
										<div>
											<div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carouselExample5">
												<ol class="carousel-indicators">
													<li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample5"></li>
													<li data-bs-slide-to="1" data-bs-target="#carouselExample5"></li>
													<li data-bs-slide-to="2" data-bs-target="#carouselExample5"></li>
												</ol>
												<div class="carousel-inner bg-dark">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/20.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/1.jpg')}}">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="{{asset('assets/img/media/2.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Thumbnails</h6>
											<p class="text-muted card-sub-title">The Carousel controls the Thumbnails easily design the images with thumbnails</p>
										</div>
										<div class="carousel-slider">
											<div id="carousel" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active"><img src="{{asset('assets/img/media/1.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/2.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/3.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/4.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/5.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/6.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/7.jpg')}}" alt="img"> </div>
													<div class="carousel-item"> <img src="{{asset('assets/img/media/8.jpg')}}" alt="img"> </div>
												</div>
												<a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
													<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
													<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
												</a>
											</div>
											<div class="clearfix">
												<div id="thumbcarousel" class="carousel slide" data-interval="false">
													<div class="carousel-inner">
														<div class="carousel-item active">
															<div data-bs-target="#carousel" data-bs-slide-to="0" class="thumb mt-2"><img src="{{asset('assets/img/media/1.jpg')}}" alt="img"></div>
															<div data-bs-target="#carousel" data-bs-slide-to="1" class="thumb mt-2"><img src="{{asset('assets/img/media/2.jpg')}}" alt="img"></div>
															<div data-bs-target="#carousel" data-bs-slide-to="2" class="thumb mt-2"><img src="{{asset('assets/img/media/3.jpg')}}" alt="img"></div>
															<div data-bs-target="#carousel" data-bs-slide-to="3" class="thumb mt-2"><img src="{{asset('assets/img/media/4.jpg')}}" alt="img"></div>
														</div>
														<div class="carousel-item">
															<div data-bs-target="#carousel" data-bs-slide-to="4" class="thumb mt-2"><img src="{{asset('assets/img/media/5.jpg')}}" alt="img"></div>
															<div data-bs-target="#carousel" data-bs-slide-to="5" class="thumb mt-2"><img src="{{asset('assets/img/media/6.jpg')}}" alt="img"></div>
															<div data-bs-target="#carousel" data-bs-slide-to="6" class="thumb mt-2"><img src="{{asset('assets/img/media/7.jpg')}}" alt="img"></div>
															<div data-bs-target="#carousel" data-bs-slide-to="7" class="thumb mt-2"><img src="{{asset('assets/img/media/8.jpg')}}" alt="img"></div>
														</div>
													</div>
													<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-bs-slide="prev">
														<i class="fa fa-angle-left fs-20" aria-hidden="true"></i>
													</a>
													<a class="carousel-control-next" href="#thumbcarousel" role="button" data-bs-slide="next">
														<i class="fa fa-angle-right fs-20" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Owl Carousel</h6>
											<p class="text-muted card-sub-title">Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider.</p>
										</div>
										<div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/5.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Reynante</h5>
															<p class="mb-1">Web Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/4.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Joyce Chua</h5>
															<p class="mb-1">Team Leader</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/6.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Owen Bongcaras</h5>
															<p class="mb-1">Web Designer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/7.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Mariane Galeon</h5>
															<p class="mb-1">Php Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/8.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Reynante</h5>
															<p class="mb-1">Web Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/9.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Joyce Chua</h5>
															<p class="mb-1">Team Leader</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/10.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Owen Bongcaras</h5>
															<p class="mb-1">Web Designer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/11.jpg')}}">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Mariane Galeon</h5>
															<p class="mb-1">Php Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
														</div>
														<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Multi Slider</h6>
											<p class="text-muted card-sub-title">Multislider is a jQuery powered slideshow that specializes in showing more than one slide at a time. There's no need to find messy CSS and JS work arounds for other single-slide solutions. Multislider allows the developer to focus fully on each individual slide as it's own component, and then displays as many slides as you decide in a manner that is fluid, consistent, and dymanic.</p>
										</div>
										<div id="basicSlider">
											<div class="MS-content">
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/1.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/2.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/3.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/4.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/5.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/6.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/7.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/8.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/9.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/10.jpg')}}" alt="" /> </a>
												</div>
												<div class="item">
													<a href="javascript:void(0);" target="_blank"> <img src="{{asset('assets/img/media/11.jpg')}}" alt="" /> </a>
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

		<!-- MULTISLIDER JS  -->
		<script src="{{asset('assets/plugins/multislider/multislider.js')}}"></script>
		@vite('public/assets/js/carousel.js')

		
@endsection