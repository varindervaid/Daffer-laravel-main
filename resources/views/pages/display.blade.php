@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Display</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Display</li>
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
							<div class="col-xl-9 col-lg-12">
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Display</h6>
											<p class="text-muted  card-sub-title">The following display utilities classes will set display property of an element.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-inline</code></td>
														<td>Set an inline display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-inline-block</code></td>
														<td>Set an inline-block display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Set a block display property of an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="hiding">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Hiding Elements</h6>
											<p class="text-muted  card-sub-title">For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class</th>
														<th class="wd-60p">Screen Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-none</code></td>
														<td>Hidden on all</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block</code></td>
														<td>Hidden only on xs</td>
													</tr>
													<tr>
														<td><code>.d-sm-none .d-md-block</code></td>
														<td>Hidden only on sm</td>
													</tr>
													<tr>
														<td><code>.d-md-none .d-lg-block</code></td>
														<td>Hidden only on md</td>
													</tr>
													<tr>
														<td><code>.d-lg-none .d-xl-block</code></td>
														<td>Hidden only on lg</td>
													</tr>
													<tr>
														<td><code>.d-xl-none</code></td>
														<td>Hidden only on xl</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Visible on all</td>
													</tr>
													<tr>
														<td><code>.d-block .d-sm-none</code></td>
														<td>Visible only on xs</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block .d-md-none</code></td>
														<td>Visible only on sm</td>
													</tr>
													<tr>
														<td><code>.d-none .d-md-block .d-lg-none</code></td>
														<td>Visible only on md</td>
													</tr>
													<tr>
														<td><code>.d-none .d-lg-block .d-xl-none</code></td>
														<td>Visible only on lg</td>
													</tr>
													<tr>
														<td><code>.d-none .d-xl-block</code></td>
														<td>Visible only on xl</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">
									<div class="card custom-card">
										<div class="card-body component-item">
											<nav class="nav flex-column">
												<a class="nav-link" href="#basic">Basic</a>
												<a class="nav-link" href="#hiding">Hiding</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body user-card text-center">
											<div class="main-img-user avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/5.jpg')}}">
											</div>
											<div class="mt-2">
												<h5 class="mb-1">Reynante</h5>
												<p class="mb-1 tx-inverse">Web Developer</p>
												<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
											</div>
											<a href="javascript:void(0);" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body user-card text-center">
											<div class="main-img-user avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="{{asset('assets/img/users/4.jpg')}}">
											</div>
											<div class="mt-2">
												<h5 class="mb-1">Joyce Chua</h5>
												<p class="mb-1 tx-inverse">Team Leader</p>
												<span class="text-muted"><i class="far fa-check-circle text-success me-1"></i>Verified</span>
											</div>
											<a href="javascript:void(0);" class="btn ripple btn-secondary btn-sm mt-3">View Profile</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
@endsection

@section('scripts')

@endsection