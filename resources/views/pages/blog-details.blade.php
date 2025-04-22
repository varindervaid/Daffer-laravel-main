@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Blog-Details</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog-Details</li>
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
							<div class="col-xxl-9 col-xl-12 col-lg-12">
								<div class="card custom-card overflow-hidden">
									<div class="px-4 pt-4">
										<a href="{{url('blog-details')}}"><img src="{{asset('assets/img/media/blog-details.jpg')}}" alt="img" class="rounded-6 w-100"></a>
									</div>
									<div class="card-body">
										<div class="item-card-desc d-md-flex mb-3">
											<a href="javascript:void(0);" class="d-flex">
												<span class="text-primary fs-18 me-2"><i class="fe fe-calendar"></i></span>
												<span class="my-auto text-dark me-2">20-Mar-2021</span>
											</a>
											<a href="javascript:void(0);" class="d-flex mg-l-0 mg-md-l-15 me-4">
												<span class="text-primary fs-18 me-2"><i class="fe fe-user"></i></span>
												<span class="my-auto text-dark">Dennis Mark</span>
											</a>
											<a href="javascript:void(0);" class="d-flex ms-auto">
												<span class="text-primary fs-18 me-2"><i class="mdi mdi-message-outline"></i></span>
												<span class="my-auto text-dark">6 Comments</span>
											</a>
										</div>
										<a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">I must explain to you how all this mistaken idea  the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
										<p class="">Sunt in culpa qui officia cupidatat non proident, sunt in culpa qui officia deserunt No one rejects, dislikes, or avoids pleasure itself, because it is pleasure of denouncing pleasure and praising pain was born.of denouncing pleasure and praising pain was born.</p>
										<p class="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
										<p class="tag tag-default px-2 py-1  mb-0 me-1">Travel</p>
										<p class="tag tag-default px-2 py-1 mb-0 me-1">Nature</p>
										<p class="tag tag-default px-2 py-1 mb-0 me-1">Life</p>
										<p class="tag tag-default px-2 py-1 mt-2">Discover</p>
									</div>
									<div class="card-footer">
										<div class="media profile-footer">
											<div class="media-user">
												<div class="demo-avatar-group">
													<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('assets/img/users/12.jpg')}}"></div>
													<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('assets/img/users/7.jpg')}}"></div>
													<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('assets/img/users/5.jpg')}}"></div>
													<div class="main-img-user"><img alt="" class="rounded-circle" src="{{asset('assets/img/users/6.jpg')}}"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-12 col-lg-12">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="">
										<div class="p-4 border-bottom">
											<a class="btn btn-main-primary btn-block btn-compose" href="javascript:void(0);" id="btnCompose">Blog Categories</a>
										</div>
										<div class="card-body tab-list-items">
											<div class="main-content-left main-content-left-mail">
												<div class="main-mail-menu">
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link active" href="javascript:void(0);">
															<i class="fe fe-music"></i> music <span>20 post</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-truck"></i> Travel <span>3 post</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-sunset"></i> Nature & Life <span>10 post</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-monitor"></i>Technologie <span>8 post</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-heart"></i> Fashion <span>15 post</span></a>
													</nav>
												</div><!-- main-mail-menu -->
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header">
										<h6 class="main-content-label">Trending Posts</h6>
									</div>
									<div class="card-body">
										<ul class="list-unstyled">
											<li class="media d-block d-sm-flex">
												<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/media/6.jpg')}}">
												<div class="media-body my-auto">
													<p class="mb-0 font-weight-bold fs-15">Sed ut perspiciatis unde omnis iste natus error.</p>
													<p class="mb-0 fs-11 text-muted">2 days ago</p>
												</div>
											</li>
											<li class="media d-block d-sm-flex mg-t-25">
												<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/media/7.jpg')}}">
												<div class="media-body my-auto">
													<p class="mb-0 font-weight-bold fs-15">Excepteur occaecat cupidatat doloremque laudantium.</p>
													<p class="mb-0 fs-11 text-muted">2 days ago</p>
												</div>
											</li>
											<li class="media d-block d-sm-flex mg-t-25">
												<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/media/8.jpg')}}">
												<div class="media-body my-auto">
													<p class="mb-0 font-weight-bold fs-15">Sed ut perspiciatis unde omnis iste natus error.</p>
													<p class="mb-0 fs-11 text-muted">2 days ago</p>
												</div>
											</li>
											<li class="media d-block d-sm-flex mg-t-25">
												<img alt="img" class="wd-100p wd-sm-100  mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{asset('assets/img/media/4.jpg')}}">
												<div class="media-body my-auto">
													<p class="mb-0 font-weight-bold fs-15">Sed ut perspiciatis unde omnis iste natus error.</p>
													<p class="mb-0 fs-11 text-muted">4 days ago</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
						
                        <!-- Row -->
						<div class="row row-sm">
							<div class="col-xl-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
                                        <div>
											<h6 class="main-content-label mb-3">Comments</h6>
										</div>
                                        <div class="text-wrap">
											<div class="example">
												<div class="d-sm-flex comment-section">
                                                    <div class="d-flex me-3">
                                                        <a href="javascript:void(0);"><img class="main-avatar avatar" alt="img" src="{{asset('assets/img/users/1.jpg')}}"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-1 font-weight-semibold">Rohina Klen
                                                            <span class="tx-14 ms-0"><i class="fe fe-check-circle text-success tx-12"></i></span>
                                                            <span class="tx-12 text-muted ms-2"> 10mins ago</span>
                                                        </h5>
                                                        <p class="font-13  mb-2 mt-2">
                                                        Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                                        </p>
                                                        <a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-success-light">Reply</span></a>
                                                        <a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-danger-light">Delete</span></a>
                                                        <div class="btn-group btn-group-sm mb-1 ms-auto float-sm-end">
                                                            <button class="btn btn-light" ><span class="fe fe-thumbs-up tx-16"></span></button>
                                                            <button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
                                        <div class="text-wrap mt-2">
											<div class="example">
												<div class="d-sm-flex comment-section">
                                                    <div class="d-flex me-3">
                                                        <a href="javascript:void(0);"><img class="main-avatar avatar" alt="img" src="{{asset('assets/img/users/2.jpg')}}"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-1 font-weight-semibold">Dennis Mark
                                                            <span class="tx-14 ms-0"><i class="fe fe-check-circle text-success tx-12"></i></span>
                                                            <span class="tx-12 text-muted ms-2"> 10mins ago</span>
                                                        </h5>
                                                        <p class="font-13  mb-2 mt-2">
                                                        Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                                        </p>
                                                        <a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-success-light">Reply</span></a>
                                                        <a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-danger-light">Delete</span></a>
                                                        <div class="btn-group btn-group-sm mb-1 ms-auto float-sm-end">
                                                            <button class="btn btn-light" ><span class="fe fe-thumbs-up tx-16"></span></button>
                                                            <button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
                                        <div class="text-wrap mt-2">
											<div class="example">
												<div class="d-sm-flex comment-section">
                                                    <div class="d-flex me-3">
                                                        <a href="javascript:void(0);"><img class="main-avatar avatar" alt="img" src="{{asset('assets/img/users/3.jpg')}}"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                                            <span class="tx-14 ms-0"><i class="fe fe-check-circle text-success tx-12"></i></span>
                                                            <span class="tx-12 text-muted ms-2"> 10mins ago</span>
                                                        </h5>
                                                        <p class="font-13  mb-2 mt-2">
                                                        Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                                        </p>
                                                        <a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-success-light">Reply</span></a>
                                                        <a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-danger-light">Delete</span></a>
                                                        <div class="btn-group btn-group-sm mb-1 ms-auto float-sm-end">
                                                            <button class="btn btn-light" ><span class="fe fe-thumbs-up tx-16"></span></button>
                                                            <button class="btn btn-light" ><span class="fe fe-thumbs-down tx-16"></span></button>
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
							<div class="col-xl-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
                                        <div>
											<h6 class="main-content-label mb-3">Add A Comment</h6>
										</div>
                                        <div class="text-wrap">
											<div class="example">
												<div class="">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="name1" placeholder="Your Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Comment"></textarea>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
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

@endsection