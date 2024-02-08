<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="/">
                {{-- icon sash --}}
                <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset('assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>

            <ul class="side-menu">

                <li class="sub-category">
                    <h3>Main</h3>
                </li>

                <li class="slide">
                    <a href="" class="side-menu__item has-link active"
                        data-bs-toggle="slide">
                        <i class="side-menu__icon fa fa-tachometer"></i>
                        <span class="side-menu__label">Dasboard</span></a>
                </li>


                <li class="sub-category">
                    <h3>MASTER</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fa fa-pencil"></i>
                        <span class="side-menu__label">Menu Satu</span><i class="angle fe fe-chevron-right"></i></a>

                    <ul class="slide-menu">

                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                    class="sub-side-menu__label">Sub Menu</span><i
                                    class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="">Sub Menu 1.1</a></li>
                                <li><a class="sub-slide-item" href="">Sub Menu 1.2r</a></li>
                            </ul>
                        </li>

                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                    class="sub-side-menu__label">Sub Menu</span><i
                                    class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="">Sub Menu 1.3</a></li>
                                <li><a class="sub-slide-item" href="">Sub Menu 1.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- <li>
                    <a class="side-menu__item has-link">
                            <i class="side-menu__icon fe fe-zap"></i>
                            <span class="side-menu__label">
                                <button wire:click="logout" class="border-transparent">Logout</button>
                            </span>
                            
                    </a>
                </li> --}}

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>

</div>