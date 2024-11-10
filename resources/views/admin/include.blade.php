@php
    $string = Route::current()->getName();
    $words = preg_replace('/(?<!\ )[A-Z]/', ' $0', $string);
@endphp

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>Health Manager || @yield('adminTitle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Health Manager BD" name="description" />
    <meta content="Virtual IT Professional" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/velzon/html/default/') }}/assets/images/favicon-cpi.png">

    <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
 
    <!-- Layout config Js -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('public/admin/velzon/html/default/') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <style>
        .table > tbody > tr > td {
            vertical-align: middle;
        }
    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ url('/') }}" class="logo logo-dark" target="_blank">
                        <span class="logo-sm">
                            <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo-light.png" class="p-2" alt="" height="80">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo.png" class="p-2" alt="" height="80">
                        </span>
                    </a>

                    <a href="{{ url('/') }}" class="logo logo-light" target="_blank">
                        <span class="logo-sm">
                            <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo-light.png" class="p-2" alt="" height="80">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo-light.png" class="p-2" alt="" height="80">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Anna!</h6>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Verify Fund : <b>$5971.67</b></span></a>
                        <a class="dropdown-item" href="pages-profile-settings.html"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ url('/') }}" class="logo logo-dark" target="_blank">
                    <span class="logo-sm">
                        <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo-light.png" class="p-2" alt="" height="80">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo.png" class="p-2" alt="" height="80">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ url('/') }}" class="logo logo-light" target="_blank">
                    <span class="logo-sm">
                        <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo-light.png" class="p-2" alt="" height="80">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('public/admin/velzon/html/default/') }}/assets/images/adminLogo-light.png" class="p-2" alt="" height="80">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @if(Route::is('adminHome')) active @endif" href="{{ route('adminHome') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-apps">Dashboard</span>
                            </a>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#generalUser" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="generalUser">
                                <i class="fa-regular fa-users"></i> <span data-key="t-user">User Panel</span>
                            </a>
                            <div class="collapse menu-dropdown" id="generalUser">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('userList') }}" class="nav-link @if(Route::is('userList')) active @endif" data-key="t-users"> User List </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('createGeneralUser') }}" class="nav-link @if(Route::is('createGeneralUser')) active @endif"> <span data-key="t-user-secret">New Profile</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @if(Session::has('superAdmin')):
                        @endif
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#adminPanel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="adminPanel">
                                <i class="fa-duotone fa-solid fa-user-secret"></i> <span data-key="t-apps">Admin Panel</span>
                            </a>
                            <div class="collapse menu-dropdown" id="adminPanel">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('adminList') }}" class="nav-link @if(Route::is('adminList')) active @endif" data-key="t-chat"> Admin List </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('newAdmin') }}" class="nav-link @if(Route::is('newAdmin')) active @endif"> <span data-key="t-file-manager">New Profile</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#cardManager" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="cardManager">
                                <i class="fa-solid fa-badge-dollar"></i> <span data-key="t-apps">Card Manager</span>
                            </a>
                            <div class="collapse menu-dropdown" id="cardManager">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('cardList') }}" class="nav-link @if(Route::is('cardList')) active @endif"> <span data-key="t-file-manager">All Card</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('newCard') }}" class="nav-link @if(Route::is('newCard')) active @endif"> <span data-key="t-file-manager">Add New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('activationCharge') }}" class="nav-link @if(Route::is('activationCharge')) active @endif"> <span data-key="t-file-manager">Activation Charge</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#reportManager" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="reportManager">
                                <i class="fa-duotone fa-solid fa-file-chart-pie"></i> <span data-key="t-apps">Report Manager</span>
                            </a>
                            <div class="collapse menu-dropdown" id="reportManager">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('kycReport') }}" class="nav-link @if(Route::is('kycReport')) active @endif" data-key="t-chat"> KYC Report </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('adminList') }}" class="nav-link @if(Route::is('adminList')) active @endif"> <span data-key="t-file-manager">Admin List</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('userList') }}" class="nav-link @if(Route::is('userList')) active @endif"> <span data-key="t-file-manager">Customer List</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @if(Route::is('myProfile')) active @endif" href="{{ route('myProfile') }}">
                                <i class="fa-solid fa-gears"></i> <span data-key="t-apps">My Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#">
                                <i class="fa-regular fa-left-from-bracket"></i> <span data-key="t-apps">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">{{ ucfirst($words) }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminHome') }}">Dashboards</a></li>
                                        <li class="breadcrumb-item active">{{ ucfirst($words) }}</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                     @yield('adminContent')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © CPI Reunion | All rights reserved.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Virtual IT Professional
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- projects js -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/pages/dashboard-projects.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('public/admin/velzon/html/default/') }}/assets/js/app.js"></script>
</body>

</html>