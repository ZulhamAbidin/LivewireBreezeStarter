<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0)"></a>

            <a class="logo-horizontal " href="/">
                <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>

            <div class="d-flex order-lg-2 ms-auto header-right-icons">


                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">

                            <!-- THEME -->
                            {{-- <div class="d-flex country">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div> --}}

                            <div class="dropdown d-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-minimize fullscreen-button"></i>
                                </a>
                            </div>

                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                    class="nav-link leading-none d-flex">
                                    <i class="nav-link icon fe fe-settings text-xl"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-left">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold text-center">{{auth()->user()->name}}</h5>
                                            {{-- <small class="text-muted">Senior Admin</small> --}}
                                        </div>
                                    </div>

                                    <div class="dropdown-divider m-0"></div>

                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <button class="btn"><i class="dropdown-icon fe fe-user"></i> Profile</button>
                                    </a>

                                    <a class="dropdown-item">
                                        @livewire('actions/logout')
                                    </a>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>