@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Wizards</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
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
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Content Wizard</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic horizontal form wizard.</p>
										</div>
										<div id="wizard1">
											<h3>Login</h3>
											<section>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
													<input class="form-control" required="" type="email">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
													<input class="form-control" required="" type="password">
												</div>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">Check me out</span>
												</label>
											</section>
											<h3>New User</h3>
											<section>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">User Name</label>
													<input class="form-control" required="" type="text">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
													<input class="form-control" required="" type="email">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
													<input class="form-control" required="" type="password">
												</div>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">Check me out</span>
												</label>
											</section>
											<h3>End</h3>
											<section>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">I agree terms & Conditions</span>
												</label>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vertical Form Wizard</h6>
											<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
										</div>
										<div id="wizard3">
											<h3>Personal Information</h3>
											<section>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
													<input class="form-control" required="" type="email">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
													<input class="form-control" required="" type="password">
												</div>
												<div>
													<input id="demo" type="file" name="files" accept="image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
												</div>
												<div class="mt-3">
													<input type="file" class="dropify dropify1" onchange="readURL(this);" data-height="200">
												</div>
												<label class="ckbox mt-2">
													<input type="checkbox"><span class="tx-13">Check me out</span>
												</label>
											</section>
											<h3>New User</h3>
											<section>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">User Name</label>
													<input class="form-control" required="" type="text">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label>
													<input class="form-control" required="" type="email">
												</div>
												<div class="form-group">
													<label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label>
													<input class="form-control" required="" type="password">
												</div>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">Check me out</span>
												</label>
											</section>
											<h3>End</h3>
											<section>
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">I agree terms & Conditions</span>
												</label>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body accordion-wizard">
										<div>
											<h6 class="main-content-label mb-1">Accordion Wizard</h6>
											<p class="text-muted card-sub-title">A basic content wizard with vertical orientation.</p>
										</div>
										<form id="form">
											<div class="list-group">
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0" data-acc-title>Name &amp; Email</h6>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Name:</label>
																<input type="text" name="name" class="form-control" />
															</div>
															<div class="form-group">
																<label>Email:</label>
																<input type="text" name="email" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0" data-acc-title>Contact</h6>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Telephone:</label>
																<input type="text" name="telephone" class="form-control" />
															</div>
															<div class="form-group">
																<label>Mobile:</label>
																<input type="text" name="mobile" class="form-control" />
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item py-4" data-acc-step>
													<h6 class="mb-0" data-acc-title>Payment</h6>
													<div data-acc-content>
														<div class="my-3">
															<div class="form-group">
																<label>Credit card:</label>
																<input type="text" name="card" class="form-control">
															</div>
															<div class="form-group form-row">
																<div class="col-sm-4">
																	<label>Expiry:</label>
																	<input type="text" name="expiry" class="form-control">
																</div>
																<div class="col-sm-4">
																	<label>CVV:</label>
																	<input type="text" name="cvv" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!-- INTERNAL JQUERY-STEPS JS -->
		<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>

		<!-- INTERNAL ACCORDION-WIZARD-FORM JS -->
		<script src="{{asset('assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js')}}"></script>

		<!-- INTERNAL FORM-WIZAR JS -->
		<script src="{{asset('assets/form-wizard.js')}}"></script>

		<!-- INTERNAL FILEUPLOADS JS -->
		<script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!-- INTERNALFANCY UPLOADER JS -->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection