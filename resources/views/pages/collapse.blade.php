@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Collapse</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Collapse</li>
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
							<div class="row row-sm">
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Basic Example</h6>
												<p class="text-muted card-sub-title">Click the buttons below to show and hide another element via class changes</p>
											</div>
											<div>
												<a aria-controls="collapseExample" aria-expanded="false" class="btn ripple btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button">Toggle Content</a>
												<div class="collapse mg-t-5" id="collapseExample">
													<div class="card card-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="card custom-card">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Multiple Targets</h6>
												<p class="text-muted card-sub-title">A button or link can show and hide multiple elements by referencing them with a jquery selector in its href or data-bs-target attribute.</p>
											</div>
											<div>
												<div class="btn btn-list">
													<a aria-controls="multiCollapseExample1" aria-expanded="false" class="btn ripple btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button">Toggle First Content</a>
													<a aria-controls="multiCollapseExample2" aria-expanded="false" class="btn ripple btn-secondary" href="#multiCollapseExample2" data-bs-toggle="collapse" role="button">Toggle Second Content</a>
													<a aria-controls="multiCollapseExample1 multiCollapseExample2" aria-expanded="false" class="btn ripple btn-success" href=".multi-collapse" data-bs-toggle="collapse" role="button">Toggle Both Contents</a>
												</div>
												<div class="row row-sm">
													<div class="col">
														<div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
															<div class="card card-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
															</div>
														</div>
													</div>
													<div class="col">
														<div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
															<div class="card card-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
															</div>
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

@endsection

@section('scripts')

@endsection	