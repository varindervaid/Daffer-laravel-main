<style>
    .dark-theme .text-start {
        color: var(--dark-color) !important;
    }
</style>
@extends('layouts.custom-master')

@section('styles')

@endsection

@section('content')

@section('custom-body')

<body class="ltr main-body leftmenu error-1">
    @endsection

    @section('custom-body-page')
    <div class="page main-signin-wrapper">
        @endsection
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Row -->
        <div class="container">
            <div class="row signpages text-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row row-sm">
                            <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                                <div class="mt-5 pt-4 p-2 pos-absolute start-0">
                                    <img src="{{asset('assets/img/logo.png')}}" class="header-brand-img mb-4" alt="logo">
                                    <div class="clearfix"></div>
                                    <img src="{{asset('assets/img/svgs/user.svg')}}" class="ht-100 mb-0" alt="user">
                                    <h5 class="mt-4 text-white">Create Your Account</h5>
                                    <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                                <div class="main-container container-fluid">
                                    <div class="row row-sm">
                                        <div class="card-body mt-2 mb-2">
                                            <img src="{{asset('assets/img/brand/logo-light.png')}}" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
                                            <img src="{{asset('assets/img/brand/logo.png')}}" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
                                            <div class="clearfix"></div>
                                            @if(session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                            @endif
                                            <form method="POST" action="{{ route('login') }}" autocomplete="off">
                                                @csrf
                                                <h5 class="text-start mb-2">Signin to Your Account</h5>
                                                <p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
                                                <div class="form-group text-start">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" placeholder="Enter your email" type="text">
                                                    @error('email')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group text-start">
                                                    <label>Password</label>
                                                    <input class="form-control" autocomplete="off" id="password" name="password" placeholder="Enter your password" type="password" value="">
                                                    @error('password')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    @error('invalid')
                                                    <span class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-main-primary btn-block text-white">Sign In</button>
                                            </form>
                                            <div class="text-start mt-2 ms-0">
                                                <div class="mb-1"><a href="{{url('forgot')}}">Forgot password?</a></div>
                                                <!-- <div>Don't have an account? <a href="{{route('signup')}}">Register Here</a></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Row -->

    </div>

    @endsection

    @section('scripts')

    @endsection
