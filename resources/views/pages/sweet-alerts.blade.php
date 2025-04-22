@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Sweet Alerts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sweet Alerts</li>
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
						<div class="sidemenu-height">
							<div class="row row-sm ">
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Basic Alert</h6>
												<p class="text-muted card-sub-title">A Basic Message</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-basic'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Title alert</h6>
												<p class="text-muted card-sub-title">A title with a text under</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-title'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Success alert</h6>
												<p class="text-muted card-sub-title">A Success Message</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-success'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Warning alert</h6>
												<p class="text-muted card-sub-title">A warning message</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-warning'>
												Click me !
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm ">
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Passing a parameter alert</h6>
												<p class="text-muted card-sub-title">By passing a parameter</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-parameter'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Image alert</h6>
												<p class="text-muted card-sub-title">A message with custom Image</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-image'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Timer alert</h6>
												<p class="text-muted card-sub-title">A message with auto close timer</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-timer'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Ajax Alert</h6>
												<p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-ajax'>
												Click me !
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->
						</div>
						<!-- End Row -->
			
@endsection

@section('scripts')

		<!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('public/assets/js/check-all-mail.js')

		<!-- INTERNAL SWEET-ALERT JS -->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
		
@endsection