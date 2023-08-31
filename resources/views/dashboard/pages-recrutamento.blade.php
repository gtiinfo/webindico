<!DOCTYPE html>
<html lang="pt">

<head>
        <meta charset="utf-8" />
        <title>Índico Seguros Newsletter | Admin Dashboard</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

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
                                            <li class="breadcrumb-item active">Recrutamento</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Recrutamento</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @if(session('message'))
                        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                          <strong>{{ session('message') }}</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                                <a href="{{ __(route('view.recrutamento-add'))}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Recrutamento</a>
                                            </div>
                                           
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="all" style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th class="all">Recrutamento</th>
                                                        <th>Title</th>
                                                        <th>Position</th>
                                                        <th>Status</th>
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($recrutamentos as $key => $recrutamento )
                                                        
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('storage/upload/img/'.$recrutamento->image) }}" alt="image" class="img-fluid avatar-sm rounded-circle" >
                                                            <p class="m-0 d-inline-block align-middle font-16">
                                                               
                                                            </p>
                                                        </td>
                                                        <td>
                                                            {{ $recrutamento->title }}
                                                        </td>
                                                        <td>
                                                            {{ $recrutamento->position }}
                                                        </td>
                                                        <td>
                                                            @if ($recrutamento->status == 1)
                                                                <span class="badge bg-success">Activo</span>
                                                             @else
                                                                <span class="badge bg-danger">Desativo</span>
                                                             @endif
                                                        </td>
                    
                                                        <td class="table-action">
                                                            <a href="/indico/recrutamento" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="/admin/recrutamento/edit/{{$recrutamento->id}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"  data-bs-toggle="modal" data-bs-target="#danger-alert-modal"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content modal-filled bg-danger">
                                                                <div class="modal-body p-4">
                                                                    <div class="text-center">
                                                                        <i class="ri-close-circle-line h1"></i>
                                                                        <h4 class="mt-2">Oh Danger!</h4>
                                                                        <p class="mt-3">Se você deseja excluir permanentemente o Recrutamento clica em sim</p>
                                                                        <form action="/admin/recrutamento/{{ $recrutamento->id }}" method="POST">
                                                                            @csrf   
                                                                             @method('DELETE')
                                                                            <button type="submit" class="btn btn-light my-2" data-bs-dismiss="modal">Sim</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                    @endforeach                                                                                                      
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

        <!-- Product Demo App js -->
        <script src="../assets/js/pages/demo.products.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

    </body>

</html>
