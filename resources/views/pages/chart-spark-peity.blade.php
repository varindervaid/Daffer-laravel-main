@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Sparkline & Peity</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sparkline & Peity</li>
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
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Sparkline Bar Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div>
											<span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10,12,8,7,13,15</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Sparkline Stacked Bar</h6>
											<p class="text-muted  card-sub-title">Below is the basic stacked bar chart.</p>
										</div>
										<div>
											<span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,9,10,6,4,8</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Sparkline Line Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
										</div>
										<div>
											<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,10,5,8,9,12,4,7,13,6</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Sparkline Area Chart</h6>
											<p class="text-muted  card-sub-title">Below is the area bar chart example.</p>
										</div>
										<div>
											<span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-4 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Sparkline Pie Chart</h6>
											<p class="text-muted  card-sub-title">An example of a pie chart with two series.</p>
										</div>
										<div class="d-flex">
											<div>
												<span id="sparkline9">3,4,4</span>
											</div>
											<div class="mg-l-30">
												<span id="sparkline10">3,4,4,7,5,9</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Peity Line Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic line chart example.</p>
										</div>
										<div class="text-center">
											<span class="peity-line" data-peity='{ "fill": false, "stroke": "#557ef6", "height": 50, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Peity Area Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic area chart example.</p>
										</div>
										<div class="text-center">
											<span class="peity-line" data-peity='{ "fill": "rgba(235, 111, 51,.2)", "stroke": "#53caed", "height": 50, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Peity Bar Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic bar chart example.</p>
										</div>
										<div class="d-sm-flex">
											<div>
												<span class="peity-bar" data-peity='{ "fill": ["#557ef6"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
											</div>
											<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
												<span class="peity-bar" data-peity='{ "fill": ["#53caed"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Peity Pie &amp; Donut Chart</h6>
											<p class="text-muted  card-sub-title">Below is the basic pie and donut chart example.</p>
										</div>
										<div class="d-flex">
											<div>
												<span class="peity-pie" data-peity='{ "fill": ["#557ef6","#53caed","#01b8ff"], "height": 70, "width": 100 }'>10,4,4</span>
											</div>
											<div class="mg-l-30">
												<span class="peity-donut" data-peity='{ "fill": ["#557ef6","#53caed","#01b8ff"], "height": 70, "width": 100 }'>10,4,4</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!-- SPARKLINE JS -->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
		@vite('public/assets/js/chart.sparkline.js')


		<!-- INTERNAL PEITY CHARTS JS -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
		@vite('public/assets/js/chart.peity.js')


@endsection