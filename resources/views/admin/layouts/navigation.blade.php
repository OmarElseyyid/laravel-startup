<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">

    <!-- Side Overlay-->
    <aside id="side-overlay" class="font-size-sm">
        <!-- Side Header -->
        <div class="content-header border-bottom">
            <!-- User Avatar -->
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="{{ asset('admin-files/media/avatars/avatar10.jpg') }}" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ml-2">
                <a class="link-fx text-dark font-w600" href="javascript:void(0)">{{session('username')}}</a>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-fw fa-times text-danger"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t">
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#so-overview">
                            <i class="fa fa-fw fa-cogs text-gray mr-1"></i> Ayarlar
                        </a>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <!-- Overview Tab -->
                    <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                        <!-- Activity -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Burasi Gelecek ..</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>

                            <div class="block-content">
                                <!--
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="media-body">
                                                <div class="font-w600">Yeni</div>
                                                <div class="text-success">Admin</div>
                                                <small class="text-muted">3 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                -->
                            </div>

                        </div>
                        <!-- END Activity -->

                        <!-- Online Friends -->
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Burasi Gelecek ..</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- 
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="media py-2" href="javascript:void(0)">
                                            <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                <img class="img-avatar img-avatar48" src="{{ asset('admin-files/media/avatars/avatar3.jpg') }}" alt="">
                                                <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-w600">admin</div>
                                                <div class="font-w400 text-muted">Copywriter</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                -->
                            </div>
                        </div>
                        <!-- END Online Friends -->

                        <!-- Quick Settings -->
                        <div class="block mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Burasi Gelecek ..</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!--
                                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                    <hr>
                                    <div class="form-group">
                                        <p class="font-w600 mb-1">
                                            Application Alerts
                                        </p>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                                            <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                        </div>
                                        <div class="custom-control custom-switch mb-1">
                                            <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                                            <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                                -->
                            </div>
                        </div>
                        <!-- END Quick Settings -->
                    </div>
                    <!-- END Overview Tab -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="font-w600 text-dual" href="index.html">

                <span class="smini-hide">
                    <span class="font-w700 font-size-h5">OİS |</span> <span class="font-w400">{{session('username')}}</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Color Variations -->
                <div class="dropdown d-inline-block ml-3">
                    <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="si si-drop"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                        <!-- Color Themes -->
                        <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                            <span>Varsayılan</span>
                            <i class="fa fa-circle text-default"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin-files/css/themes/amethyst.min.css') }}" href="#">
                            <span>Amethyst</span>
                            <i class="fa fa-circle text-amethyst"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin-files/css/themes/city.min.css') }}" href="#">
                            <span>City</span>
                            <i class="fa fa-circle text-city"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin-files/css/themes/flat.min.css') }}" href="#">
                            <span>Flat</span>
                            <i class="fa fa-circle text-flat"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin-files/css/themes/modern.min.css') }}" href="#">
                            <span>Modern</span>
                            <i class="fa fa-circle text-modern"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="{{ asset('admin-files/css/themes/smooth.min.css') }}" href="#">
                            <span>Smooth</span>
                            <i class="fa fa-circle text-smooth"></i>
                        </a>
                        <!-- END Color Themes -->
                    </div>
                </div>
                <!-- END Themes -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('admin.dashboard') }}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Admin Paneli</span>
                    </a>
                </li>
                <li class="nav-main-heading">İşlemler</li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/botlar*')) ? 'active' : '' }}" href="{{ route('admin.botlar') }}">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Botlar</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/uyeler*')) ? 'active' : '' }}" href="{{ route('admin.uyeler') }}">
                        <i class="nav-main-link-icon si si-users"></i>
                        <span class="nav-main-link-name">Üyeler</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/ihaleler*')) ? 'active' : '' }}" href="{{ route('admin.ihaleler') }}">
                        <i class="nav-main-link-icon fa fa-car"></i>
                        <span class="nav-main-link-name">İhaleler</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/teklifler*')) ? 'active' : '' }}" href="{{ route('admin.teklifler') }}">
                        <i class="nav-main-link-icon si si-fire"></i>
                        <span class="nav-main-link-name">Teklifler</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/acik-arttirma*')) ? 'active' : '' }}" href="{{ route('admin.acik-arttirma') }}">
                        <i class="nav-main-link-icon fa fa-arrow-up"></i>
                        <span class="nav-main-link-name">Açık Arttırma</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/kalanlar*')) ? 'active' : '' }}" href="{{ route('admin.kalanlar') }}">
                        <i class="nav-main-link-icon fa fa-map-pin"></i>
                        <span class="nav-main-link-name">Kalanlar</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/kayitlar*')) ? 'active' : '' }}" href="{{ route('admin.kayitlar') }}">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name">Kayıtlar</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link {{ (request()->is('admin/ayarlar*')) ? 'active' : '' }}" href="{{ route('admin.ayarlar') }}">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Ayarlar</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link" href="{{ route('admin.logout') }}">
                        <i class="nav-main-link-icon si si-logout"></i>
                        <span class="nav-main-link-name">Çıkış Yap</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Toggle Mini Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Mini Sidebar -->

                <!-- Apps Modal -->
                <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                    <i class="si si-grid"></i>
                </button>
                <!-- END Apps Modal -->

                <!-- 
                <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                    <i class="si si-magnifier"></i>
                </button>
               

                <form class="d-none d-sm-inline-block" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                        <div class="input-group-append">
                            <span class="input-group-text bg-body border-0">
                                <i class="si si-magnifier"></i>
                            </span>
                        </div>
                    </div>
                </form>
                -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded" src="{{ asset('admin-files/media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 18px;">
                        <span class="d-none d-sm-inline-block ml-1">{{session('username')}}</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                        <div class="p-3 text-center bg-primary">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('admin-files/media/avatars/avatar10.jpg') }}" alt="">
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                <span>Gelen Mesaj</span>
                                <span>
                                    <span class="badge badge-pill badge-primary">3</span>
                                    <i class="si si-envelope-open ml-1"></i>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                                <span>Profilim</span>
                                <span>
                                    <i class="si si-user ml-1"></i>
                                </span>
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <h5 class="dropdown-header text-uppercase">İşlemler</h5>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('admin.logout') }}">
                                <span>Çıkış Yap</span>
                                <i class="si si-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-bell"></i>
                        <span class="badge badge-danger badge-pill">6</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-2 bg-primary text-center">
                            <h5 class="dropdown-header text-capitalize text-white">Bildirimler</h5>
                        </div>
                        <ul class="nav-items mb-0">
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">burası gelecek...</div>
                                        <small class="text-muted">15 dakika önce</small>
                                    </div>
                                </a>
                            </li>

                            <!--
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">You have a new follower</div>
                                        <small class="text-muted">15 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-plus-circle text-info"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">1 new sale, keep it up</div>
                                        <small class="text-muted">22 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">Update failed, restart server</div>
                                        <small class="text-muted">26 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-plus-circle text-info"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">2 new sales, keep it up</div>
                                        <small class="text-muted">33 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-user-plus text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">You have a new subscriber</div>
                                        <small class="text-muted">41 min ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mr-2 ml-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body pr-2">
                                        <div class="font-w600">You have a new follower</div>
                                        <small class="text-muted">42 min ago</small>
                                    </div>
                                </a>
                            </li>
                            -->
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-arrow-down mr-1"></i> Daha Fazla..
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->