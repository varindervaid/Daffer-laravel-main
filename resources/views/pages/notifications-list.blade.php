@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Notifications List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notifications List</li>
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

						<!-- Container -->
						<div class="container">
							<ul class="notification">
								<li>
									<div class="notification-time">
										<span class="date">Today</span>
										<span class="time">02:31</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Today</span>
										<span class="time ms-2">02:31</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md online">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/1.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Dennis Trexy</p>
													<p class="mb-0 tx-13 text-muted">2 Members Accepted your Request.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">2 Hrs ago</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Yesterday</span>
										<span class="time">18:47</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Yesterday</span>
										<span class="time ms-2">18:47</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md offline">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/2.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Robbie Ruder</p>
													<p class="mb-0 tx-13 text-muted">Created New Template for Designing Department.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">18:47</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Yesterday</span>
										<span class="time">06:43</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Yesterday</span>
										<span class="time ms-2">06:43</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md online">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/3.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Elida Distefa</p>
													<p class="mb-0 tx-13 text-muted">Shipment is Out for Delivery.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">06:43</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Oct 23</span>
										<span class="time">03:15</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Oct 23</span>
										<span class="time ms-2">03:15</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md online">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/4.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Harvey Mattos</p>
													<p class="mb-0 tx-13 text-muted">Mentioned you in a post.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">03:15</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Oct 15</span>
										<span class="time">12:14</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Oct 15</span>
										<span class="time ms-2">12:14</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md offline">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/5.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Catrice Doshier</p>
													<p class="mb-0 tx-13 text-muted">2 Members Accepted your Request.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">12:14</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Sep 30</span>
										<span class="time">14:04</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Sep 30</span>
										<span class="time ms-2">14:04</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md offline">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/6.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Mercy Ritia</p>
													<p class="mb-0 tx-13 text-muted">Created New Template for Designing Department.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">14:04</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Sep 18</span>
										<span class="time">12:26</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Sep 18</span>
										<span class="time ms-2">12:26</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md online">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/7.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Mark Jhon</p>
													<p class="mb-0 tx-13 text-muted">Shipment is Out for Delivery.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">12:26</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Sep 03</span>
										<span class="time">05:37</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Sep 03</span>
										<span class="time ms-2">05:37</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md offline">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/8.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Benedict Vallone</p>
													<p class="mb-0 tx-13 text-muted">Thanking you for Accepting Request.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">05:37</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="notification-time">
										<span class="date">Aug 28</span>
										<span class="time">15:24</span>
									</div>
									<div class="notification-icon">
										<a href="javascript:void(0);"></a>
									</div>
									<div class="notification-time-date mb-2 d-block d-md-none">
										<span class="date">Aug 28</span>
										<span class="time ms-2">15:24</span>
									</div>
									<div class="notification-body">
										<div class="media mt-0">
											<div class="main-avatar avatar-md online">
												<img alt="avatar" class="rounded-6" src="{{asset('assets/img/users/9.jpg')}}">
											</div>
											<div class="media-body ms-3 d-flex">
												<div class="">
													<p class="tx-14 text-dark mb-0 tx-semibold">Paul Johny</p>
													<p class="mb-0 tx-13 text-muted">Invited you to a Group.</p>
												</div>
												<div class="notify-time">
													<p class="mb-0 text-muted tx-11">15:24</p>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="text-center mb-4">
								<a href="javascript:void(0);" class="btn ripple btn-primary w-md" role="button">Load more</a>
							</div>
						</div>
						<!-- End Container -->

@endsection

@section('scripts')

@endsection