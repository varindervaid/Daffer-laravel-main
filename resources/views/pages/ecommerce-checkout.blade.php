@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Checkout</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
						<div class="row">
							<div class="col-xl-12">
								<div class="card custom-card">
									<div class="card-header bg-transparent border-bottom-0">
										<div>
											<label class="main-content-label mb-2">Checkout</label> <span class="d-block tx-12 mb-0 text-muted">The Project Budget is a tool used by project managers to estimate the total cost of a project</span>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 mx-auto">
												<div class="checkout-steps wrapper">
													<div id="checkoutsteps">
														<!-- SECTION 1 -->
														<h4>Signin</h4>
														<section>
															<form>
																<h5 class="text-start mb-2">Signin to Your Account</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
																<div class="form-group text-start">
																	<label>Email</label>
																	<input class="form-control" placeholder="Enter your email" type="text">
																</div>
																<div class="form-group text-start">
																	<label>Password</label>
																	<input class="form-control" placeholder="Enter your password" type="password">
																</div>
																<a href="javascript:void(0);" class="btn ripple btn-main-primary btn-block">Sign In</a>
															</form>
														</section> <!-- SECTION 2 -->
														<h4>Billing</h4>
														<section>
															<form class="needs-validation" novalidate="">
																<h5 class="text-start mb-2">Billing Information</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
																<div class="row">
																	<div class="col-md-6 mb-3">
																		<label for="firstName">First name</label>
																		<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
																		<div class="invalid-feedback">Valid first name is required.</div>
																	</div>
																	<div class="col-md-6 mb-3">
																		<label for="lastName">Last name</label>
																		<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
																		<div class="invalid-feedback">Valid last name is required.</div>
																	</div>
																</div>
																<div class="mb-3">
																	<label for="address">Address</label>
																	<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
																	<div class="invalid-feedback">Please enter your shipping address.</div>
																</div>
																<div class="mb-3">
																	<label for="address2">Address 2 <span class="text-muted">(Optional)</span>
																	</label>
																	<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
																</div>
																<div class="mb-3">
																	<label for="mobile">Mobile Number</label>
																	<input type="text" class="form-control" id="mobile">
																</div>
																<div class="row">
																	<div class="col-md-5 mb-3">
																		<label for="country">Country</label>
																		<select class="form-select d-block w-100" id="country" required="">
																			<option value="">Choose...</option>
																			<option>United States</option>
																		</select>
																		<div class="invalid-feedback">Please select a valid country.</div>
																	</div>
																	<div class="col-md-4 mb-3">
																		<label for="state">State</label>
																		<select class="form-select d-block w-100" id="state" required="">
																			<option value="">Choose...</option>
																			<option>California</option>
																		</select>
																		<div class="invalid-feedback">Please provide a valid state.</div>
																	</div>
																	<div class="col-md-3 mb-3">
																		<label for="zip">Zip</label>
																		<input type="text" class="form-control" id="zip" placeholder="" required="">
																		<div class="invalid-feedback">Zip code required.</div>
																	</div>
																</div>
																<hr class="mb-4">
																<a href="javascript:void(0);" class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</a>
															</form>
														</section> <!-- SECTION 3 -->
														<h4>Order</h4>
														<section>
															<h5 class="text-start mb-2">Your Order</h5>
															<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
															<div class="product">
																<div class="item">
																	<div class="left"> <a href="javascript:void(0);" class="thumb"> <img src="{{asset('assets/img/pngs/19.png')}}" alt=""> </a>
																		<div class="purchase">
																			<h6> <a href="javascript:void(0);">Mobile Phone Mi</a> </h6> <span>x1</span>
																		</div>
																	</div> <span class="price">$290</span>
																</div>
																<div class="item">
																	<div class="left"> <a href="javascript:void(0);" class="thumb"> <img src="{{asset('assets/img/pngs/16.png')}}" alt=""> </a>
																		<div class="purchase">
																			<h6> <a href="javascript:void(0);">Flowerpot</a> </h6> <span>1</span>
																		</div>
																	</div> <span class="price">$124</span>
																</div>
															</div>
															<div class="checkout">
																<div class="subtotal"> <span class="heading">Subtotal</span> <span class="total tx-20 font-weight-bold">$364</span> </div>
															</div>
														</section><!-- SECTION 4 -->
														<h4>Payments</h4>
														<section>
															<div class="">
																<h5 class="text-start mb-2">Payments</h5>
																<p class="mb-4 text-muted tx-13 ms-0 text-start">Lorem Ipsum has been the industry's standard dummy text ever since</p>
															</div>
															<div class="card-pay">
																<ul class="tabs-menu nav">
																	<li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
																	<li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fab fa-paypal"></i>  Paypal</a></li>
																	<li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
																</ul>
																<div class="tab-content">
																	<div class="tab-pane active show px-4 py-2 br-3 mb-4" id="tab20">
																		<div class="form-group mt-4">
																			<label class="form-label">CardHolder Name</label>
																			<input type="text" class="form-control" placeholder="First Name">
																		</div>
																		<div class="form-group">
																			<label class="form-label">Card number</label>
																			<div class="input-group">
																				<input type="text" class="form-control" placeholder="Search for...">
																				<span class="">
																					<button class="btn btn-secondary box-shadow-0" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
																					<i class="fab fa-cc-mastercard"></i></button>
																				</span>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-8">
																				<div class="form-group">
																					<label class="form-label">Expiration</label>
																					<div class="input-group">
																						<input type="number" class="form-control" placeholder="MM" name="Month">
																						<input type="number" class="form-control" placeholder="YY" name="Year">
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-4">
																				<div class="form-group">
																					<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
																					<input type="number" class="form-control" required="">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="tab-pane" id="tab21">
																		<p class="mt-4">Paypal is easiest way to pay online</p>
																		<p><a href="javascript:void(0);" class="btn btn-primary"><i class="fab fa-paypal"></i> Log in my Paypal</a></p>
																		<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
																	</div>
																	<div class="tab-pane" id="tab22">
																		<p class="mt-4">Bank account details</p>
																		<dl class="card-text">
																		  <dt>BANK: </dt>
																		  <dd> THE UNION BANK 0456</dd>
																		</dl>
																		<dl class="card-text">
																		  <dt>Account number: </dt>
																		  <dd> 67542897653214</dd>
																		</dl>
																		<dl class="card-text">
																		  <dt>IBAN: </dt>
																		  <dd>543218769</dd>
																		</dl>
																		<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
																	</div>
																</div>
															</div>
														</section>
														<h4>Finished</h4>
														<section class="text-center">
															<div class="">
																<h5 class="text-center mb-4">Your order Confirmed!</h5>
															</div>
															<svg class="wd-80 ht-80 mx-auto justify-content-center mb-3 text-center" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
																<circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
																<polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
															</svg>
															<p class="success ps-5 pe-5">Order placed successfully. Your order will be dispacted soon. meanwhile you can track your order in my order section.</p>
														</section>
													</div>
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

		<!-- JQUERY-STEPS JS -->
		<script src="{{asset('assets/plugins/checkout-jquery-steps/jquery.steps.min.js')}}"></script>
		@vite('public/assets/js/checkout-jquery-steps.js')


		<!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('public/assets/js/check-all-mail.js')
		

@endsection