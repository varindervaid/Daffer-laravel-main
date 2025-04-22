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
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-4 pt-5 p-2 pos-absolute">
									<img src="{{asset('assets/img/brand/logo-light.png')}}" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="{{asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Reset Your Password</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="main-container container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="{{asset('assets/img/brand/logo-light.png')}}" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
											<img src="{{asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-start mb-2">Reset Your Password</h5>
											<p class="mb-4 text-muted tx-13 ms-0 text-start">It's free to signup and only takes a minute.</p>
											<form method="post" action="{{route('password.update')}}">
												@csrf
												<div class="form-group text-start">
												
													<input name="email" type="hidden" value="{{$email}}">
													<input  type="hidden" name="token" value="{{$token}}">

												</div>
												<div class="form-group text-start">
													<label>New Password</label>
													<input class="form-control" name="password" placeholder="Enter your password" type="password">
													@error('password')
														<span class="text-danger" >
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group text-start">
													<label>Confirm Password</label>
													<input class="form-control" placeholder="Enter your password" name="password_confirmation" type="password">
													@error('confirmed')
														<span class="text-danger">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<button type="submit" class="btn btn-main-primary btn-block text-white">Reset Password</a>
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