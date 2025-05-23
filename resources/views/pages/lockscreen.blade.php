@extends('layouts.custom-master')

@section('styles')

@endsection

@section('content')

@section('custom-body')
	<body class="ltr main-body leftmenu error-1">
@endsection

@section('custom-body-page')
<div class="page main-signin-wrapper">
@endsection

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block bg-primary details">
								<div class="mt-4 pt-4 ps-5 ms-3 pe-5 pos-absolute">
									<img src="{{asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Unlock</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Enter your password to access the admin.</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body main-profile-overview mt-3 mb-3">
											<img src="{{asset('assets/img/brand/logo-light.png')}}" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
											<img src="{{asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-start mb-2">Lockscreen</h5>
											<p class="mb-4 text-muted tx-13 ms-0 text-start">Unlock your screen by entering password</p>
											<form action="{{url('index')}}">
												<div class="text-start d-flex float-start mb-4 user-lock">
													<img alt="avatar avatar-sm" class="rounded-circle mb-0" src="{{asset('assets/img/users/1.jpg')}}">
													<div class="my-auto">
														<p class="font-weight-semibold my-auto ms-2 text-uppercase ">Sonia Taylor</p>
													</div>
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your password" type="password">
												</div>
												<div class="text-start">
													<label class="">
														<input type="checkbox" name="form-switch-checkbox" class="form-switch-input">
														<span class="form-switch-indicator"></span>
														<span class="form-switch-description">show password</span>
													</label>
												</div>
												<a href="{{url('index')}}" class="btn btn-main-primary btn-block text-white">Unlock</a>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>

@endsection

@section('scripts')

@endsection