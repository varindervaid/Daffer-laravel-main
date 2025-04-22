@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Blog Page</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog Page</li>
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
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="px-4 pt-4">
										<a href="{{url('blog-details')}}"><img src="{{asset('build/assets/img/media/blog1.jpg')}}" alt="img" class="rounded-lg w-100"></a>
									</div>
									<div class="card-body">
										<div class="item-card-desc d-md-flex mb-3">
											<a href="javascript:void(0);" class="d-flex me-3 mb-2"><span class="fe fe-calendar text-muted me-2 tx-18"></span><div class="mt-0 mt-0 text-dark">20-Mar-2021</div></a>
											<a href="javascript:void(0);" class="d-flex mb-2"><span class="fe fe-user text-muted me-2 tx-18"></span><div class="mt-0 mt-0 text-dark">Dennis Mark</div></a>
											<div class="ms-auto mb-2">
												<a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-18"></span><div class="mt-0 mt-0 text-dark">6 Comments</div></a>
											</div>
										</div>
										<a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
										<div class="media mt-0 border-top">
											<div class="media mg-t-15 profile-footer">
												<div class="media-user">
													<div class="demo-avatar-group">
														<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('build/assets/img/users/12.jpg')}}"></div>
														<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('build/assets/img/users/7.jpg')}}"></div>
														<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}"></div>
														<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('build/assets/img/users/6.jpg')}}"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body p-3">
										<div class="row g-0 blog-list">
											<div class="col-xl-12 col-xxl-5 col-lg-12 col-md-12">
												<div class="card-body p-0">
													<div class="item-card-img">
														<a href="{{url('blog-details')}}">
														<img class="card-img-left h-130 w-100" src="{{asset('build/assets/img/media/blog2.jpg')}}" alt="">
														</a>
													</div>
												</div>
											</div>
											<div class="col-xl-12 col-xxl-7 col-lg-12 col-md-12">
												<div class="card-body p-2">
													<a href="{{url('blog-details')}}"><h5 class="font-weight-semibold mt-3">Circumstances Certain claims</h5></a>
													<p class="">I of human happiness. sint occaecat ccaecat cupidatat non proident, sunt in culpa qui officia cupidatat non proident, sunt in culpa qui officia deserunt No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
													<div class="media py-2 mt-0 border-top"></div>
													<div class="item-card-desc d-flex">
														<div class="main-avatar avatar online">
														<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/2.jpg')}}">
														</div>
														<div class="main-contact-body">
															<h6>Abigail Johnson</h6><span class="phone">2 days ago</span>
														</div>
														<div class="ms-auto mb-2">
															<a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-18"></span><div class="mt-0 mt-0 text-dark">6 Comments</div></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body p-3">
										<div class="row g-0 blog-list">
											<div class="col-xl-12 col-xxl-5 col-lg-12 col-md-12">
												<div class="card-body p-0">
													<div class="item-card-img">
														<a href="{{url('blog-details')}}">
														<img class="card-img-left h-130 w-100 op-8" src="{{asset('build/assets/img/media/blog4.jpg')}}" alt="">
														</a>
													</div>
												</div>
											</div>
											<div class="col-xl-12 col-xxl-7 col-lg-12 col-md-12">
												<div class="card-body p-2">
													<a href="{{url('blog-details')}}"><h5 class="font-weight-semibold mt-3">Teri Dactyl Certain</h5></a>
													<p class="">I of human happiness. sint occaecat ccaecat cupidatat non proident, sunt in culpa qui officia cupidatat non proident, sunt in culpa qui officia deserunt No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
													<div class="media py-2 mt-0 border-top"></div>
													<div class="item-card-desc d-flex">
														<div class="main-avatar avatar online">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/4.jpg')}}">
														</div>
													<div class="main-contact-body">
														<h6>Christian Lerio</h6><span class="phone">3 days ago</span>
													</div>
														<div class="ms-auto mb-2">
															<a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-18"></span><div class="mt-0 mt-0 text-dark">5 Comments</div></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body p-3">
										<div class="row g-0 blog-list">
											<div class="col-xl-12 col-xxl-5 col-lg-12 col-md-12">
												<div class="card-body p-0">
													<div class="item-card-img">
														<a href="{{url('blog-details')}}">
														<img class="card-img-left h-130 w-100 op-9" src="{{asset('build/assets/img/media/blog3.jpg')}}" alt="">
														</a>
													</div>
												</div>
											</div>
											<div class="col-xl-12 col-xxl-7 col-lg-12 col-md-12">
												<div class="card-body p-2">
													<a href="{{url('blog-details')}}"><h5 class="font-weight-semibold mt-3">Circumstances Certain claims</h5></a>
													<p class="">I of human happiness. sint occaecat ccaecat cupidatat non proident, sunt in culpa qui officia cupidatat non proident, sunt in culpa qui officia deserunt No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
													<div class="media py-2 mt-0 border-top"></div>
													<div class="item-card-desc d-flex">
														<div class="main-avatar avatar online">
															<img alt="avatar" class="rounded-circle" src="{{asset('build/assets/img/users/5.jpg')}}">
														</div>
													<div class="main-contact-body">
														<h6>Christian Lerio</h6><span class="phone">3 days ago</span>
													</div>
														<div class="ms-auto mb-2">
															<a class="me-0 d-flex" href="javascript:void(0);"><span class="fe fe-message-square text-muted me-2 tx-18"></span><div class="mt-0 mt-0 text-dark">2 Comments</div></a>
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

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card">
									<a href="{{url('blog-details')}}"><img class="card-img-top w-100 blog-img" src="{{asset('build/assets/img/media/blog11.jpg')}}" alt=""></a>
									<div class="card-body">
										<h5 class="main-content-label mb-3 tx-16">Excepteur occaecat cupidatat</h5>
										<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
										<a class="btn btn-sm ripple btn-primary" href="javascript:void(0);">Read More<i class="fe fe-arrow-right mx-1"></i></a>
									</div>
								 </div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card">
									<a href="{{url('blog-details')}}"><img class="card-img-top w-100 blog-img" src="{{asset('build/assets/img/media/blog6.jpg')}}" alt=""></a>
									<div class="card-body">
										<h5 class="main-content-label mb-3 tx-16">Teri Dactyl Certain</h5>
										<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
										<a class="btn btn-sm ripple btn-primary" href="javascript:void(0);">Read More<i class="fe fe-arrow-right mx-1"></i></a>
									</div>
								 </div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card">
									<a href="{{url('blog-details')}}"><img class="card-img-top w-100 blog-img op-9" src="{{asset('build/assets/img/media/blog9.jpg')}}" alt=""></a>
									<div class="card-body">
										<h5 class="main-content-label mb-3 tx-16">Circumstances Certain claims</h5>
										<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
										<a class="btn btn-sm ripple btn-primary" href="javascript:void(0);">Read More<i class="fe fe-arrow-right mx-1"></i></a>
									</div>
								 </div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card custom-card">
									<a href="{{url('blog-details')}}"><img class="card-img-top w-100 blog-img op-9" src="{{asset('build/assets/img/media/blog10.jpg')}}" alt=""></a>
									<div class="card-body">
										<h5 class="main-content-label mb-3 tx-16">The standard chunk of Lorem</h5>
										<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
										<a class="btn btn-sm ripple btn-primary" href="javascript:void(0);">Read More<i class="fe fe-arrow-right mx-1"></i></a>
									</div>
								 </div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-6">
								<div class="card card-aside custom-card">
									<a href="{{url('blog-details')}}" class="card-aside-column  cover-image rounded-start-11" data-image-src="{{asset('build/assets/img/media/11.jpg')}}" style="background: url({{asset('build/assets/img/media/11.jpg')}}) center center;"></a>
									<div class="card-body">
										<a href="{{url('blog-details')}}"><span class="main-content-label tx-16">Blog Title</span></a>
										<div class="mt-3">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
										<div class="d-flex align-items-center pt-3 mt-auto">
											<div class="main-img-user avatar-sm me-3">
												<a href="{{url('blog-details')}}"><img src="{{asset('build/assets/img/users/1.jpg')}}" class="w-10 rounded-circle" alt="avatar-img"></a>
											</div>
											<div>
												<a href="{{url('blog-details')}}" class="text-default">Alica Nestle</a>
												<small class="d-block text-muted">15 mintues ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0);" class="icon d-none d-md-inline-block ms-3"><i class="far fa-heart me-1"></i></a>
												<a href="javascript:void(0);" class="icon d-none d-md-inline-block ms-3"><i class="far fa-thumbs-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside custom-card">
									<div class="card-body">
										<a href="{{url('blog-details')}}"><span class="main-content-label tx-16">Blog Title</span></a>
										<div class="mt-3">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
										<div class="d-flex align-items-center pt-3 mt-auto">
											<div class="main-img-user avatar-sm me-3">
												<a href="{{url('blog-details')}}"><img src="{{asset('build/assets/img/users/2.jpg')}}" class="w-10 rounded-circle" alt="avatar-img"></a>
											</div>
											<div>
												<a href="{{url('blog-details')}}" class="text-default">Alica Nestle</a>
												<small class="d-block text-muted">15 mintues ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0);" class="icon d-none d-md-inline-block ms-3"><i class="far fa-heart me-1"></i></a>
												<a href="javascript:void(0);" class="icon d-none d-md-inline-block ms-3"><i class="far fa-thumbs-up"></i></a>
											</div>
										</div>
									</div>
									<a href="{{url('blog-details')}}" class="card-aside-column  cover-image rounded-end-11" data-image-src="{{asset('build/assets/img/media/13.jpg')}}" style="background: url({{asset('build/assets/img/media/13.jpg')}}) center center;"></a>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

@endsection