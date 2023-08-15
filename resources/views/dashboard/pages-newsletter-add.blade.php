<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <title>Índico Seguros Create Newsletter | Admin Dashboard</title>

    <!-- App favicon -->
    <link rel="../shortcut icon" href="assets/images/favicon.ico">


    <!-- Bootstrap Datepicker css -->
    <link href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Select2 Plugins css -->
    <link href="../assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Newsletter</a></li>
                                        <li class="breadcrumb-item active">Create Newsletter</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Create Newsletter</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                @if($errors->any() || session('message'))
                                <div class="alert alert-@php if($errors->any()) echo 'danger'; else echo 'success'; @endphp alert-dismissible fade show" role="alert">
                                  @if($errors->any())
                                    @foreach ( $errors as $error )
                                        <p>{{ __($error) }}</p>
                                    @endforeach                                       
                                  @else
                                  {{ __(session('message')) }}
                                  @endif
                                <div class="card-body">
                                    <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="position-relative mb-3">
                                                    <label for="newslettername" class="form-label">Title</label>
                                                    <input type="text" id="newslettername" name="newsname"
                                                        class="form-control" placeholder="Enter newsletter name" required>
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-tooltip">
                                                        Please enter Title.
                                                    </div>
                                                </div>

                                                <!-- Date View -->
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                    <label class="form-label"> Date</label>
                                                    <input type="text" class="form-control" name="newsdata"
                                                        data-provide="datepicker" data-date-container="#datepicker1"
                                                        data-date-format="d-M-yyyy" data-date-autoclose="true" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter Date.
                                                        </div>
                                                </div>
                                                <div class="position-relative mb-3">
                                                    <label for="example-fileinput" class="form-label">Image</label>
                                                    <input type="file" id="example-fileinput" class="form-control"
                                                        name="newsimg" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter Image.
                                                        </div>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="position-relative mb-3">
                                                    <label for="example-fileinput" class="form-label">Document
                                                        (.pdf)</label>
                                                    <input type="file" id="example-fileinput" class="form-control"
                                                        name="newsdoc" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter Document.
                                                        </div>
                                                </div>

                                            </div> <!-- end col-->
                                            <div class="mb-3">
                                                <button class="btn btn-danger" type="submit"><i
                                                        class="mdi mdi-account-circle me-2"></i>Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end row -->

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
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
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
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

    <!-- Vendor js -->
    <script src="../assets/js/vendor.min.js"></script>

    <!-- Bootstrap Datepicker Plugin js -->
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Select2 js  -->
    <script src="../assets/vendor/select2/js/select2.min.js"></script>

    <!-- Dropzone File Upload js -->
    <script src="../assets/vendor/dropzone/min/dropzone.min.js"></script>

    <!-- init js -->
    <script src="../assets/js/ui/component.fileupload.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js"></script>

</body>

</html>