@extends('layouts.master')

@section('styles')


@endsection

@section('content')

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Marketcap</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Marketcap</li>
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
							<div class="col-lg-6 col-xl-6 col-xxl-3 col-md-6 col-12">
								<div class="card custom-card">
									<div class="card-body pb-3">
										<h5 class="tx-14">BTC / USD</h5>
										<div class="d-flex">
											<div class="">
												<h4 class="mb-2">34.4324 <span class="text-muted tx-12">$29.42</span></h4>
												<div class="d-flex text-muted tx-13"><span class="text-danger me-2 font-weight-bold">-0.22%</span> Volume - 76,434.57 USDT</div>
											</div>
											<div class="d-flex ms-auto float-end">
												<canvas id="btc-market" class="wd-50p wd-100-f ms-auto float-end"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 col-xxl-3 col-md-6 col-12">
								<div class="card custom-card">
									<div class="card-body pb-3">
										<h5 class="tx-14">ETH / USD</h5>
										<div class="d-flex">
											<div class="">
												<h4 class="mb-2">29.4124 <span class="text-muted tx-12">$23.15</span></h4>
												<div class="d-flex text-muted tx-13"><span class="text-success me-2 font-weight-bold">+0.23%</span> Volume - 23,346.56 USDT</div>
											</div>
											<div class="d-flex ms-auto float-end">
												<canvas id="ethereum-market" class="wd-50p wd-100-f ms-auto float-end"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 col-xxl-3 col-md-6 col-12">
								<div class="card custom-card">
									<div class="card-body pb-3">
										<h5 class="tx-14">XRP / USD</h5>
										<div class="d-flex">
											<div class="">
												<h4 class="mb-2">34.5674 <span class="text-muted tx-12">$45.24</span></h4>
												<div class="d-flex text-muted tx-13"><span class="text-danger me-2 font-weight-bold">-0.42%</span> Volume - 56,456.12 USDT</div>
											</div>
											<div class="d-flex ms-auto float-end">
												<canvas id="xrp-market" class="wd-50p wd-100-f ms-auto float-end"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 col-xxl-3 col-md-6 col-12">
								<div class="card custom-card">
									<div class="card-body pb-3">
										<h5 class="tx-14">LTC / USD</h5>
										<div class="d-flex">
											<div class="">
												<h4 class="mb-2">45.4542 <span class="text-muted tx-12">$63.34</span></h4>
												<div class="d-flex text-muted tx-13"><span class="text-success me-2 font-weight-bold">-0.12%</span> Volume - 34,462.57 USDT</div>
											</div>
											<div class="d-flex ms-auto float-end">
												<canvas id="ltc-market" class="wd-50p wd-100-f ms-auto float-end"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End row -->

						<!-- row opened -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto">Crypt Marketing Values</label>
									</div>
									<div class="card-body">
										<div class="">
											<div class="table-responsive">
												<table class="table text-nowrap">
													<thead class="border-top">
														<tr>
															<th class="bg-transparent">No</th>
															<th class="bg-transparent">Name</th>
															<th class="bg-transparent">Last Price</th>
															<th class="bg-transparent">Market Cap</th>
															<th class="bg-transparent">Change(24h)</th>
															<th class="bg-transparent"></th>
														</tr>
													</thead>
													<tbody>
														<tr class="border-bottom">
															<td>1</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/btc.svg')}}" class="wd-30 ht-30 me-3" alt="">Bitcoin <b>BTC</b></td>
															<td>$ 10513.00</td>
															<td>$ 51,191,183,730</td>
															<td><span class="text-success">+3.49%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>2</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/eth.svg')}}" class="wd-30 ht-30 me-3" alt="">Ethereum <b>ETH</b></td>
															<td>$ 425.25</td>
															<td>$ 4,48,308,110</td>
															<td><span class="text-success">+0.53%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>3</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/xrp.svg')}}" class="wd-30 ht-30 me-3" alt="">Ripple <b>XRP</b></td>
															<td>$ 1.2029</td>
															<td>$ 7,63,80,043</td>
															<td><span class="text-success">+0.26%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>4</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/ltc.svg')}}" class="wd-30 ht-30 me-3" alt="">litecoin <b>LTC</b></td>
															<td>$ 1547.67</td>
															<td>$ 6,14,18,730</td>
															<td><span class="text-danger">-0.63%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>5</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/neo.svg')}}" class="wd-30 ht-30 me-3" alt="">Neo <b>NEO</b></td>
															<td>$ 723.48</td>
															<td>$ 19,07,67,295</td>
															<td><span class="text-danger">-2.18%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>6</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/xmr.svg')}}" class="wd-30 ht-30 me-3" alt="">Monero <b>XMR</b></td>
															<td>$ 305.16</td>
															<td>$ 4,778,157,533</td>
															<td><span class="text-success">+3.12%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>7</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/eos.svg')}}" class="wd-30 ht-30 me-3" alt="">EOS <b>EOS</b></td>
															<td>$ 149.18</td>
															<td>$ 8,44,49,000</td>
															<td><span class="text-danger">-1.42%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>8</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/steem.svg')}}" class="wd-30 ht-30 me-3" alt="">Steem <b>Steem</b></td>
															<td>$ 0.467813</td>
															<td>$ 8,358,735,080</td>
															<td><span class="text-success">+3.49%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>9</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/miota.svg')}}" class="wd-30 ht-30 me-3" alt="">Iota <b>IOTA</b></td>
															<td>$ 2.34</td>
															<td>$ 6,504,100,862</td>
															<td><span class="text-danger">-1.05%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>10</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/dash.svg')}}" class="wd-30 ht-30 me-3" alt="">Dash <b>DASH</b></td>
															<td>$ 747.222</td>
															<td>$ 5,881,413,815</td>
															<td><span class="text-success">+0.94%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
														<tr class="border-bottom">
															<td>11</td>
															<td><img src="{{asset('assets/img/svgs/crypto-currencies/waves.svg')}}" class="wd-30 ht-30 me-3" alt="">Waves <b>NEM</b></td>
															<td>$ 181.39</td>
															<td>$ 3,084,108,676</td>
															<td><span class="text-danger">-3.23%</span></td>
															<td><a href="javascript:void(0);" class="btn btn-outline-primary btn-sm">Trade</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->
						
@endsection

@section('scripts')

		<!-- INTERNAL CHART.BUNDLE JS -->
		<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- PEITY JS -->
		<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- INTERNAL MORRIS JS -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets/plugins/morris.js/morris.min.js')}}"></script>

		<!-- INTERNAL APEXCHART JS -->
		@vite('public/assets/js/apexcharts.js')
		

		<!-- INTERNAL DASHBOARD JS -->
		@vite('public/assets/js/crypto-market.js')


@endsection