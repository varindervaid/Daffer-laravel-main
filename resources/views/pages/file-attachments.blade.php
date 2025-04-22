@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">File Attachements</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Attachements</li>
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
						<div class="row sidemenu-height">
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements with rounded</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments rounded-30 bg-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-30 bg-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30 bg-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30 bg-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30 bg-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-30 bg-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30 bg-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30 bg-warning text-white"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-30 bg-secondary"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements with outline</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments rounded-30  tag-outline-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30 tag-outline-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30  tag-outline-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30   tag-outline-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30   tag-outline-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30   tag-outline-warning"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-30   tag-outline-secondary"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements with radius</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments rounded-3 bg-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-3 bg-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3 bg-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3 bg-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3 bg-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-3 bg-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3 bg-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3 bg-warning text-white"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-3 bg-secondary"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements with outline-radius</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments rounded-3  tag-outline-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3 tag-outline-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3  tag-outline-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3   tag-outline-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3   tag-outline-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3   tag-outline-warning"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments rounded-3   tag-outline-secondary"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements with square</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments  bg-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   bg-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments bg-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  bg-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  bg-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   bg-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  bg-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  bg-warning text-white"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   bg-secondary"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements with Outline-square</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments  tag-outline-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments tag-outline-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  tag-outline-success"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> Document.exl <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  tag-outline-danger"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span>AMN0012.pdf <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   tag-outline-primary"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> design00123.zip <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   tag-outline-info"><span class="me-2"><i class="mdi mdi-file-word tx-24"></i></span>Document.doc <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   tag-outline-warning"><span class="me-2"><i class="mdi mdi-file-powerpoint  tx-24"></i></span> prsentation.ppt <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   tag-outline-secondary"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span>audio-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements  sizes</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments-sm rounded-30 bg-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-30 bg-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments-lg rounded-30 bg-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements  sizes</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments-sm rounded-30 tag-outline-warning mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-30 tag-outline-success"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments-lg rounded-30 tag-outline-secondary"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements  sizes</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments-sm rounded-3 bg-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments  rounded-3 bg-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments-lg rounded-3 bg-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements  sizes</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
											<span class="tag tag-attachments-sm rounded-3 tag-outline-warning mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

											<span class="tag tag-attachments  rounded-3 tag-outline-success"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

											<span class="tag tag-attachments-lg rounded-3 tag-outline-secondary"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements  sizes</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
                                                <span class="tag tag-attachments-sm  bg-primary mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments   bg-info"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

                                                <span class="tag tag-attachments-lg  bg-danger"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
                                            </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card custom-card">
									<div class="card-body">
									     <div>
											<h6 class="main-content-label mb-1">File-Attachements  sizes</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										 <div class="tags">
											<span class="tag tag-attachments-sm  tag-outline-warning mt-0"><span class="me-2"><i class="mdi mdi-file-image tx-20"></i></span> Image01..._jpg <i class="fe fe-x mt-2 ms-4"></i></span>

											<span class="tag tag-attachments   tag-outline-success"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span>music-mp3 <i class="fe fe-x mt-2 ms-4"></i></span>

											<span class="tag tag-attachments-lg  tag-outline-secondary"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span>video0014...-mp4 <i class="fe fe-x mt-2 ms-4"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
								<div class="card custom-card">
									<div class="card-body">
											<div>
											<h6 class="main-content-label mb-1 card-sub-title">Image-attachment</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="h-100  attached-file-grid6">
											<div class="pro-img-box attached-file-image">
												<a href="javascript:void(0);">
													<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/img/media/blog5.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
												</a>
												<ul class="icons">
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="download"><i class="fe fe-download"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="delete"><i class="fe fe-trash"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="share"><i class="fe fe-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
								<div class="card custom-card">
									<div class="card-body">
											<div>
											<h6 class="main-content-label mb-1">Image-attachment</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="h-100  attached-file-grid6">
											<div class="pro-img-box attached-file-image">
												<a href="javascript:void(0);">
													<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/img/media/blog6.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
												</a>
												<ul class="icons">
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="download"><i class="fe fe-download"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="delete"><i class="fe fe-trash"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="share"><i class="fe fe-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
								<div class="card custom-card">
									<div class="card-body">
											<div>
											<h6 class="main-content-label mb-1">Image-attachment</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="h-100  attached-file-grid6">
											<div class="pro-img-box attached-file-image">
												<a href="javascript:void(0);">
													<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/img/media/blog9.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
												</a>
												<ul class="icons">
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="download"><i class="fe fe-download"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="delete"><i class="fe fe-trash"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="share"><i class="fe fe-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-lg-6 col-sm-12">
								<div class="card custom-card">
									<div class="card-body">
											<div>
											<h6 class="main-content-label mb-1">Image-attachment</h6>
											<p class="text-muted card-sub-title"></p>
										</div>
										<div class="h-100  attached-file-grid6">
											<div class="pro-img-box attached-file-image">
												<a href="javascript:void(0);">
													<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/img/media/blog8.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
												</a>
												<ul class="icons">
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="download"><i class="fe fe-download"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="delete"><i class="fe fe-trash"></i></a></li>
													<li class="me-1"><a href="javascript:void(0);" data-placement="top" data-bs-toggle="tooltip" title="share"><i class="fe fe-share"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection

@section('scripts')

@endsection