@extends('layouts.master')

@section('styles')

@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Mail-Inbox</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mail-Inbox</li>
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
							<div class="col-xl-3 col-lg-4">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="">
										<div class="p-4 border-bottom">
											<a class="btn btn-main-primary btn-block btn-compose" href="{{url('mail-compose')}}">Compose</a>
										</div>
										<div class="card-body tab-list-items">
											<div class="main-content-left main-content-left-mail">
												<div class="main-mail-menu">
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link active" href="javascript:void(0);">
															<i class="fe fe-mail"></i> Inbox <span>20</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-star"></i> Starred <span>3</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-bookmark"></i> Important <span>10</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-send"></i> Sent Mail <span>8</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-edit"></i> Drafts <span>15</span></a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-disc"></i> Spam <span>128</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-trash"></i> Trash <span>6</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Label</label>
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-folder"></i> Social <span>10</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-folder"></i> Work <span>22</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-folder"></i> Personal <span>22</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-folder"></i> Promotions <span>22</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-folder-plus"></i> Updates <span>17</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Tags</label>
													<nav class="nav main-nav-column">
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-twitter"></i> Twitter <span>2</span></a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-github"></i> Github <span>32</span>
														</a>
														<a class="nav-link" href="javascript:void(0);">
															<i class="fe fe-gitlab"></i> Gitlab <span>23</span>
														</a>
													</nav>
												</div><!-- main-mail-menu -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8  main-content-body-mail1">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="inbox-body p-4">
										<div class="mail-option">
											<div class="chk-all border-0">
												<div class="btn-group">
													<a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini all" aria-expanded="false">
														All
														<i class="fe fe-chevron-down"></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="javascript:void(0);"> None</a></li>
														<li><a href="javascript:void(0);"> Read</a></li>
														<li><a href="javascript:void(0);"> Unread</a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a  href="javascript:void(0);" class="btn mini tooltips">
													<i class="fe fe-refresh-cw"></i>
												</a>
											</div>
											<div class="btn-group hidden-phone">
												<a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini blue" aria-expanded="false">
													More
													<i class="fe fe-chevron-down"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Mark as Read</a></li>
													<li><a href="javascript:void(0);"><i class="fe fe fe-slash me-2"></i> Spam</a></li>
													<li class="divider"></li>
													<li><a href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a></li>
												</ul>
											</div>
											<ul class="unstyled inbox-pagination">
												<li><span>1-50 of 234</span></li>

												<li>
													<a class="btn np-btn" href="javascript:void(0);"><i class="fe fe-chevron-right pagination-right"></i></a>
												</li>
											</ul>
										</div>
										<div class="table-responsive">
											<table class="table table-inbox text-md-nowrap table-hover text-nowrap">
												<tbody>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Tim Reid, S P N</td>
														<td class="view-message">Boost Your Website Traffic</td>
														<td class="view-message text-end font-weight-semibold">April 01</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
														<td class="view-message">Stop wasting your visitors </td>
														<td class="view-message text-end font-weight-semibold">May 23</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message  dont-show">PHPClass</td>
														<td class="view-message ">Added a new class: Login Class Fast Site</td>
														<td class="view-message  text-end">9:27 AM</td>
													</tr>

													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Facebook</td>
														<td class="view-message view-message">Somebody requested a new password </td>
														<td class="view-message text-end font-weight-semibold">June 13</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Skype</td>
														<td class="view-message view-message">Password successfully changed</td>
														<td class="view-message text-end font-weight-semibold">March 24</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Google+</td>
														<td class="view-message">alireza, do you know</td>
														<td class="view-message text-end font-weight-semibold">March 09</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">WOW Slider </td>
														<td class="view-message">New WOW Slider v7.8 - 67% off</td>
														<td class="view-message text-end font-weight-semibold">March 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">LinkedIn Pulse</td>
														<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
														<td class="view-message text-end font-weight-semibold">Feb 19</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Google Webmaster </td>
														<td class="view-message">Improve the search presence of WebSite</td>
														<td class="view-message text-end font-weight-semibold">March 15</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">JW Player</td>
														<td class="view-message">Last Chance: Upgrade to Pro for </td>
														<td class="view-message text-end font-weight-semibold">March 15</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Drupal Community</td>
														<td class="view-message view-message">Welcome to the Drupal Community</td>
														<td class="view-message text-end font-weight-semibold">March 04</td>
													</tr>

													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="dont-show font-weight-semibold">Zoosk </td>
														<td class="view-message">7 new singles we think you'll like</td>
														<td class="view-message text-end font-weight-semibold">May 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show font-weight-semibold">LinkedIn </td>
														<td class="view-message">Alireza: Nokia Networks, System Group and </td>
														<td class="view-message text-end font-weight-semibold">February 25</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="dont-show font-weight-semibold">Facebook</td>
														<td class="view-message view-message">Your account was recently logged into</td>
														<td class="view-message text-end font-weight-semibold">March 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Twitter</td>
														<td class="view-message">Your Twitter password has been changed</td>
														<td class="view-message text-end font-weight-semibold">April 07</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">InternetSeer</td>
														<td class="view-message">Performance Report</td>
														<td class="view-message text-end font-weight-semibold">July 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show font-weight-semibold">Bertina </td>
														<td class="view-message">IMPORTANT: Don't lose your domains!</td>
														<td class="view-message text-end font-weight-semibold">June 16</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show font-weight-semibold">Laura Gaffin, S P N </td>
														<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
														<td class="view-message text-end font-weight-semibold">August 10</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Facebook</td>
														<td class="view-message view-message">Alireza Zare Login faild</td>
														<td class="view-message text-end font-weight-semibold">feb 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">AddMe.com</td>
														<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
														<td class="view-message text-end font-weight-semibold">August 10</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Terri Rexer, S P N</td>
														<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
														<td class="view-message text-end font-weight-semibold">April 14</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- mail-content -->
								</div>
							</div>
						</div>
						<!-- /row -->

@endsection

@section('scripts')

		<!-- INTERNAL CHECK-ALL-MAIL JS -->
		@vite('public/assets/js/check-all-mail.js')

@endsection