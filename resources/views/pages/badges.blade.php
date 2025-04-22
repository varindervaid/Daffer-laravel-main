@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Badges</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Badges</li>
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
											<p class="text-muted card-sub-title">Badges scale to match the size of the immediate parent element by using relative font sizing and em units..</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<h1>Heading 01 <span class="badge bg-dark">New</span></h1>
												<h2>Heading 02 <span class="badge bg-dark">New</span></h2>
												<h3>Heading 03 <span class="badge bg-dark">New</span></h3>
												<h4>Heading 04 <span class="badge bg-dark">New</span></h4>
												<h5>Heading 05 <span class="badge bg-dark">New</span></h5>
												<h6>Heading 06 <span class="badge bg-dark">New</span></h6>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="badge1"><pre><code class="language-markup"><script type="htms-Spruha/script"><h1>Heading 01 <span class="badge bg-dark">New</span></h1>
<h2>Heading 02 <span class="badge bg-dark">New</span></h2>
<h3>Heading 03 <span class="badge bg-dark">New</span></h3>
<h4>Heading 04 <span class="badge bg-dark">New</span></h4>
<h5>Heading 05 <span class="badge bg-dark">New</span></h5>
<h6>Heading 06 <span class="badge bg-dark">New</span></h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="contextual">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Contextual Variations</h6>
											<p class="text-muted card-sub-title">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<span class="badge bg-primary">Primary</span>
													<span class="badge bg-secondary">Secondary</span>
													<span class="badge bg-success">Success</span>
													<span class="badge bg-danger">Danger</span>
													<span class="badge bg-warning">Warning</span>
													<span class="badge bg-info">Info</span>
													<span class="badge bg-light">Light</span>
													<span class="badge bg-dark">Dark</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge2"><pre><code class="language-markup"><script type="htms-Spruha/script"><span class="badge bg-primary">Primary</span>
<span class="badge bg-secondary">Secondary</span>
<span class="badge bg-success">Success</span>
<span class="badge bg-danger">Danger</span>
<span class="badge bg-warning">Warning</span>
<span class="badge bg-info">Info</span>
<span class="badge bg-light">Light</span>
<span class="badge bg-dark">Dark</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pill Badges</h6>
											<p class="text-muted card-sub-title">Use the <code>.bg-pill</code> modifier class to make badges more rounded.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<span class="badge bg-pill bg-primary">Primary</span>
													<span class="badge bg-pill bg-secondary">Secondary</span>
													<span class="badge bg-pill bg-success">Success</span>
													<span class="badge bg-pill bg-danger">Danger</span>
													<span class="badge bg-pill bg-warning">Warning</span>
													<span class="badge bg-pill bg-info">Info</span>
													<span class="badge bg-pill bg-light">Light</span>
													<span class="badge bg-pill bg-dark">Dark</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge3"><pre><code class="language-markup"><script type="htms-Spruha/script"><span class="badge bg-pill bg-primary">Primary</span>
<span class="badge bg-pill bg-secondary">Secondary</span>
<span class="badge bg-pill bg-success">Success</span>
<span class="badge bg-pill bg-danger">Danger</span>
<span class="badge bg-pill bg-warning">Warning</span>
<span class="badge bg-pill bg-info">Info</span>
<span class="badge bg-pill bg-light">Light</span>
<span class="badge bg-pill bg-dark">Dark</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="buttons">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Buttons With Badges</h6>
											<p class="text-muted card-sub-title">Badges can be used as part of links or buttons to provide a counter.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn-list">
													<button type="button" class="btn ripple btn-primary">
													  Notifications <span class="badge bg-light ms-2">4</span>
													</button>
													<button type="button" class="btn ripple btn-secondary">
													  Notifications <span class="badge bg-dark ms-2">78</span>
													</button>
													<button type="button" class="btn ripple btn-success">
													  Notifications <span class="badge bg-danger ms-2">12</span>
													</button>
													<button type="button" class="btn ripple btn-info">
													  Notifications <span class="badge bg-warning ms-2">67</span>
													</button>
													<button type="button" class="btn ripple btn-danger">
													  Notifications <span class="badge bg-primary ms-2">45</span>
													</button>
													<button type="button" class="btn ripple btn-warning">
													  Notifications <span class="badge bg-info ms-2">120</span>
													</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge5"><pre><code class="language-markup"><script type="htms-Spruha/script"><button type="button" class="btn ripple btn-primary">
  Notifications <span class="badge bg-light">4</span>
