@extends('layouts.custom-master')

@section('styles')


@endsection

@section('content')

@section('custom-body')
	<body class="ltr main-body leftmenu error-1">
@endsection

@section('custom-body-page1')
<div class="page main-signin-wrapper bg-primary construction">
@endsection

			<div class="container ">
				<div class="construction1 text-center details text-white">
					<div class="">
						<img src="{{asset('assets/img/brand/logo-light.png')}}" class="mb-5" alt="logo">
						<h4 class="text-center text-white tx-30 font-weight-bold ">We are Coming soon</h4>
						<p class="text-white-50 tx-15">We're making the system more awesome.we'll be back shortly.</p>
						<div id="launch_date"></div>
					</div>
					<div class="text-center">© 2023  <a href="https://www.spruko.com/" class="text-white-50">Spruko</a> All rights reserved.</div>
				</div>
			</div>

		</div>

@endsection

@section('scripts')

		<!-- INTERNAL JQUERY COUNTDOWN JS -->
		<script src="{{asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>

@endsection