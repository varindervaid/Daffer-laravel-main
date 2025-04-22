@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tags</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tags</li>
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
											<h6 class="main-content-label mb-1">Default Tags</h6>
											<p class="text-muted card-sub-title">Below is the basic tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-default mt-1 mb-1">Default</span>
												<span class="tag tag-dark mt-1 mb-1">Dark</span>
												<span class="tag tag-primary mt-1 mb-1">Primary</span>
												<span class="tag tag-success mt-1 mb-1">Success</span>
												<span class="tag tag-info mt-1 mb-1">Info</span>
												<span class="tag tag-warning mt-1 mb-1">Warning</span>
												<span class="tag tag-danger mt-1 mb-1">Danger</span>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags1"><pre><code class="language-markup"><script type="htms-Spruha/script"><span class="tag tag-default mt-1 mb-1">Default</span>
<span class="tag tag-dark mt-1 mb-1">Dark</span>
<span class="tag tag-primary mt-1 mb-1">Primary</span>
<span class="tag tag-success mt-1 mb-1">Success</span>
<span class="tag tag-info mt-1 mb-1">Info</span>
<span class="tag tag-warning mt-1 mb-1">Warning</span>
<span class="tag tag-danger mt-1 mb-1">Danger</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pill Tags</h6>
											<p class="text-muted card-sub-title">Below is the pill tags example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<span class="tag tag-default tag-pill mt-1 mb-1">Default</span>
												<span class="tag tag-dark tag-pill mt-1 mb-1">Dark</span>
												<span class="tag tag-primary tag-pill mt-1 mb-1">Primary</span>
												<span class="tag tag-success tag-pill mt-1 mb-1">Success</span>
												<span class="tag tag-info tag-pill mt-1 mb-1">Info</span>
												<span class="tag tag-warning tag-pill mt-1 mb-1">Warning</span>
												<span class="tag tag-danger tag-pill mt-1 mb-1">Danger</span>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags2"><pre><code class="language-markup"><script type="htms-Spruha/script"><span class="tag tag-default tag-pill mt-1 mb-1">Default</span>
<span class="tag tag-dark tag-pill mt-1 mb-1">Dark</span>
<span class="tag tag-primary tag-pill mt-1 mb-1">Primary</span>
<span class="tag tag-success tag-pill mt-1 mb-1">Success</span>
<span class="tag tag-info tag-pill mt-1 mb-1">Info</span>
<span class="tag tag-warning tag-pill mt-1 mb-1">Warning</span>
<span class="tag tag-danger tag-pill mt-1 mb-1">Danger</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="default">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Default Tags Addon</h6>
											<p class="text-muted card-sub-title">Below is the default  tags addon example</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-default">
														One
														<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default">
														Two
														<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default">
														Three
														<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag tag-default">
														Four
														<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags3"><pre><code class="language-markup"><script type="htms-Spruha/script"><div class="tags">
	<span class="tag tag-default">
		One
		<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Two
		<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Three
		<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Four
		<a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="inptags">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Input Tags</h6>
											<p class="text-muted card-sub-title">Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="form-group">
													<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
												</div>
												<div class="form-group mb-0">
													<select multiple data-role="tagsinput" class="form-control">
														<option value="jQuery">jQuery</option>
														<option value="Angular">Angular</option>
														<option value="React">React</option>
														<option value="Vue">Vue</option>
													</select>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags4"><pre><code class="language-markup"><script type="htms-Spruha/script">In header section adding below css link

In Footer section Adding below js
<!-- Inputtags js-->
src="{{asset('assets/plugins/inputtags/inputtags.js')}}">


In Body Section adding below Code
<div class="form-group">
	<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
</div>
<div class="form-group mb-0">
	<select multiple data-role="tagsinput" class="form-control">
		<option value="jQuery">jQuery</option>
		<option value="Angular">Angular</option>
		<option value="React">React</option>
		<option value="Vue">Vue</option>
	</select>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags4"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Default Tags</a>
												<a class="nav-link" href="#pill">Pill Tags</a>
												<a class="nav-link" href="#default">Default Tags Addon</a>
												<a class="nav-link" href="#inptags">Input Tags</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header  border-bottom-0 custom-card-header">
											<h6 class="main-content-label mb-0">Project Status</h6>
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

		<!-- PEITY JS -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('public/assets/js/widgets.js')


		<!-- INTERNAL INPUTTAGS JS -->
		<script src="{{asset('assets/plugins/inputtags/inputtags.js')}}"></script>

@endsection