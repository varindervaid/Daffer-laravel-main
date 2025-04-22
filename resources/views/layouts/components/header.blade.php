<div class="main-header side-header sticky">
    <div class="main-container container-fluid">
        <div class="main-header-left">
            <a class="main-header-menu-icon" href="javascript:void(0);" id="mainSidebarToggle"><span></span></a>
            <div class="hor-logo">
                <a class="main-logo" href="{{url('index')}}">
                    <img src="{{asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo-dark"
                        alt="logo">
                </a>
            </div>
        </div>
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="{{url('index')}}"><img src="{{asset('assets/img/brand/logo.png')}}" class="mobile-logo" alt="logo"></a>
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
                    <div class="main-header-right">
                        <!-- Search -->
                        <div class="dropdown header-search">
                            <a class="nav-link icon header-search">
                                <i class="fe fe-search header-icons"></i>
                            </a>
                        </div>
                        <div class="dropdown main-header-theme">
                            <div class="d-flex">
                                @if(request()->segment(1)=='data-management')
                                <button type="button" data-bs-toggle="modal" data-bs-target="#password-generator-modal" class=" btn btn-sm  btn-primary " id="passwordGeneratorBtn">Password Generator</button>
                                @endif
                                <a class="nav-link icon layout-setting">
                                    <span class="dark-layout">
                                        <i class="fe fe-sun header-icons"></i>
                                    </span>
                                    <span class="light-layout">
                                        <i class="fe fe-moon header-icons"></i>
                                    </span>
                                </a>
                            </div>

                        </div>

                        <div class="dropdown main-profile-menu">
                            <a class="" href="javascript:void(0);">
                                <span class="main-img-user"><img alt="avatar"
                                        src="{{ Storage::url(Auth::user()->profile_image!=''?Auth::user()->profile_image:'profile_images/human-icon.jpg') }}"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">{{ Auth::user()->name }}</h6>
                                    <p class="main-notification-text">{{ Auth::user()->role->name ?? 'No Role Assigned' }}</p>
                                </div>
                                <a class="dropdown-item border-top" href="{{route('my.profile')}}">
                                    <i class="fe fe-user"></i> My Profile
                                </a>

                                <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit"></i> Edit Profile
                                </a>
                                <a class="dropdown-item" href="{{url('profile')}}">
                                    <i class="fe fe-settings"></i> Account Settings
                                </a>
                                <a class="dropdown-item" href="{{url('profile')}}">
                                    <i class="fe fe-settings"></i> Support
                                </a>
                                <a class="dropdown-item" href="{{url('activity-log')}}">
                                    <i class="fe fe-compass"></i> Activity
                                </a>
                                <a class="dropdown-item" href="{{route('logout')}}">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
