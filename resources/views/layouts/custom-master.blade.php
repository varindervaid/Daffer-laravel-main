<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha - Laravel Bootstrap5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dasboard, admin panel, dashboard, template dashboard, laravel template, bootstrap admin template, bootstrap 5 admin template, dashboard template bootstrap, laravel vite, laravel admin dashboard, bootstrap dashboard, laravel dashboard, admin panel design, vite laravel, admin dashboard bootstrap">

        <!-- TITLE -->
		<title> Daffer </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('assets/img/brand/favicon.png  ')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('assets/plugins/web-fonts/icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- APP SCSS -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

        <link rel="stylesheet" href="{{ asset('build/app.scss') }}">
        <link rel="stylesheet" href="{{ asset('build/app.css') }}">



        <!-- APP CSS -->



        @yield('styles')

	</head>

@yield('custom-body')


        <!-- LOADER -->
		<div id="global-loader">
			<img src="{{asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- END LOADER -->

        <!-- PAGE -->

    @yield('custom-body-page')
    @yield('custom-body-page1')
    @yield('custom-body-page2')

            <!-- SWITCHER-ICON CODE -->
            <!-- <div class="d-flex header-setting-icon demo-icon fa-spin">
                <a class="nav-link icon" href="javascript:void(0);">
                    <i class="fe fe-settings settings-icon "></i>
                </a>
            </div> -->
            <!-- END SWITCHER-ICON CODE -->

                @yield('content')
        <!-- END PAGE -->

        <!-- SCRIPTS -->

        @include('layouts.components.custom-scripts')

        <!-- THEMECOLORS JS -->
        <script src="{{asset('assets/js/themeColors.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>



        <!-- CUSTOM JS -->




        <!-- END SCRIPTS -->

	</body>
</html>
