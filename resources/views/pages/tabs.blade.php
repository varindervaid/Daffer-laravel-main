@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tabs</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tabs</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card" id="basic-alert">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Basic Style Tabs
										</div>
											<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>

										<div class="text-wrap">
											<div class="example">
												<div class="panel panel-primary tabs-style-1">
													<div class=" tab-menu-heading">
														<div class="tabs-menu1">
															<!-- Tabs -->
															<ul class="nav panel-tabs main-nav-line">
																<li class="nav-item"><a href="#tab1" class="nav-link active" data-bs-toggle="tab">Tab 01</a></li>
																<li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Tab 02</a></li>
																<li class="nav-item"><a href="#tab3" class="nav-link" data-bs-toggle="tab">Tab 03</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
														<div class="tab-content">
															<div class="tab-pane active" id="tab1">
																At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
															</div>
															<div class="tab-pane" id="tab2">
																<p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
																<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															</div>
															<div class="tab-pane" id="tab3">
																<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
																<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-12">
								<!-- div -->
								<div class="card custom-card mg-b-20" id="tabs-style2">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Basic Style2 Tabs
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
										<div class="text-wrap">
											<div class="example">
												<div class="panel panel-primary tabs-style-2">
													<div class=" tab-menu-heading">
														<div class="tabs-menu1">
															<!-- Tabs -->
															<ul class="nav panel-tabs main-nav-line">
																<li><a href="#tab4" class="nav-link active mt-1" data-bs-toggle="tab">Tab 01</a></li>
																<li><a href="#tab5" class="nav-link mt-1" data-bs-toggle="tab">Tab 02</a></li>
																<li><a href="#tab6" class="nav-link mt-1" data-bs-toggle="tab">Tab 03</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body tabs-menu-body main-content-body-right border">
														<div class="tab-content">
															<div class="tab-pane active" id="tab4">
																At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
															</div>
															<div class="tab-pane" id="tab5">
																<p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
																<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															</div>
															<div class="tab-pane" id="tab6">
																<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
																<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /div -->

							<div class="col-xl-12">
								<!-- div -->
								<div class="card custom-card mg-b-20" id="tabs-style3">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Horizontal Tabs
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
										<div class="text-wrap">
											<div class="example">
												<div class="panel panel-primary tabs-style-3">
													<div class="tab-menu-heading">
														<div class="tabs-menu ">
															<!-- Tabs -->
															<ul class="nav panel-tabs">
																<li class=""><a href="#tab11" class="active" data-bs-toggle="tab"> Tab Style 01</a></li>
																<li><a href="#tab12" data-bs-toggle="tab"> Tab Style 02</a></li>
																<li><a href="#tab13" data-bs-toggle="tab"> Tab Style 03</a></li>
																<li><a href="#tab14" data-bs-toggle="tab"> Tab Style 04</a></li>
															</ul>
														</div>
													</div>
													<div class="panel-body tabs-menu-body">
														<div class="tab-content">
															<div class="tab-pane active" id="tab11">
																<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															</div>
															<div class="tab-pane" id="tab12">
																<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															</div>
															<div class="tab-pane" id="tab13">
																<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
																<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															</div>
															<div class="tab-pane" id="tab14">
																<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
																<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /div -->

							<div class="col-xl-12">
								<!-- div -->
								<div class="card custom-card" id="tabs-style43">
									<div class="card-body">
										<div class="main-content-label mg-b-5">
											Vertical Tabs
										</div>
										<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
										<div class="text-wrap">
											<div class="example">
												<div class="d-md-flex">
													<div class="">
														<div class="panel panel-primary tabs-style-4">
															<div class="tab-menu-heading">
																<div class="tabs-menu ">
																	<!-- Tabs -->
																	<ul class="nav panel-tabs me-3">
																		<li class=""><a href="#tab21" class="active" data-bs-toggle="tab"> Tab Style 01</a></li>
																		<li><a href="#tab22" data-bs-toggle="tab"> Tab Style 02</a></li>
																		<li><a href="#tab23" data-bs-toggle="tab"> Tab Style 03</a></li>
																		<li><a href="#tab24" data-bs-toggle="tab"> Tab Style 04</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="tabs-style-4 ">
														<div class="panel-body tabs-menu-body">
															<div class="tab-content">
																<div class="tab-pane active" id="tab21">
																	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																	<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																</div>
																<div class="tab-pane" id="tab22">
																	<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																	<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																	<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
																</div>
																<div class="tab-pane" id="tab23">
																	<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
																</div>
																<div class="tab-pane" id="tab24">
																	<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
																	<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /div -->
								</div>
							</div>
						</div>
						<!--  End Row -->
		
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