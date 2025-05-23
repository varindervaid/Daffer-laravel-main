@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Draggable Cards</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
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
						<div class="sortable">
							<div class="row row-sm">
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<img alt="Image" class="img-fluid draggable-img draggable-img" src="{{asset('assets/img/media/1.jpg')}}">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										</div>
										<div class="card-footer">
											January, 20, 2017 4:30am
										</div>
									</div>
									<div class="card custom-card  bg-primary tx-white card-draggable">
										<div class="card-body">
											<h5 class="main-content-label tx-white tx-medium mg-b-10">The Card Title</h5>
											<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="javascript:void(0);">Card link</a> <a class="card-link tx-white-7 hover-white" href="javascript:void(0);">Another link</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable bg-secondary tx-white">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<h5 class="main-content-label tx-dark tx-medium mg-b-10">The Card Title</h5>
											<p class="card-subtitle mg-b-15">This is the card subtitle</p>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="javascript:void(0);">Card link</a> <a class="card-link" href="javascript:void(0);">Another link</a>
										</div>
									</div>
									<div class="card custom-card card-body tx-white-8 bg-gray-800 card-draggable">
										Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
										<img alt="Image" class="img-fluid draggable-img " src="{{asset('assets/img/media/3.jpg')}}">
									</div>
								</div>
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable bg-primary tx-white">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<img alt="Image" class="card-img img-fluid draggable-img" src="{{asset('assets/img/media/6.jpg')}}">
										<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
											<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
											<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
											<p class="tx-13 mg-b-0"><a class="tx-white" href="javascript:void(0);">Read more</a></p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-header tx-medium">
											Description
										</div>
										<div class="card-body">
											<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<img alt="Image" class="img-fluid draggable-img draggable-img" src="{{asset('assets/img/media/1.jpg')}}">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

		<!-- INTERNAL DARGGABLE JS -->
		<script src="{{asset('assets/plugins/darggable/jquery-ui-darggable.min.js')}}"></script>
		<script src="{{asset('assets/plugins/darggable/darggable.js')}}"></script>

		<!-- INTERNAL CLIPBOARD JS -->
		<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL PRISAM JS -->
		<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection