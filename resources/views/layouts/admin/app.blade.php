<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 09:32:15 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin-assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin-assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ asset('frontend-assets/style/base.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .custom-select-wrapper {
            position: relative;
            display: inline-block;
        }

        .custom-select {
            appearance: none;
            background-color: #f8f9fa;
            border: none;
            padding: 6px 12px;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        .custom-select::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .custom-select option {
            background-color: #fff;
            color: #333;
        }

        .unpaid {
            color: red;
        }

        .paid {
            color: green;
        }
    </style>
</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">

                            </span>
                            <span class="logo-lg">

                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">

                            </span>
                            <span class="logo-lg">

                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->

                </div>

                <div class="d-flex">


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">
                @php
                $currentRoute = Route::currentRouteName();
                @endphp
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="{{ route('admin.index') }}" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.vehicle-types.index') }}" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-dashboards">Vehicle Type</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.wash-packages.index') }}" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-dashboards">Wash Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.services-menu.index') }}" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-dashboards">Services Menu</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.bookings.index') }}" class="waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-dashboards">Bookings</span>
                            </a>
                        </li>


                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">All Shipments</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">


                                <li><a href="create_shipment.html" key="t-preloader">Create Shipments</a></li>
                                <li><a href="view_shipment.html" key="t-colored-topbar">View Shipments</a></li>

                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © YesExpress.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by MianArshan
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin-assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('admin-assets/js/pages/dashboard.init.js') }}"></script>

    <!-- Toastr js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <script>
        function changeOptionColor(selectElement) {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            selectElement.className = selectedOption.value;
        }
    </script>

    @yield('custom-script')

    @if(session('success-toastr'))
    <script>
        toastr.success("{{ session('success-toastr') }}");
    </script>
    @endif

    @if(session('error-toastr'))
    <script>
        toastr.error("{{ session('error-toastr') }}");
    </script>
    @endif
</body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 09:33:01 GMT -->

</html>