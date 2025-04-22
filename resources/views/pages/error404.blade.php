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
						<div class="col-lg-12">
							<h1 class="tx-140 mb-0">404</h1>
						</div>
						<div class="col-lg-12 ">
							<h1>Oops.The Page you are looking  for doesn't  exit..</h1>
							<h6 class="tx-15 mt-3 mb-4 text-white-50">You may have mistyped the address or the page may have moved. Try searching below.</h6>
							<a class="btn ripple btn-success text-center mb-2" href="{{url('index')}}">Back to Home</a>
						</div>
					</div>
				</div>
			</div>

		</div>

@endsection

@section('scripts')

@endsection