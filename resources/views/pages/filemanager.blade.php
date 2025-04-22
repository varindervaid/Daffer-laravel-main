@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Manager</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Manager</li>
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

						<!-- row -->
						<div class="row row-sm">
							<div class="col-lg-4 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<a class="btn ripple btn-primary btn-block" data-bs-target="#modaldemo6" data-bs-toggle="modal" href="javascript:void(0);">Add New File</a>
									</div>
									<div class="card-body tab-list-items py-3">
										<div class="main-content-left main-content-left-mail">
											<div class="main-mail-menu">
												<nav class="nav main-nav-column mg-b-20">
													<a class="nav-link active" href="javascript:void(0);">
														<i class="fe fe-video"></i> Video <span>30 MB</span>
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-image"></i> Images <span>21 MB</span>
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-music"></i> Music <span>14 MB</span>
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-download"></i>Download <span>8 MB</span>
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-file-text"></i> Docs <span>16 MB</span>
													</a>

													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-grid"></i> More <span>19 MB</span>
													</a>
												</nav>
											</div><!-- main-mail-menu -->
										</div>
									</div>
									<div class="card-body py-3">
										<div class="">
											<div class="main-mail-menu">
												<label class="main-content-label main-content-label-sm">Label</label>
												<nav class="nav main-nav-column">
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-folder fe fe-folder tx-10 bg-primary p-2 rounded-5"></i> Social
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-folder fe fe-folder tx-10 bg-info p-2 rounded-5"></i> Promotions
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-folder fe fe-folder tx-10 bg-success p-2 rounded-5"></i> Updates
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-folder fe fe-folder tx-10 bg-danger p-2 rounded-5"></i> Settings
													</a>
													<a class="nav-link" href="javascript:void(0);">
														<i class="fe fe-folder fe fe-folder tx-10 bg-secondary p-2 rounded-5"></i> Google Drive
													</a>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-lg-8 col-xl-9">
                                <div class="text-dark mb-2 ms-1 tx-20 font-weight-semibold">All Folders</div>
								<!-- Row -->
								<div class="text-muted mb-2 tx-16">Recent Files</div>
								<div class="row">
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe-image tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															Image
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 32 mins ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe fe-smartphone tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															APK
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 1 hrs ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe-video tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															Video
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 28 min ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe-file-text  tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															Documents
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 1 hrs ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe-music  tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															Music
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 2 hrs ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe-file-text  tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															PDF
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 1 hrs ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe-image tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															Image
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 32 mins ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xl-6 col-lg-6 col-md-6">
										<div class="card custom-card">
											<div class="card-body">
												<div class="d-flex">
													<div class="media align-items-center pos-relative">
														<span class="tx-16 lh--7 my-auto"><i class="bg-primary-light p-2 rounded-50 fe fe fe-smartphone tx-18 me-2"></i></span>
														<div class="media-body ms-3">
															APK
															<p class="tx-11 mg-b-0 tx-gray-500">Last Opened 1 hrs ago</p>
														</div>
													</div>
													<div class="float-end ms-auto pos-absolute r-5 t-15 ">
														<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i>open</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="text-muted mb-2 tx-16">Folders and Files</div>
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="{{url('filemanager-list')}}" class="open-file">
													<div class="file-manger-icon">
														<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
													</div>
													<h6 class="mb-1 font-weight-semibold mt-0">videos</h6>
													<span class="text-muted">4.23gb</span>
												</a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="javascript:void(0);" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/word.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-0">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="javascript:void(0);" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="rounded-10">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-1">Images</h6>
												<span class="text-muted">23kb</span></a>
											</div>
										</div>
										</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="{{url('filemanager-list')}}" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-0">Images</h6>
												<span class="text-muted">1.23gb</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="javascript:void(0);" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/image.png')}}" alt="img" class="rounded-10">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-1">Images</h6>
												<span class="text-muted">23kb</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="javascript:void(0);" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-0">document.pdf</h6>
												<span class="text-muted">23kb</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="{{url('filemanager-list')}}" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-0">Downloads</h6>
												<span class="text-muted">453kb</span></a>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card custom-card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-2">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<a href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
													<div class="dropdown-menu dropdown-menu-start">
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
														<a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<a href="javascript:void(0);" class="open-file">
												<div class="file-manger-icon">
													<img src="{{asset('assets/img/files/word.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-0">Word document</h6>
												<span class="text-muted">23kb</span></a>
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
								<!-- End Row -->
							</div>
						</div>
						<!-- End row -->

						<!-- modal -->
						<div class="modal" id="modaldemo6">
							<div class="modal-dialog" role="document">
								<div class="modal-content modal-content-demo rounded-5">
									<div class="modal-header">
										<h6 class="modal-title">Add file</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
									</div>
									<div class="row row-sm">
										<div class="col-lg-12 col-md-12">
											<div class="">
												<div class="card-body">
													<div>
														<h6 class=" mb-2">File Upload</h6>
													</div>
													<div>
														<input id="demo" type="file" name="files" accept="image/jpeg, image/png, text/html, application/zip, text/css, text/js" multiple>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-primary" type="button">Add</button>
										<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">cancel</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End modal -->
						
@endsection

@section('scripts')

		<!-- INTERNALFANCY UPLOADER JS -->
		<script src="{{asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

		<!-- MODAL JS -->
		@vite('public/assets/js/modal.js')


@endsection