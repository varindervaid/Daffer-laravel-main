@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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

						<!-- row opened -->
						<div class="row row-sm">
							<div class="owl-carousel  owl-theme">
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Bitcoin BTC</span>
													<h3 class="m-0 mt-2">1.343434</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Ethereum ETH</span>
													<h3 class="m-0 mt-2">3.763674</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Ripple  XRP</span>
													<h3 class="m-0 mt-2">12.53647</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/xrp.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">litecoin  LTC</span>
													<h3 class="m-0 mt-2">3,635387</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/ltc.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Dash DASH</span>
													<h3 class="m-0 mt-2">3,635387</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/dash.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Monero  XMR</span>
													<h3 class="m-0 mt-2">5,34578</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/xmr.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Neo  NEO</span>
													<h3 class="m-0 mt-2">4,435456</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/neo.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card custom-card">
										<div class="card-body">
											<div class="d-flex no-block align-items-center">
												<div>
													<span class="text-muted tx-13 mb-3">Steem STEEM</span>
													<h3 class="m-0 mt-2">2,345467</h3>
												</div>
												<div class="ms-auto mt-auto">
													<img src="{{asset('assets/img/svgs/crypto-currencies/steem.svg')}}" class="wd-30 hd-30 me-2" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->

						<!-- row opened -->
						<div class="row row-sm">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-4">
								<div class="card custom-card wallet-1">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto pt-2 mb-1">Assets Allocation</label>
										<span class="d-block tx-12 mb-0 mt-1 text-muted">Asset allocation involves dividing an investment portfolio among different asset categories</span>
									</div>
									<div class="card-body crypto-wallet">
										<div class="">
											<canvas id="crypto-donut" class="ht-200"></canvas></div>
											<div class="chart-circle-value circle-style"><div class="tx-20 font-weight-bold">55%</div>
										</div>
									</div>

									<div class="table-responsive border-0">
										<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
											<tbody>
												<tr>
													<td class="d-flex">
													<div class="cryp-icon bg-primary my-auto me-2"> <i class="cf cf-btc"></i> </div>
														<div class="media-body ms-3">
															<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin BTC</p>
															<span class="tx-15 font-weight-semibold my-auto">$10,245.00</span>
														</div>
													</td>
													<td class="">0.0215637249</td>
													<td>+12.85% <i class="fa fa-arrow-up text-success ms-1"> </i></td>
												</tr>
												<tr>
													<td class="d-flex">
													<div class="cryp-icon bg-primary my-auto me-2"> <i class="cf cf-btc"></i> </div>
														<div class="media-body ms-3">
															<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum ETH</p>
															<span class="tx-15 font-weight-semibold my-auto">$10,245.00</span>
														</div>
													</td>
													<td class="">0.0253737689</td>
													<td>-02.25% <i class="fa fa-arrow-down text-danger ms-1"> </i></td>
												</tr>
												<tr>
													<td class="d-flex">
													<div class="cryp-icon bg-primary my-auto me-2"> <i class="cf cf-btc"></i> </div>
														<div class="media-body ms-3">
															<p class="mb-1 text-muted font-weight-normal tx-15">Dash DASH</p>
															<span class="tx-15 font-weight-semibold my-auto">$10,245.00</span>
														</div>
													</td>
													<td>0.0253546426</td>
													<td>-11.85% <i class="fa fa-arrow-down text-danger ms-1"> </i></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-xxl-8 col-lg-12 col-md-12">
								<div class="card card-bitcoin custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto pt-2 tx-15-f">BTC/USD</label>
										<span class="d-block tx-12 mb-0 mt-1 text-muted">Bitcoin is a digital cryptocurrency made up of processed data blocks used for online and brick-and-mortar purchases.</span>
									</div>
									<div class="card-body">
										<div id="btc_chart"></div>
									</div>
									<div class="media d-sm-flex d-block px-4 pb-4 pt-1">
										<div class="media-icon bg-primary crypto-icon my-auto me-2">
											<i class="cf cf-btc tx-20"></i>
										</div>
										<div class="media-body ms-2">
											<div class="row row-sm">
												<div class="col"><label>Symbol</label>
													<p>BTC</p>
												</div>
												<div class="col-6 col-sm-3">
													<label>Price Benchmark</label>
													<p>135.00%</p>
												</div>
												<div class="col">
													<label>Price (USD)</label>
													<p>$2,457.69</p>
												</div>
												<div class="col">
													<label>Change (24H)</label>
													<p>-0.32%</p>
												</div>
												<div class="col">
													<label>Market Cap</label>
													<p>$134.17B</p>
												</div>
											</div><!-- row -->
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- row closed -->

						<!-- row opened -->
						<div class="row row-sm">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-8">
								<div class="row row-sm">
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card">
											<div class="card-body row">
												<div class="col-sm-5 d-flex no-block align-items-center">
													<div>
														<span class="tx-18 mb-3">Bitcoin</span>
														<h2 class="mb-2 mt-2">3.634528</h2>
														<span class="m-0 tx-15 mt-4 text-muted">$2500 USD</span>
													</div>
												</div>
												<div class="col-sm-7">
													<div class="chart-wrapper mt-4 ms-2 me-2">
														<canvas id="cryptoChart2" class="chart-dropshadow-info cryptoChart2 overflow-hidden"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card">
											<div class="card-body">
												<span class="tx-18">Your Profile</span>
												<div class="row mt-3">
													<div class="col-sm-6 my-auto border-end bd-sm-end-0 text-centerd-flex no-block align-items-center">
														<div class="d-flex">
															<span class="peity-donut" data-peity='{ "fill": ["#6259ca","#f16d75","#19b159"], "innerRadius": 20, "radius": 16, "height": 50, "width": 50}'>10,4,4</span>
															<div class="my-auto d-block ms-3">
																<h6 class="mb-2 tx-16">2.343434</h6>
																<span class="m-0 tx-14 text-muted">$2500 USD</span>
															</div>
														</div>
													</div>
													<div class="col-sm-6 my-auto text-sm-center">
														<h2 class="mb-2  mt-3 mt-sm-0">2.343434</h2>
														<span class="m-0 tx-14 mt-3 text-muted">Pending Balance</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto pt-2">TRADING ACTIVITIES</label>
										<span class="d-block tx-12 mb-3 mt-1 text-muted">Cryptocurrency trading is the act of speculating on cryptocurrency price movements via a CFD trading account, or buying and selling the underlying coins via an exchange</span>
									</div>
									<div class="card-body pt-2 pb-0">
										<div class="table-responsive tasks">
											<table class="table card-table table-vcenter text-nowrap border">
												<thead>
													<tr>
														<th class="wd-lg-10p">#</th>
														<th class="wd-lg-10p">Name</th>
														<th class="wd-lg-20p">Price</th>
														<th class="wd-lg-20p text-center">Change</th>
														<th class="wd-lg-20p">Chart</th>
														<th class="wd-lg-20p text-start">Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td class="coin_icon mt-2 d-flex">
															<div class="cryp-icon bg-primary me-2"> <i class="cf cf-btc"></i> </div>
															<span class=" my-auto">Bitcoin <b>BTC</b></span>
														</td>
														<td>USD 680,175.06</td>
														<td class="text-center">
															<span class="text-success ">+1.13%</span>
														</td>
														<td><span id="sparkline11">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span></td>
														<td class="text-start"><a href="javascript:void(0);" class="text-success">DELIVERY</a></td>
													</tr>
													<tr>
														<td>2</td>
														<td class="coin_icon mt-2 d-flex">
															<div class="cryp-icon bg-primary my-auto me-2"> <i class="cf cf-eth"></i> </div>
															<span class=" my-auto">Ethereum <b>ETH</b></span>
														</td>
														<td>USD 345,235.02</td>
														<td class="text-center">
															<span class="text-danger">-1.13%</span>
														</td>
														<td><span id="sparkline12">3,6,6,7,4,8,10,4,6,8,3,5,6,9,2,2,5,8,10,6,8,4,6,4</span></td>
														<td class="text-start"><a href="javascript:void(0);" class="text-danger">CANCEL</a></td>
													</tr>
													<tr>
														<td>3</td>
														<td class="coin_icon mt-2 d-flex">
															<div class="cryp-icon bg-primary my-auto me-2"> <i class="cf cf-xrp"></i> </div>
															<span class=" my-auto">Ripple <b>XRP</b></span>
														</td>
														<td>USD 235,356.12</td>
														<td class="text-center">
															<span class="text-muted">-2.23%</span>
														</td>
														<td><span id="sparkline13">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span></td>
														<td class="text-start"><a href="javascript:void(0);" class="text-muted">HOLD</a></td>
													</tr>
													<tr>
														<td>4</td>
														<td class="coin_icon mt-2 d-flex">
															<div class="cryp-icon bg-primary my-auto me-2"> <i class="cf cf-ltc"></i> </div>
															<span class=" my-auto">Litecoin <b>LTC</b></span>
														</td>
														<td>USD 456,235.52</td>
														<td class="text-center">
															<span class="text-danger ">-1.13%</span>
														</td>
														<td><span id="sparkline14">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8,7,5,9,10,6,9,4,7,5</span></td>
														<td class="text-start"><a href="javascript:void(0);" class="text-danger">CANCEL</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-12  col-xl-12 col-xxl-4">
								<div class="card custom-card overflow-hidden">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto pt-2">Activity</label>
										<span class="d-block tx-12 mb-4 mt-1 text-muted">Activity is one of the many blockchain consensus algorithms</span>
									</div>
									<ul class="crypto-transcation list-unstyled mg-b-0">
										<li class="list-item mb-0 px-3 mt-0 pb-3">
											<div class="media align-items-center">
												<div class="crypto-icon bg-primary-transparent text-primary"> <i class="cf cf-btc wd-20 ht-20 text-center tx-18"></i>
												</div>
												<div class="media-body ms-3">
													<p class="tx-medium mg-b-3 tx-15">Sent Litecoin</p>
													<p class="tx-11 mg-b-0 tx-gray-500">To bitcoin Address</p>
												</div>
											</div>
											<div class="text-end ms-auto my-auto">
												<h5 class="font-weight-semibold tx-16 mb-0">+ 0.0147<i class="text-success tx-16 fe fe-arrow-up ms-1"></i></h5>
											</div>
										</li>
										<li class="list-item mb-0 px-3 pb-3">
											<div class="media align-items-center">
												<div class="crypto-icon bg-primary-transparent text-primary"> <i class="cf cf-ltc wd-20 ht-20 text-center tx-18"></i>
												</div>
												<div class="media-body ms-3">
													<p class="tx-medium mg-b-3 tx-15">Sent Ethereum</p>
													<p class="tx-11 mg-b-0 tx-gray-500">Pending</p>
												</div>
											</div>
											<div class="text-end ms-auto my-auto">
												<h5 class="font-weight-semibold tx-16 mb-0">- 0.0345<i class="text-danger tx-16 fe fe-arrow-down ms-1"></i></h5>
											</div>
										</li>
										<li class="list-item mb-0 px-3 pb-3">
											<div class="media align-items-center">
												<div class="crypto-icon bg-primary-transparent text-primary"> <i class="cf cf-dash wd-20 ht-20 text-center tx-18"></i>
												</div>
												<div class="media-body ms-3">
													<p class="tx-medium mg-b-3 tx-15">Received Dash</p>
													<p class="tx-11 mg-b-0 tx-gray-500">To Received Address</p>
												</div>
											</div>
											<div class="text-end ms-auto my-auto">
												<h5 class="font-weight-semibold tx-16 mb-0">- 0.0346<i class="text-danger tx-16 fe fe-arrow-down"></i></h5>
											</div>
										</li>
										<li class="list-item px-3 pb-3">
											<div class="media align-items-center">
												<div class="crypto-icon bg-primary-transparent text-primary"> <i class="cf cf-xrp wd-20 ht-20 text-center tx-18"></i>
												</div>
												<div class="media-body ms-3">
													<p class="tx-medium mg-b-3 tx-15">Received Ripple</p>
													<p class="tx-11 mg-b-0 tx-gray-500">To Received Address</p>
												</div>
											</div>
											<div class="text-end ms-auto my-auto">
												<h5 class="font-weight-semibold tx-16 mb-0">+ 0.0237<i class="text-success tx-16 fe fe-arrow-up ms-1"></i></h5>
											</div>
										</li>
										<li class="list-item px-3 pb-3">
											<div class="media align-items-center">
												<div class="crypto-icon bg-primary-transparent text-primary"> <i class="cf cf-bsd wd-20 ht-20 text-center tx-18"></i>
												</div>
												<div class="media-body ms-3">
													<p class="tx-medium mg-b-3 tx-15">Received Ripple</p>
													<p class="tx-11 mg-b-0 tx-gray-500">To Received Address</p>
												</div>
											</div>
											<div class="text-end ms-auto my-auto">
												<h5 class="font-weight-semibold tx-16 mb-0">- 0.0348<i class="text-danger tx-16 fe fe-arrow-down ms-1"></i></h5>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- row closed -->

@endsection

@section('scripts')

		<!-- INTERNAL CHART.BUNDLE JS -->
		<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- PEITY JS -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- OWL CAROUSEL JS -->
		<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

		<!-- INTERNAL APEXCHART JS -->
		@vite('public/assets/js/apexcharts.js')
		

		<!-- INTERNAL POLYFILLS JS -->
		<script src="{{asset('assets/plugins/polyfill/polyfill.min.js')}}"></script>
		<script src="{{asset('assets/plugins/polyfill/classList.min.js')}}"></script>
		<script src="{{asset('assets/plugins/polyfill/polyfill_mdn.js')}}"></script>

		<!-- INTERNAL MORRIS JS -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets/plugins/morris.js/morris.min.js')}}"></script>

		<!-- SPARKLINE JS -->
		<script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- INTERNAL DASHBOARD JS -->
		@vite('public/assets/js/crypto-dashboard.js')


@endsection