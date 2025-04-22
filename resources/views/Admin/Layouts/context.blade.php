<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>villaoz | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard-assets/images/dash-fav.jpg') }}">

    <!-- plugin css -->
    <link href="{{ asset('dashboard-assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard-assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('dashboard-assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('dashboard-assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <h1 style="color: #1E90FF; font-weight: bold; text-shadow: 2px 2px 4px #FFFFFF;">villaoz
                            </h1>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('dashboard-assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <h1 style="color: #FFFFFF; font-weight: bold; text-shadow: 2px 2px 4px #1E90FF;">villaoz
                            </h1>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <div class="d-flex">
                <!-- User Profile Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="{{ asset('dashboard-assets/images/users/images.png') }}" alt="User Avatar"
                            class="rounded-circle header-profile-user">
                        <span class="d-none d-xl-inline-block ms-1">
                            {{ ucfirst(explode('@', Auth::user()->email)[0]) }}
                        </span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <h2 style="color: #1E90FF; font-weight: bold; text-shadow: 1px 1px 2px #FFFFFF;">villaoz</h2>
                </span>
                <span class="logo-lg">
                    <h1 style="color: #1E90FF; font-weight: bold; text-shadow: 2px 2px 4px #FFFFFF;">villaoz</h1>
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <h1 style="color: #FFFFFF; font-weight: bold; text-shadow: 2px 2px 4px #1E90FF;">villaoz</h1>
                </span>
                <span class="logo-sm">
                    <h2 style="color: #FFFFFF; font-weight: bold; text-shadow: 1px 1px 2px #1E90FF;">villaoz</h2>
                </span>
            </a>
        </div>

        <div data-simplebar class="sidebar-menu-scroll">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-villa">Villa Management</li>

                    <li>
                        <a href="{{ route('country-info') }}">
                            <i class="icon nav-icon" data-feather="globe"></i>
                            <span class="menu-item">country-info</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('villas.create') }}">
                            <i class="icon nav-icon" data-feather="info"></i>
                            <span class="menu-item">Villa Info</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('villa-info.create') }}">
                            <i class="icon nav-icon" data-feather="home"></i>
                            <span class="menu-item">Villa Details</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('villa-bookings') }}">
                            <i class="icon nav-icon" data-feather="calendar"></i>
                            <span class="menu-item">Show Bookings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('content');

    @include('Admin.Footer.dashboard-footer')
    <!-- end main content-->



    <!-- Right bar overlay-->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboard-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('dashboard-assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('dashboard-assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <script src="{{ asset('dashboard-assets/js/pages/dashboard-sales.init.js') }}"></script>

    <script src="{{ asset('dashboard-assets/js/app.js') }}"></script>


</html>
<link rel="shortcut icon" href="{{ asset('dashboard-assets/images/dash-fav.jpg') }}">
<link href="{{ asset('dashboard-assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard-assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('dashboard-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dashboard-assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

{{-- // 3. Update all JavaScript files paths --}}
<script src="{{ asset('dashboard-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/metismenujs/metismenujs.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('dashboard-assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/pages/dashboard-sales.init.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/app.js') }}"></script>
</body>

</html>
