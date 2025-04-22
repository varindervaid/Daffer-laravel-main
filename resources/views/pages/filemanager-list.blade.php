@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Filemanager List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Filemanager List</li>
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
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">videos</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">images</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/word.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/word.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/word.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/doc.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/doc.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/doc.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documentsdeos</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/file2.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card border p-0 shadow-none">
									<div class="card-body  text-center">
										<div class="file-manger-icon">
											<a href="javascript:void(0);"><img src="{{asset('assets/img/files/file2.png')}}" alt="img" class="br-7"></a>
										</div>
										<h6 class="mb-1 font-weight-semibold mt-0">Documents</h6>
										<span class="text-muted">4.23gb</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-1.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">221.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-2.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">567.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-3.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">367.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-4.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">211.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-5.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">541.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-6.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">345.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-7.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">213.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2  col-md-3  col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-8.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">1324.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-2  col-md-3 col-lg-6">
								<div class="card custom-card overflow-hidden">
									<a href="{{url('file-details')}}"><img src="{{asset('assets/img/files/img-9.jpg')}}" alt="img"></a>
									<div class="card-footer bd-t-0 py-3">
										<div class="d-flex">
											<div>
												<h6 class="mb-0">123.jpg</h6>
											</div>
											<div class="ms-auto">
												<h6 class="text-muted mb-0">120 KB</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<nav>
								<ul class="pagination justify-content-end">
									<li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Prev</a></li>
									<li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
								</ul>
							</nav>
						</div>
						<!-- End Row -->
					
@endsection

@section('scripts')

@endsection