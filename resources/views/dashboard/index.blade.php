<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <title>Índico Seguros | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="../shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugin css -->
    <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="../assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="../assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="{{ __(route('view.home'))}}" class="logo-light">
                            <span class="logo-lg">
                                <img src="../assets/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="../assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="../assets/images/logo-dark.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="../assets/images/logo-dark-sm.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Theme Mode">
                            <i class="ri-moon-line font-22"></i>
                        </div>
                    </li>

                    <li class="d-none d-md-inline-block">
                        <a class="nav-link" href="#" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line font-22"></i>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="../assets/images/users/avatar-1.jpg" alt="user-image" width="32"
                                    class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <h5 class="my-0">Dominic Keller</h5>
                                <h6 class="my-0 fw-normal">Founder</h6>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>                  

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="{{ __(route('view.home'))}}" class="logo logo-light">
                <span class="logo-lg">
                    <img src="../assets/images/logo.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="../assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="{{ __(route('view.home'))}}" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="../assets/images/logo-dark.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="../assets/images/logo-dark-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="../assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                            class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name mt-2">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ __(route('view.admim'))}}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Dashboards</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarAccounts" aria-expanded="false"
                            aria-controls="sidebarAccounts" class="side-nav-link">
                            <i class="ri-group-line"></i>
                            <span> Contas </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAccounts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ __(route('view.users')) }}">Usuários</a>
                                </li>
                                <li>
                                    <a href="{{ __(route('view.user-add')) }}">Adicionar Usuário</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarNewsletter" aria-expanded="false"
                            aria-controls="sidebarNewsletter" class="side-nav-link">
                            <i class="ri-book-open-line"></i>
                            <span> Newsletter </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarNewsletter">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ __(route('view.noticias'))}}">Newsletter</a>
                                </li>
                                <li>
                                    <a href="{{ __(route('view.noticias-add'))}}">Adicionar Newsletter</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarArticles" aria-expanded="false"
                            aria-controls="sidebarArticles" class="side-nav-link">
                            <i class="ri-file-paper-2-line"></i>
                            <span> Artigo </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarArticles">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ __(route('view.artigo'))}}">Artigos</a>
                                </li>
                                <li>
                                    <a href="{{ __(route('view.artigos-add'))}}">Adicionar Artigos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarRecrutamento" aria-expanded="false"
                            aria-controls="sidebarRecrutamento" class="side-nav-link">
                            <i class=" ri-hand-heart-line"></i>
                            <span> Recrutamento </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarRecrutamento">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ __(route('view.recrutamentos'))}}">Recrutamentos</a>
                                </li>
                                <li>
                                    <a href="{{ __(route('view.recrutamento-add'))}}">Adicionar Recrutamentos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a href="#" aria-expanded="false" class="side-nav-link">
                            <i class="mdi mdi-logout"></i>
                            <span> Logout </span>
                        </a>
                    </li>
                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card widget-inline">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card rounded-0 shadow-none m-0">
                                                <div class="card-body text-center">
                                                    <i class="ri-group-line text-muted font-24"></i>
                                                    <h3><span>29</span></h3>
                                                    <p class="text-muted font-15 mb-0">Total Contas</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                <div class="card-body text-center">
                                                    <i class="ri-book-open-line text-muted font-24"></i>
                                                    <h3><span>715</span></h3>
                                                    <p class="text-muted font-15 mb-0">Total Newsletter</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                <div class="card-body text-center">
                                                    <i class="ri-file-paper-2-line text-muted font-24"></i>
                                                    <h3><span>31</span></h3>
                                                    <p class="text-muted font-15 mb-0">Total Artigos</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-3">
                                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                <div class="card-body text-center">
                                                    <i class="ri-hand-heart-line text-muted font-24"></i>
                                                    <h3><span>31</span></h3>
                                                    <p class="text-muted font-15 mb-0">Total Recrutamentos</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Project Status</h4>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="mt-3 mb-4 chartjs-chart" style="height: 204px;">
                                        <canvas id="project-status-chart"
                                            data-colors="#00aeef,#727cf5,#fa5c7c"></canvas>
                                    </div>

                                    <div class="row text-center mt-2 py-2">
                                        <div class="col-sm-4">
                                            <div class="my-2 my-sm-0">
                                                <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>64%</span>
                                                </h3>
                                                <p class="text-muted mb-0">Completed</p>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="my-2 my-sm-0">
                                                <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>26%</span>
                                                </h3>
                                                <p class="text-muted mb-0"> In-progress</p>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="my-2 my-sm-0">
                                                <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                                                <h3 class="fw-normal">
                                                    <span>10%</span>
                                                </h3>
                                                <p class="text-muted mb-0"> Behind</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->


                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Índico Seguros
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

    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- Bootstrap Datepicker js -->
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Chart js -->
    <script src="../assets/vendor/chart.js/chart.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="../assets/js/pages/demo.dashboard-projects.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>

</body>

</html>