<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Índico Seguros Usres | Admin Dashboard</title>


        <!-- App favicon -->
        <link rel="../shortcut icon" href="assets/images/favicon.ico">

        <!-- Datatable css -->
        <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />

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
                                <span> Accounts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAccounts">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ __(route('view.users')) }}">All Users</a>
                                    </li>
                                    <li>
                                        <a href="{{ __(route('view.user-add')) }}">Create User</a>
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
                                        <a href="{{ __(route('view.noticias'))}}">All Newsletter</a>
                                    </li>
                                    <li>
                                        <a href="{{ __(route('view.noticias-add'))}}">Create Newsletter</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
    
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarArticles" aria-expanded="false"
                                aria-controls="sidebarArticles" class="side-nav-link">
                                <i class="ri-file-paper-2-line"></i>
                                <span> Articles </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarArticles">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ __(route('view.artigo'))}}">All Articles</a>
                                    </li>
                                    <li>
                                        <a href="{{ __(route('view.artigos-add'))}}">Create Articles</a>
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
                                            <li class="breadcrumb-item active">Users</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Users</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                                <a href="{{ __(route('view.user-add')) }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Users</a>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="text-sm-end">
                                                    <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>User</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Status</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                                        </td>
                                                        <td>
                                                            937-330-1634
                                                        </td>
                                                        <td>
                                                            pauljfrnd@jourrapide.com
                                                        </td>
                                                        <td>
                                                            Admin
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success-lighten">Active</span>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                                <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td class="table-user">
                                                            <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Bryan J. Luellen</a>
                                                        </td>
                                                        <td>
                                                            215-302-3376
                                                        </td>
                                                        <td>
                                                            bryuellen@dayrep.com
                                                        </td>
                                                        <td>
                                                            Admin
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success-lighten">Active</span>
                                                        </td>
                    
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
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

        <!-- Datatable js -->
        <script src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="../assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="../assets/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>

        <!-- Customers Demo App js -->
        <script src="../assets/js/pages/demo.customers.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

    </body>

</html>
