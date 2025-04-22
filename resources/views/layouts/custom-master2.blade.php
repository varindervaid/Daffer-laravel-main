<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" href="{{ asset('build/app.scss') }}">
        <link rel="stylesheet" href="{{ asset('build/app.css') }}">
        <!-- APP SCSS -->
        <!-- @vite(['resources/sass/app.scss']) -->


        <!-- APP CSS -->
        <!-- @vite(['resources/css/app.css']) -->


        @yield('styles')

	</head>

	<body class="ltr main-body leftmenu">

        <!-- LOADER -->
		<div id="global-loader">
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->
		<div class="page">

            <!-- HEADER -->

            @include('layouts.components.header')

            <!-- END HEADER -->

            <!-- SIDEBAR -->

            @include('layouts.components.sidebar')

            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->

            <div class="main-content side-content pt-0 error-bg">

                <div class="main-container container-fluid">
                    <div class="inner-body">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN-CONTENT -->

            <!-- RIGHT-SIDEBAR -->

            @include('layouts.components.right-sidebar')

            <!-- END RIGHT-SIDEBAR -->

            <!-- FOOTER -->

            @include('layouts.components.footer')

            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('layouts.components.scripts')

        <!-- STICKY JS -->
		<script src="{{asset('assets/sticky.js')}}"></script>
        <script src="{{asset('assets/js/themeColors.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <!-- THEMECOLORS JS -->
        <!-- @vite('public/assets/js/themeColors.js') -->


        <!-- CUSTOM JS -->
        <!-- @vite('public/assets/js/custom.js') -->


        <!-- END SCRIPTS -->

	</body>
</html>
