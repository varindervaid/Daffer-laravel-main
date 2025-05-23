@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Toast</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Toast</li>
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
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-static-toast">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
															<button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast1"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="demo-static-toast">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
			<button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toast1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="tarns">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Translucent</h6>
											<p class="text-muted card-sub-title">Toasts are slightly translucent, too, so they blend over whatever they might appear over.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-static-toast">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
															<button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast2"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="demo-static-toast">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
			<button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toast2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="stacking">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Stacking</h6>
											<p class="text-muted card-sub-title">When you have multiple toasts, we default to vertiaclly stacking them in a readable manner.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-static-toast">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">Just now</small>
															<button aria-label="Close" class="ms-2 mb-1  btn-close" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="toast-body">
															See? Just like this.
														</div>
													</div>
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast3"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="demo-static-toast">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">Just now</small>
			<button aria-label="Close" class="ms-2 mb-1  btn-close" data-bs-dismiss="toast" type="button">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="toast-body">
			See? Just like this.
		</div>
	</div>
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toast3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="place">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Placement</h6>
											<p class="text-muted card-sub-title">Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle.</p>
										</div>
										<div class="text-wrap mb-3">
											<div class="example">
												<div class="ht-150 pos-relative mb-3">
													<div class="demo-static-toast t-10 r-10">
														<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
															<div class="toast-header">
																<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
																<span aria-hidden="true">×</span>
																</button>
															</div>
															<div class="toast-body">
																Hello, world! This is a toast message.
															</div>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast4"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="ht-150 pos-relative mb-3">
	<div class="demo-static-toast pos-absolute t-10 r-10">
		<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
			<div class="toast-header">
				<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="toast-body">
				Hello, world! This is a toast message.
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toast4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<div class="text-wrap mb-3">
											<div class="example">
												<div class="demo-static-toast d-flex justify-content-center align-items-center">
													<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
														<div class="toast-header">
															<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
															<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="toast-body">
															Hello, world! This is a toast message.
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast5"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="demo-static-toast d-flex justify-content-center align-items-center">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
			<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toast5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="ht-150 pos-relative">
													<div class="demo-static-toast b-10 r-10">
														<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert" data-bs-autohide="false">
															<div class="toast-header">
																<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
																<span aria-hidden="true">×</span>
																</button>
															</div>
															<div class="toast-body">
																Hello, world! This is a toast message.
															</div>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast6"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="ht-150 pos-relative">
	<div class="demo-static-toast pos-absolute b-10 r-10">
		<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
			<div class="toast-header">
				<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ms-2 mb-1  btn-close tx-normal" data-bs-dismiss="toast" type="button">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="toast-body">
				Hello, world! This is a toast message.
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toast6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">
									<div class="card custom-card">
										<div class="card-body component-item">
											<nav class="nav flex-column">
												<a class="nav-link" href="#basic">Basic Example</a>
												<a class="nav-link" href="#tarns">Translucent</a>
												<a class="nav-link" href="#stacking">Stacking</a>
												<a class="nav-link" href="#place">Placement</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="">
											<div class="p-3">
												<h6>HTML Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>35%</span>
													</div>
													<div class="progress">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs wd-35p" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>Wordpress Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>50%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-50p bg-secondary" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>Angular Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>40%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>React Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>10%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-10p bg-danger" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>PHP Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>70%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-70p bg-success" role="progressbar"></div>
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

		<!-- INTERNAL CLIPBOARD JS -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL PRISAM JS -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection