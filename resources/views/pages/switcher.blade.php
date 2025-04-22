@extends('layouts.switcher-master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Switcher Page</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Switcher Page</li>
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

						<!--Row-->
						<div class="container p-0">
							<div class="row row-sm">
								<div class="col-lg-6 m-auto">
									<div class="card custom-card sidebar-right1 switcher-2">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">LTR and RTL Styles</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">LTR</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch7" id="myonoffswitch19" class="onoffswitch2-checkbox" checked="">
														<label for="myonoffswitch19" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">RTL</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch7" id="myonoffswitch20" class="onoffswitch2-checkbox">
														<label for="myonoffswitch20" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Navigation Styles</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Vertical Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch01" id="myonoffswitch01" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch01" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Horizontal Click Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch01" id="myonoffswitch02" class="onoffswitch2-checkbox">
														<label for="myonoffswitch02" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Horizontal Hover Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch01" id="myonoffswitch03" class="onoffswitch2-checkbox">
														<label for="myonoffswitch03" class="onoffswitch2-label"></label>
													</p>
												</div>
											</div>
										</div>

										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Light Theme Style</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Light Theme</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch1" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto my-auto">Light Primary</span>
														<input class="wd-30 ht-30 input-color-picker color-primary-light" value="#4d65d9" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
												</div>
											</div>
										</div>
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Dark Theme Style</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Dark Theme</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
														<label for="myonoffswitch2" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto my-auto">Dark Primary</span>
														<input class="wd-30 ht-30 input-dark-color-picker color-primary-dark" value="#4d65d9" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
												</div>
											</div>
										</div>
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Menu Styles</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle lightMenu d-flex">
													<span class="me-auto">Light Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch3" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle colorMenu d-flex mt-2">
													<span class="me-auto">Color Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
														<label for="myonoffswitch4" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle darkMenu d-flex mt-2">
													<span class="me-auto">Dark Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch5" class="onoffswitch2-label mb-0"></label>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Header Styles</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle lightHeader d-flex">
													<span class="me-auto">Light Header</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
														<label for="myonoffswitch6" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle  colorHeader d-flex mt-2">
													<span class="me-auto">Color Header</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
														<label for="myonoffswitch7" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle darkHeader d-flex mt-2">
													<span class="me-auto">Dark Header</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
														<label for="myonoffswitch8" class="onoffswitch2-label mb-0"></label>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body layout-width-style">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Layout Width Styles</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Full Width</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked="">
														<label for="myonoffswitch9" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Boxed</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
														<label for="myonoffswitch10" class="onoffswitch2-label mb-0"></label>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Layout Positions</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Fixed</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked="">
														<label for="myonoffswitch11" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Scrollable</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
														<label for="myonoffswitch12" class="onoffswitch2-label mb-0"></label>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body vertical-switcher">
											<div>
												<h6 class="main-content-label mb-3 tx-semibold">Sidemenu Layout Styles</h6>
											</div>
											<div class="switch_section px-0">
												<div class="switch-toggle d-flex">
													<span class="me-auto">Default Menu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked="">
														<label for="myonoffswitch13" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Icon with Text</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
														<label for="myonoffswitch14" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Icon Overlay</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
														<label for="myonoffswitch15" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Closed Sidemenu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
														<label for="myonoffswitch16" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Hover Submenu</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
														<label for="myonoffswitch17" class="onoffswitch2-label"></label>
													</p>
												</div>
												<div class="switch-toggle d-flex mt-2">
													<span class="me-auto">Hover Submenu Style 1</span>
													<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
														<label for="myonoffswitch18" class="onoffswitch2-label mb-0"></label>
													</p>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="switch_section text-center px-0">
												<div class="btn-list">
													<button class="btn btn-success w-lg">Save Settings</button>
													<button id="resetAll" class="btn btn-danger w-lg" type="button">Reset All</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

@endsection

@section('scripts')

@endsection