<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Drezoc - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('dashboard-assets/images/favicon.ico') }}">

<!-- Morris Chart CSS -->
<link href="{{ asset('dashboard-assets/libs/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

<!-- App CSS -->
<link href="{{ asset('dashboard-assets/css/style.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

<!-- Config JS -->
<script src="{{ asset('dashboard-assets/js/config.js') }}"></script>


</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a class='logo-light' href='/drezoc/layouts/'>
                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="18">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="24">
                </a>

                <!-- Brand Logo Dark -->
                <a class='logo-dark' href='/drezoc/layouts/'>
                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="18">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="24">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='/drezoc/layouts/'>
                            <span class="menu-icon"><i data-lucide="airplay "></i></span>
                            <span class="menu-text"> Dashboards </span>
                            <span class="badge bg-info rounded-pill ms-auto">3</span>
                        </a>
                    </li>

                    <li class="menu-title">Custom</li>

                    <li class="menu-item">
                        <a class='menu-link waves-effect' href='/drezoc/layouts/apps-calendar'>
                            <span class="menu-icon"><i data-lucide="calendar"></i></span>
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="copy"></i></span>
                            <span class="menu-text"> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuExpages">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-starter'>
                                        <span class="menu-text">Starter</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-invoice'>
                                        <span class="menu-text">Invoice</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-login'>
                                        <span class="menu-text">Log In</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-register'>
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-recoverpw'>
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-lock-screen'>
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-404'>
                                        <span class="menu-text">Error 404</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/pages-500'>
                                        <span class="menu-text">Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="panel-left"></i></span>
                            <span class="menu-text"> Layouts </span>
                            <span class="badge bg-blue ms-auto">New</span>
                        </a>
                        <div class="collapse" id="menuLayouts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/layout-horizontal'>
                                        <span class="menu-text">Horizontal</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/layout-sidenav-light'>
                                        <span class="menu-text">Sidenav Light</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/layout-topbar-dark'>
                                        <span class="menu-text">Topbar Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title">Components</li>

                    <li class="menu-item">
                        <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="briefcase"></i></span>
                            <span class="menu-text"> UI Elements </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuComponentsui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-alerts'>
                                        <span class="menu-text">Alerts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-buttons'>
                                        <span class="menu-text">Buttons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-cards'>
                                        <span class="menu-text">Cards</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-carousel'>
                                        <span class="menu-text">Carousel</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-dropdowns'>
                                        <span class="menu-text">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-video'>
                                        <span class="menu-text">Embed Video</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-general'>
                                        <span class="menu-text">General UI</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-grid'>
                                        <span class="menu-text">Grid</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-images'>
                                        <span class="menu-text">Images</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-list-group'>
                                        <span class="menu-text">List Group</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-modals'>
                                        <span class="menu-text">Modals</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-offcanvas'>
                                        <span class="menu-text">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-placeholders'>
                                        <span class="menu-text">Placeholders</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-progress'>
                                        <span class="menu-text">Progress</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-spinners'>
                                        <span class="menu-text">Spinners</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-tabs-accordions'>
                                        <span class="menu-text">Tabs & Accordions</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-tooltips-popovers'>
                                        <span class="menu-text">Tooltips & Popovers</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/ui-typography'>
                                        <span class="menu-text">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="layers-3"></i></span>
                            <span class="menu-text"> Components </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuExtendedui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/components-range-slider'>
                                        <span class="menu-text">Range Slider</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/components-sweet-alert'>
                                        <span class="menu-text">Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/components-loading-buttons'>
                                        <span class="menu-text">Loading Buttons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="box"></i></span>
                            <span class="menu-text"> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuIcons">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/icons-boxicons'>
                                        <span class="menu-text">Boxicons Icons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/icons-lucide'>
                                        <span class="menu-text">Lucide Icons</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/icons-mdi'>
                                        <span class="menu-text">Material Design Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuForms" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="book"></i></span>
                            <span class="menu-text"> Forms </span>
                            <span class="badge bg-danger rounded-pill ms-auto">5</span>
                        </a>
                        <div class="collapse" id="menuForms">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/forms-elements'>
                                        <span class="menu-text">General Elements</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/forms-advanced'>
                                        <span class="menu-text">Advanced</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/forms-validation'>
                                        <span class="menu-text">Validation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/forms-quilljs'>
                                        <span class="menu-text">Editor</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/forms-file-uploads'>
                                        <span class="menu-text">File Uploads</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="list"></i></span>
                            <span class="menu-text"> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTables">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/tables-basic'>
                                        <span class="menu-text">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/tables-datatables'>
                                        <span class="menu-text">Data Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="bar-chart-2"></i></span>
                            <span class="menu-text"> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCharts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/charts-apex'>
                                        <span class="menu-text">Apex Charts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/charts-morris'>
                                        <span class="menu-text">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/charts-chartjs'>
                                        <span class="menu-text">Chartjs Charts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="map"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMaps">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/maps-google'>
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class='menu-link' href='/drezoc/layouts/maps-vector'>
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link waves-effect">
                            <span class="menu-icon"><i data-lucide="share-2"></i></span>
                            <span class="menu-text"> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMultilevel">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#menuMultilevel2" data-bs-toggle="collapse" class="menu-link waves-effect">
                                        <span class="menu-text"> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel2">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                                    <a href="#menuMultilevel3" data-bs-toggle="collapse" class="menu-link waves-effect">
                                        <span class="menu-text">Third Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel3">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="javascript: void(0);" class="menu-link">
                                                    <span class="menu-text">Item 1</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#menuMultilevel4" data-bs-toggle="collapse"
                                                    class="menu-link waves-effect">
                                                    <span class="menu-text">Item 2</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="menuMultilevel4">
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="javascript: void(0);" class="menu-link">
                                                                <span class="menu-text">Item 1</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="javascript: void(0);" class="menu-link">
                                                                <span class="menu-text">Item 2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a class='logo-light' href='/drezoc/layouts/'>
                                <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="20">
                                <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="20">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a class='logo-dark' href='/drezoc/layouts/'>
                                <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="20">
                                <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="20">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu waves-effect waves-dark rounded-circle">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-2">

                        <li class="d-none d-md-inline-block">
                            <a class="nav-link waves-effect waves-dark" href="#" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-magnify font-size-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                <form class="input-group p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary rounded-start-0" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <li class="dropdown d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell font-size-24"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-1" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                        Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our
                                                        next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                        Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and
                                                        awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-link waves-effect waves-dark" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-dark" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    Henry <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-lucide="user" class="font-size-16 me-2"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i data-lucide="settings" class="font-size-16 me-2"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href='/drezoc/layouts/pages-lock-screen'>
                                    <i data-lucide="lock" class="font-size-16 me-2"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a class='dropdown-item notify-item' href='/drezoc/layouts/pages-login'>
                                    <i data-lucide="log-out" class="font-size-16 me-2"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Dashboard</h4>
                            </div>
                            <div class="col-lg-6">
                               <div class="d-none d-lg-block">
                                <ol class="breadcrumb m-0 float-end">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Drezoc</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-uppercase font-size-12 text-muted mb-3">Cost per Unit</h6>
                                            <span class="h3 mb-0"> $85.50 </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge badge-soft-success">+7.5%</span>
                                        </div>
                                    </div> <!-- end row -->

                                    <div id="sparkline1" class="mt-3"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-uppercase font-size-12 text-muted mb-3">Market Revenue</h6>
                                            <span class="h3 mb-0"> $12,548.25 </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge badge-soft-danger">-24.5%</span>
                                        </div>
                                    </div> <!-- end row -->

                                    <div id="sparkline2" class="mt-3"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-uppercase font-size-12 text-muted mb-3">Expenses</h6>
                                            <span class="h3 mb-0"> $8,451.28 </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge badge-soft-success">+3.5%</span>
                                        </div>
                                    </div> <!-- end row -->

                                    <div id="sparkline3" class="mt-3"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="text-uppercase font-size-12 text-muted mb-3">Daily Visits</h6>
                                            <span class="h3 mb-0"> 1,12,584 </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge badge-soft-success">+53.5%</span>
                                        </div>
                                    </div> <!-- end row -->

                                    <div id="sparkline4" class="mt-3"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Time Best Products</h4>
                                    <p class="card-subtitle">From date of 1st Jan 2019 to continue</p>
                                </div>

                                <div class="card-body">
                                    <div id="morris-donut-example" class="morris-chart"></div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-8 col-lg-7">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sales Analytics</h4>
                                    <p class="card-subtitle">From date of 1st Jan 2019 to continue</p>
                                </div>
                                <div class="card-body">
                                    <div id="morris-bar-example" class="morris-chart"></div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Recent Customers</h4>
                                    <p class="card-subtitle">Transaction period from 21 July to 25 Aug</p>
                                </div>
                                <div class="card-ody">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Location</th>
                                                    <th>Create Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user"
                                                            class="me-2 avatar-sm rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Paul J. Friend</a>
                                                    </td>
                                                    <td>
                                                        937-330-1634
                                                    </td>
                                                    <td>
                                                        pauljfrnd@jourrapide.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        07/07/2024
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="table-user"
                                                            class="me-2 avatar-sm rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                    </td>
                                                    <td>
                                                        215-302-3376
                                                    </td>
                                                    <td>
                                                        bryuellen@dayrep.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        09/12/2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="table-user"
                                                            class="me-2 avatar-sm rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Kathryn S.
                                                            Collier</a>
                                                    </td>
                                                    <td>
                                                        828-216-2190
                                                    </td>
                                                    <td>
                                                        collier@jourrapide.com
                                                    </td>
                                                    <td>
                                                        Canada
                                                    </td>
                                                    <td>
                                                        06/30/2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="table-user"
                                                            class="me-2 avatar-sm rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Timothy Kauper</a>
                                                    </td>
                                                    <td>
                                                        (216) 75 612 706
                                                    </td>
                                                    <td>
                                                        thykauper@rhyta.com
                                                    </td>
                                                    <td>
                                                        Denmark
                                                    </td>
                                                    <td>
                                                        09/08/2024
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="table-user"
                                                            class="me-2 avatar-sm rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Zara Raws</a>
                                                    </td>
                                                    <td>
                                                        (02) 75 150 655
                                                    </td>
                                                    <td>
                                                        austin@dayrep.com
                                                    </td>
                                                    <td>
                                                        Germany
                                                    </td>
                                                    <td>
                                                        07/15/2024
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="table-user"
                                                            class="me-2 avatar-sm rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Mike John</a>
                                                    </td>
                                                    <td>
                                                        798-4651-455
                                                    </td>
                                                    <td>
                                                        mikejohn@jourrapide.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        08/07/2024
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Account Transactions</h4>
                                    <p class="card-subtitle">Transaction period from 21 July to 25 Aug</p>
                                </div>

                                <div class="card-bod">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Card Number</th>
                                                    <th>Amount</th>
                                                    <th>Card Type</th>
                                                    <th>User Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">4257 **** ****
                                                            7852</h5>
                                                        <span class="text-muted font-size-12">11 April 2019</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$79.49</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                                class="fab fa-cc-visa"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Helen Warren
                                                        </h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">4265 **** ****
                                                            0025</h5>
                                                        <span class="text-muted font-size-12">28 Jan 2019</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$1254.00</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                                class="fab fa-cc-stripe"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Kayla Lambie
                                                        </h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">5570 **** ****
                                                            8547</h5>
                                                        <span class="text-muted font-size-12">08 Dec 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$784.25</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                                class="fab fa-cc-amazon-pay"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Hugo Lavarack
                                                        </h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">7845 **** ****
                                                            5214</h5>
                                                        <span class="text-muted font-size-12">03 Dec 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$485.24</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                                class="fab fa-cc-visa"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Amber Scurry
                                                        </h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">4257 **** ****
                                                            7852</h5>
                                                        <span class="text-muted font-size-12">12 Nov 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$8964.04</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i
                                                                class="fab fa-cc-visa"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Caitlyn Gibney
                                                        </h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div><script>document.write(new Date().getFullYear())</script> © Drezoc</div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://myrathemes.com/" target="_blank">MyraStudio</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->
<!-- App JS -->
<script src="{{ asset('dashboard-assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/app.js') }}"></script>

<!-- jQuery Sparkline Chart -->
<script src="{{ asset('dashboard-assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- jQuery Knob Chart JS -->
<script src="{{ asset('dashboard-assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- Morris Chart JS -->
<script src="{{ asset('dashboard-assets/libs/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/raphael/raphael.min.js') }}"></script>

<!-- Dashboard Init -->
<script src="{{ asset('dashboard-assets/js/pages/dashboard.js') }}"></script>


</body>

</html>
