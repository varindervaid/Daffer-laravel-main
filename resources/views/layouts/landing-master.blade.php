<!doctype html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha - Laravel Bootstrap5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dasboard, admin panel, dashboard, template dashboard, laravel template, bootstrap admin template, bootstrap 5 admin template, dashboard template bootstrap, laravel vite, laravel admin dashboard, bootstrap dashboard, laravel dashboard, admin panel design, vite laravel, admin dashboard bootstrap">

        <!-- TITLE -->
		<title> Spruha - Laravel Bootstrap5 Admin & Dashboard Template </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('assets/img/brand/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('assets/plugins/web-fonts/icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        <link rel="stylesheet" href="{{ asset('build/app.scss') }}">

        <!-- @vite(['resources/sass/app.scss']) -->


        @yield('styles')

	</head>

	<body class="app sidebar-mini ltr landing-page horizontalmenu">

        <!-- LOADER -->
		<div id="global-loader">
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- LANDING-HEADER -->

                @include('layouts.components.landing-header')

                <!-- END LANDING-HEADER -->

                <!-- LANDING-SIDEBAR -->

                @include('layouts.components.landing-sidebar')

                <!-- END LANDING-SIDEBAR -->

                <!-- MAIN-CONTENT -->

                <div class="main-content mt-0">
                    <div class="side-app">
                        @yield('content')
                    </div>
                </div>
                <!-- END MAIN-CONTENT -->
            </div>

            <!-- LANDING-FOOTER -->

            @include('layouts.components.landing-footer')

            <!-- END LANDING-FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('layouts.components.landing-scripts')

        <!-- STICKY JS -->
		<script src="{{asset('assets/sticky.js')}}"></script>

        <!-- LANDING JS -->
        <script src="{{asset('assets/landing/js/landing.js')}}"></script>

        <!-- END SCRIPTS -->

	</body>
</html>
