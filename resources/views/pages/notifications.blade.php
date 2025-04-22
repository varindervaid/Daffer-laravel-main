@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
							<h2 class="main-content-title tx-24 mg-b-5">Notifications</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Accordion UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Notifications</li>
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
							<div class="col-md-12">
								<!-- div -->
								<div class="card custom-card mg-b-20">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Position Notification
										</div>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
										<div class="example border-0 p-0">
											<div class="btn-list">
												<button onclick="not1()" class="btn btn-light mg-t-5">Top</button>
												<button onclick="not2()" class="btn btn-light mg-t-5">Center</button>
												<button onclick="not3()" class="btn btn-light mg-t-5">Left</button>
												<button onclick="not4()" class="btn btn-light mg-t-5">Top Fullwidth</button>
												<button onclick="not5()" class="btn btn-light mg-t-5">Right</button>
												<button onclick="not51()" class="btn btn-light mg-t-5">Bottom</button>
											</div>
										</div>
									</div>
								</div>
								<!-- div -->

								<!-- div -->
								<div class="card custom-card mg-b-20">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Notification Types
										</div>
                                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
										<div class="example border-0 p-0">
											<div class="btn-list">
												<button onclick="not6()" class="btn btn-primary mg-t-5">Primary</button>
												<button onclick="not7()" class="btn btn-success mg-t-5">Success</button>
												<button onclick="not8()" class="btn btn-danger mg-t-5">Error</button>
												<button onclick="not9()" class="btn btn-warning mg-t-5">Warning</button>
												<button onclick="not10()" class="btn btn-info mg-t-5">Info</button>
												<button onclick="not11()" class="btn btn-danger mg-t-5">Fixed Error</button>
												<button onclick="not12()" class="btn btn-dark mg-t-5">Opacity</button>
											</div>
										</div>
									</div>
								</div>
								<!-- div -->

								<!-- div -->
								<div class="card  custom-card mg-b-20">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Notification Styles
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
										<div class="example border-0 p-0">
											<div class="btn-list">
												<button onclick="not13()" class="btn btn-primary mg-t-5">Mutiple lines</button>
												<button onclick="not14()" class="btn btn-primary mg-t-5">Fade Animation</button>
												<button onclick="not15()" class="btn btn-primary mg-t-5">Customize Background</button>
												<button onclick="not16()" class="btn btn-primary mg-t-5">Timeout</button>
											</div>
										</div>
									</div>
								</div>
								<!-- div -->

								<!-- div -->
								<div class="card custom-card">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Call Back Notification
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
										<div class="example border-0 p-0">
											<div class="btn-list">
												<button onclick="not17()" class="btn btn-primary">Call Back</button>
												<button onclick="not18()" class="btn btn-primary">Call Back 2</button>
											</div>
										</div>
									</div>
								</div>
								<!-- div -->
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!--- INTERNAL NOTIFY JS -->
		<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection