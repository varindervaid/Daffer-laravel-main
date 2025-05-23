@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Validations</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Validations</li>
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
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Input Validation</h6>
											<p class="text-muted card-sub-title">This is a demo of a required field that must not leave empty.</p>
										</div>
										<form action="{{url('form-validations')}}" data-parsley-validate="">
											<div class="">
												<div class="row row-sm">
													<div class="col-lg-6 form-group">
														<label class="form-label">Firstname: <span class="tx-danger">*</span></label>
														<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
													</div>
													<div class="col-lg-6 form-group">
														<label class="form-label">Lastname: <span class="tx-danger">*</span></label>
														<input class="form-control" name="lastname" placeholder="Enter lastname" required="" type="text">
													</div>
												</div>
												<button class="btn ripple btn-main-primary btn-block" type="submit">Validate Form</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Checkbox Validation</h6>
											<p class="text-muted card-sub-title">A demo of checkboxes that must be selected at least two fom any given list.</p>
										</div>
										<form action="{{url('form-validations')}}" data-parsley-validate="">
											<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
											<div class="parsley-checkbox row" id="cbWrapper">
												<div class="col-xl-3">
													<label class="ckbox mg-b-5">
													<input data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label>
												</div>
												<div class="col-xl-3">
													<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label>
												</div>
												<div class="col-xl-3">
													<label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
												</div>
												<div class="col-xl-3">
													<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
												</div>
											</div>
											<div id="cbErrorContainer"></div>
											<div class="mg-t-20">
												<button class="btn ripple btn-primary pd-x-20" type="submit" value="5">Validate Form</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Style Invalid Messages</h6>
											<p class="text-muted card-sub-title">A demo for using custom styled messages for error container.</p>
										</div>
										<form action="{{url('form-validations')}}" class="parsley-style-1" id="selectForm2" name="selectForm2">
											<div class="">
												<div class="d-md-flex mg-b-20">
													<div class="parsley-input" id="fnWrapper">
														<label>Firstname: <span class="tx-danger">*</span></label>
														<input class="form-control " data-parsley-class-handler="#fnWrapper" name="firstname" placeholder="Enter firstname" required="" type="text">
													</div>
													<div class="parsley-input mg-md-l-20 mg-t-20 mg-md-t-0" id="lnWrapper">
														<label>Lastname: <span class="tx-danger">*</span></label>
														<input class="form-control " data-parsley-class-handler="#lnWrapper" name="lastname" placeholder="Enter lastname" required="" type="text">
													</div>
												</div>
											</div>
											<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
											<div class="parsley-checkbox wd-250 mg-b-0" id="cbWrapper2">
												<label class="ckbox mg-b-5"><input data-parsley-class-handler="#cbWrapper2" data-parsley-errors-container="#cbErrorContainer2" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label> <label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label> <label class="ckbox mg-b-5"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label> <label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
											</div><!-- parsley-checkbox -->
											<div class="" id="cbErrorContainer2"></div>
											<div class="parsley-select  mg-t-30" id="slWrapper2">
												<select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" data-placeholder="Choose one" required="">
													<option label="Choose one">
													</option>
													<option value="Firefox">
														Firefox
													</option>
													<option value="Chrome">
														Chrome
													</option>
													<option value="Safari">
														Safari
													</option>
													<option value="Opera">
														Opera
													</option>
													<option value="Internet Explorer">
														Internet Explorer
													</option>
												</select>
												<div id="slErrorContainer2"></div>
											</div>
											<div class="mg-t-30">
												<button class="btn ripple btn-primary pd-x-20 btn-block" type="submit">Validate Form</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Select2 Validation</h6>
											<p class="text-muted card-sub-title">A demo of select boxes that must be selected at least one fom any given option.</p>
										</div>
										<form action="{{url('form-validations')}}" id="selectForm" name="selectForm">
											<div class="d-sm-flex">
												<div class="parsley-select wd-sm-250" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required="">
														<option label="Choose one">
														</option>
														<option value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
													<div id="slErrorContainer"></div>
												</div>
												<div class="mg-sm-l-10 mg-t-10 mg-sm-t-0">
													<button class="btn ripple btn-primary pd-x-20" type="submit" value="5">Validate Form</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Email Validation</h6>
											<p class="text-muted card-sub-title">A demo of an email field that is required and must also be a valid email address. It automatically validate an email when the field is in type="email".</p>
										</div>
										<form action="{{url('form-validations')}}" data-parsley-validate="">
											<div class="d-sm-flex">
												<div class="form-group mg-b-0">
													<label class="form-label">Email: <span class="tx-danger">*</span></label>
													<input class="form-control wd-sm-250" name="email" placeholder="Enter email" required="" type="email">
												</div>
												<div class="mg-sm-l-10 mg-t-10 mg-sm-t-25">
													<button class="btn ripple btn-primary pd-x-20" type="submit">Validate Email</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Server side</h6>
										</div>
										<form class="row g-3">
											<div class="col-md-4">
											  <label for="validationServer01" class="form-label">First name</label>
											  <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
											  <div class="valid-feedback">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4">
											  <label for="validationServer02" class="form-label">Last name</label>
											  <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
											  <div class="valid-feedback">
												Looks good!
											  </div>
											</div>
											<div class="col-md-4">
											  <label for="validationServerUsername" class="form-label">Username</label>
											  <div class="input-group has-validation">
												<span class="input-group-text border-end-0" id="inputGroupPrepend3">@</span>
												<input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
												<div id="validationServerUsernameFeedback" class="invalid-feedback">
												  Please choose a username.
												</div>
											  </div>
											</div>
											<div class="col-md-6 mt-3">
											  <label for="validationServer03" class="form-label">City</label>
											  <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
											  <div id="validationServer03Feedback" class="invalid-feedback">
												Please provide a valid city.
											  </div>
											</div>
											<div class="col-md-3 mt-3">
											  <label for="validationServer04" class="form-label">State</label>
											  <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
												<option selected disabled value="">Choose...</option>
												<option>...</option>
											  </select>
											  <div id="validationServer04Feedback" class="invalid-feedback">
												Please select a valid state.
											  </div>
											</div>
											<div class="col-md-3 mt-3">
											  <label for="validationServer05" class="form-label">Zip</label>
											  <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
											  <div id="validationServer05Feedback" class="invalid-feedback">
												Please provide a valid zip.
											  </div>
											</div>
											<div class="col-12">
											  <div class="form-check">
												<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
												<label class="form-check-label" for="invalidCheck3">
												  Agree to terms and conditions
												</label>
												<div id="invalidCheck3Feedback" class="invalid-feedback">
												  You must agree before submitting.
												</div>
											  </div>
											</div>
											<div class="col-12">
											  <button class="btn btn-primary" type="submit">Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-3">Supported elements</h6>
										</div>
										<form class="was-validated">
											<div class="mb-3">
											  <label for="validationTextarea" class="form-label">Textarea</label>
											  <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
											  <div class="invalid-feedback">
												Please enter a message in the textarea.
											  </div>
											</div>

											<div class="form-check mb-3">
											  <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
											  <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
											  <div class="invalid-feedback">Example invalid feedback text</div>
											</div>

											<div class="form-check">
											  <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
											  <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
											</div>
											<div class="form-check mb-3">
											  <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
											  <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
											  <div class="invalid-feedback">More example invalid feedback text</div>
											</div>

											<div class="mb-3">
											  <select class="form-select" required aria-label="select example">
												<option value="">Open this select menu</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											  </select>
											  <div class="invalid-feedback">Example invalid select feedback</div>
											</div>

											<div class="input-group file-browser mb-3">
												<input type="text" class="form-control border-end-0 browse-file" placeholder="choose" required>
												<label class="input-group-btn">
													<span class="btn btn-primary">
														Browse <input type="file" style="display: none;" multiple="">
													</span>
												</label>
											</div>

											<div class="mb-3">
											  <button class="btn btn-primary" type="submit" disabled>Submit form</button>
											</div>
										  </form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->
						
@endsection

@section('scripts')

		<!-- INTERNAL PARSLEY JS -->
		<script src="{{asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>

		<!-- INTERNAL FORM-VALIDATION JS -->
		@vite('public/assets/js/form-validation.js')


@endsection