@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Mapel Maps</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mapel Maps</li>
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
							<div class="col-lg-12">
								<div class="card custom-card  overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Map with links between the plotted cities</h6>
											<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
										</div>
										<div class="mapcontainer4">
											<div class="map">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-xl-6">
								<div class="card custom-card  overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Static MapleMap</h6>
											<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
										</div>
										<div class="mapcontainer">
											<div class="map ht-300">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Map with a legend for areas</h6>
											<p class="text-muted">Ease the build of pretty data visualizations on dynamic vector maps.</p>
										</div>
										<div class="mapcontainer1">
											<div class="map ht-300">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-6">
								<div class="card custom-card   overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Map with a legend for plotted cities</h6>
											<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
										</div>
										<div class="mapcontainer2 ht-300">
											<div class="map">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card  overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Map with multiple plotted cities legends</h6>
											<p class="text-muted card-sub-title">Ease the build of pretty data visualizations on dynamic vector maps.</p>
										</div>
										<div class="mapcontainer3 ht-300">
											<div class="map ht-300">
												<span>Alternative content for the map</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!-- Internal Leaflet js-->
		<script src="{{asset('assets/plugins/mapel/raphael.min.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/jquery.mapael.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/maps/france_departments.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/maps/world_countries.js')}}"></script>
		<script src="{{asset('assets/plugins/mapel/maps/usa_states.js')}}"></script>
		@vite('public/assets/js/mapelmaps.js')

		
@endsection