</button>
<button type="button" class="btn ripple btn-secondary">
  Notifications <span class="badge bg-dark">78</span>
</button>
<button type="button" class="btn ripple btn-success">
  Notifications <span class="badge bg-danger">12</span>
</button>
<button type="button" class="btn ripple btn-info">
  Notifications <span class="badge bg-warning">67</span>
</button>
<button type="button" class="btn ripple btn-danger">
  Notifications <span class="badge bg-primary">45</span>
</button>
<button type="button" class="btn ripple btn-warning">
  Notifications <span class="badge bg-info">120</span>
</button></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="link">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Link Badges</h6>
											<p class="text-muted card-sub-title">Using the contextual badge classes on an element quickly provide actionable badges with hover and focus states.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div>
													<a class="badge bg-primary" href="javascript:void(0);">Primary</a>
													<a class="badge bg-secondary" href="javascript:void(0);">Secondary</a>
													<a class="badge bg-success" href="javascript:void(0);">Success</a>
													<a class="badge bg-danger" href="javascript:void(0);">Danger</a>
													<a class="badge bg-warning" href="javascript:void(0);">Warning</a>
													<a class="badge bg-info" href="javascript:void(0);">Info</a>
													<a class="badge bg-light" href="javascript:void(0);">Light</a>
													<a class="badge bg-dark" href="javascript:void(0);">Dark</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge4"><pre><code class="language-markup"><script type="htms-Spruha/script"><a class="badge bg-primary" href="javascript:void(0);">Primary</a>
<a class="badge bg-secondary" href="javascript:void(0);">Secondary</a>
<a class="badge bg-success" href="javascript:void(0);">Success</a>
<a class="badge bg-danger" href="javascript:void(0);">Danger</a>
<a class="badge bg-warning" href="javascript:void(0);">Warning</a>
<a class="badge bg-info" href="javascript:void(0);">Info</a>
<a class="badge bg-light" href="javascript:void(0);">Light</a>
<a class="badge bg-dark" href="javascript:void(0);">Dark</a></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge4"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Basic</a>
												<a class="nav-link" href="#contextual">Contextual Badges</a>
												<a class="nav-link" href="#pill">Pill Badges</a>
												<a class="nav-link" href="#link">Link Badges</a>
												<a class="nav-link" href="#buttons">Buttons With Badges</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header border-bottom-0 custom-card-header">
											<h6 class="main-content-label mb-3">Project Status</h6>
										</div>
										<div class="">
											<div class="list d-flex align-items-center p-3">
												<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
												<div class="wrappe ms-3">
													<h6 class="mb-1">Project Planning</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-check-circle me-2"></i>100% Completed</span>
														</div>
													</div>
												</div>
											</div>
											<div class="list d-flex align-items-center p-3">
												<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
												<div class="wrappe ms-3">
													<h6 class="mb-1">Project Desiging</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-check-circle me-2"></i>100% Completed</span>
														</div>
													</div>
												</div>
											</div>
											<div class="list d-flex align-items-center p-3">
												<span class="peity-donut" data-peity='{ "fill": ["#53caed", "#77778e33"], "innerRadius": 14, "radius": 20 }'>4/6</span>
												<div class="wrappe ms-3">
													<h6 class="mb-1">Project Development</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-spinner me-2"></i>76% Progress</span>
														</div>
													</div>
												</div>
											</div>
											<div class="list d-flex align-items-center  p-3">
												<span class="peity-donut" data-peity='{ "fill": ["#f16d75", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1/5</span>
												<div class="wrappe ms-3">
													<h6 class="mb-1">Project Testing</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-info-circle me-2"></i>Waiting</span>
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

		<!-- INTERNAL CLIPBOARD JS -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL PRISAM JS -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

		<!-- INTERNAL PEITY JS -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('public/assets/js/widgets.js')


@endsection