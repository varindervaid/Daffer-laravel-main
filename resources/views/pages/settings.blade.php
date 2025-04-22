@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Settings</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Settings</li>
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
							<div class="col-lg-4 col-xl-3">
								<div class="card custom-card">
									<div class="card-header">
										<div>
											<h3 class="card-title tx-18"><label class="main-content-label tx-15">Settings</label></h3>
										</div>
									</div>
									<div class="card-body">
										<div class="main-content-left main-content-left-mail">
											<div class="main-mail-menu">
												<nav class="nav main-nav-column mg-b-20">
													<a class="nav-link thumb active mb-2" href="javascript:void(0);"><i class="fe fe-user"></i>	 Account </a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-lock"></i> Privacy & Security</a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-edit-2"></i> General</a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-info"></i> Help & Support</a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-mail"></i> Emails</a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-flag"></i> Language & Region</a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-bell"></i> Notifications</a>
													<a class="nav-link thumb mb-2" href="javascript:void(0);"><i class="fe fe-settings"></i> Blog</a>
												</nav>
											</div>
										</div>
									</div>
									<div class="card-footer px-4 rounded-0">
										<button class="btn btn-primary w-lg">Save Changes</button>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-xl-9">
								<div class="row row-sm">
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-home fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Dashboard</h5>
																<p class="tx-13 text-muted mb-0">Dashboard Settings such as sidemenu,header and main page can be Controlled.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-layout-grid2 fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Web Apps</h5>
																<p class="tx-13 text-muted mb-0">Web apps settings such as Apps,Elements,Advanced Ui & Mail can be Controlled.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-pencil fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">General</h5>
																<p class="tx-13 text-muted mb-0">General settings such as Icons,Charts,Ecommerce can be Controlled.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-flag-alt-2 fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Language & Region</h5>
																<p class="tx-13 text-muted mb-0">In this settings we can change the region and language manually.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-bell fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Notification</h5>
																<p class="tx-13 text-muted mb-0">Notification settings we can control the notification privacy and security.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-settings fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Blog</h5>
																<p class="tx-13 text-muted mb-0">In this settings we can modify all Blog related settings in this template.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-lock fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Privacy & Security</h5>
																<p class="tx-13 text-muted mb-0">In this we can control the privacy related settings.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="d-flex">
															<div class="settings-main-icon me-4 mt-1">
																<div class="avatar avatar-md bg-primary-transparent text-primary">
																	<i class="ti-info-alt fs-18"></i>
																</div>
															</div>
															<div>
																<h5 class="tx-14 d-flex text-dark tx-uppercase">Help & Support</h5>
																<p class="tx-13 text-muted mb-0">In this we can know about how to change settings.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer rounded-0">
												<a href="javascript:void(0);" class="tx-14 mb-0">Go to Settings</a>
												<label class="custom-switch float-end mb-0">
													<a href="javascript:void(0);" class="tx-14 mb-0 me-2 text-dark">Restore default</a>
													<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
													<span class="custom-switch-indicator"></span>
												</label>
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