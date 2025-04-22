<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="{{url('index')}}">
                    <img src="{{asset('assets/img/logo.png')}}" class="header-brand-img" alt="logo">
                    <!-- <img src="{{asset('assets/img/logo.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img src="{{asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo"> -->
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                <ul class="menu-nav nav">
                    <li class="user-profile mb-3 p-2 rounded-2 d-none">
                        <a href="#" class="align-items-center d-flex gap-2">
                            @if(Auth::user()->profile_image)
                            <img src="{{ Storage::url(Auth::user()->profile_image) }}" class="img-fluid rounded-2" alt="Profile" height="42" width="42">
                            @else
                            <img src="{{ Storage::url('profile_images/human-icon.jpg') }}" class="img-fluid rounded-2" alt="Profile" height="42" width="42">
                            @endif
                            <div class="user-names">
                                <h6 class="fs-16 mb-0">{{Auth::user()->name}}</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-header" style="margin-left: 0px;"><span class="nav-label main_menu">Main Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/index')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Home</span>
                        </a>
                    </li>
                    @if(permission_helper('4','view_opt'))
                    <li class="nav-item  data_management_module">
                        <a class="nav-link" href="{{url('data-management')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-database sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Data Management</span>
                        </a>
                    </li>
                    @endif
                    @if(permission_helper('1','view_opt'))
                    <li class="nav-item user_management_module">
                        <a class="nav-link" href="{{url('user-management')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-users sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">User Management</span>
                        </a>
                    </li>
                    @endif

                    <li class="nav-item export_module" >
                        <a class="nav-link" href="{{url('data-export')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-file-export sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Data Export</span>
                        </a>
                    </li>
                    @if(Auth::id()==1)
                    <li class="nav-item logs_module">
                        <a class="nav-link" href="{{url('activity-log')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-history sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Logs</span>
                        </a>
                    </li>
                    @endif
                </ul>
                <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>
