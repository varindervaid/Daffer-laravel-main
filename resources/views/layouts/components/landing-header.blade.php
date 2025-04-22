
            <div class="main-header side-header">
                <div class="main-container container-fluid">
                    <div class="main-header-left">
                        <a class="main-header-menu-icon" href="javascript:void(0);"
                            id="mainSidebarToggle"><span></span></a>
                        <div class="hor-logo">
                            <a class="main-logo" href="{{url('index')}}">
                                <img src="{{asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo"
                                    alt="logo">
                                <img src="{{asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo-dark"
                                    alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="main-header-center">
                        <div class="responsive-logo">
                            <a href="{{url('index')}}"><img src="{{asset('assets/img/brand/logo.png')}}" class="mobile-logo"
                                    alt="logo"></a>
                            <a href="{{url('index')}}"><img src="{{asset('assets/img/brand/logo-light.png')}}" class="mobile-logo-dark"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                        </button><!-- Navresponsive closed -->
                        <div
                            class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2 ms-auto">
                                    <!-- SEARCH -->
                                    <div class="header-nav-right p-3">
                                        <a href="{{url('signin')}}" class="btn ripple btn-min w-sm btn-outline-primary me-2"
                                            target="_blank">New User
                                        </a>
                                        <a href="{{url('signup')}}" class="btn ripple btn-min w-sm btn-primary me-2"
                                            target="_blank">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>