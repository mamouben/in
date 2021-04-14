<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IN & out</title>

  <!-- App Icons -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico') }}">

  <!-- morris css -->
  <link rel="stylesheet" href="{{asset('plugins/morris/morris.css') }}">

  <!-- App css -->
  <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
  
  <!-- DataTables -->
  <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Responsive datatable examples -->
  <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        
                        <a href="/" class="logo">
                            <img src="assets/images/logo.png" alt="" height="50"> 
                        </a>

                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">

                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="/" class="text-white"><i class="dripicons-home"></i>Accueil</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#" class="text-white"><i class="dripicons-product"></i>Produits <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/produits">Liste des Produits</a></li>
                                            <li><a href="/categorie">Famille Produits</a></li>
                                            <li><a href="/fournisseur">Fournisseur</a></li>
                                            <li><a href="/conteneurs">Conteneurs</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu" >
                                <a href="/employer" class="text-white"><i class="dripicons-home"></i>Employers</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#" class="text-white"><i class="dripicons-product"></i>Clients <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/clients">Clients particuliers</a></li>
                                            <li><a href="/clientpro">Clients professionnels</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu" >
                                <a href="/pointdevente" class="text-white"><i class="dripicons-home"></i>Points de vente</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#" class="text-white"><i class="dripicons-file"></i>Documents <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="#">Facture</a></li>
                                            <li><a href="#">Proforma</a></li>
                                            <li><a href="#">Bon de livraison</a></li>
                                            <li><a href="#">Bon de transfert</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <ul class="list-inline ml-auto mb-0">
                            

                            
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                    <span class="d-none d-md-inline-block ml-1">Mamou <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->
    
    @yield('content')
    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © 2012 Agro Jalil <span class="d-none d-md-inline-block"> - Crafted with by HELLOWEB.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</body>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('assets/js/myjs.js') }}"></script>

<!--Morris Chart-->
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>


<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
