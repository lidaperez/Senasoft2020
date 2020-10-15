<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Admin LTE 3-->
    <link href="{{ asset('adminlte/css/adminlte.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="{{ asset('font-awesome/css/all.css') }}" rel="stylesheet" >

    <!-- Estilos locales -->
    <link href="{{ asset('css/styles_home_auth.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/home_auth.js') }}"></script>

     <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">



    <title>EasyBuy</title>
    <link rel="shortcut icon" href="#">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light elevation-1">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" id="iconos-sidenav"></i></a>
                </li>
                <!--
                <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
                </li>
                -->
            </ul>

            <!-- SEARCH FORM

            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </form>
            -->
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="far fa-bell"></i>
                      <span class="badge badge-warning navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                      <span class="dropdown-header"> Notificaciones</span>
                      <div class="dropdown-divider"></div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
                </li>

                <!-- Item informacion de usuario -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::User()->nombres}}</span>
                        <i class="fas fa-user-circle fa-lg" id="icono-a"></i>
                    </a>
                    <!-- Desplegable informacion de usuario -->

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <!-- Tendra perfil?
                            <a class="dropdown-item" href="{{Auth::User()->id}}" id="items-usuario">
                                <i class="fas fa-user fa-lg fa-fw mr-2 text-gray-400"></i>Perfil
                            </a>
                            <div class="dropdown-divider">
                            </div>
                        -->

                        <div class="">
                            <a class="dropdown-item" id="items-usuario" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-gray-400"></i>
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-blue elevation-2">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{asset('img/logo.png')}}" class="brand-image img-circle elevation-2">
                <span class="brand-text"  id="text-sidenav"> EasyBuy</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent " data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

                        <!-- Factura -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-file-invoice-dollar"></i>
                                <p>
                                    Factura
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('factura.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Registrar Factura
                                        </p>
                                    </a>

                                    <a href="{{route('factura.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Gestionar Facturas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Empresas -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-building"></i>
                                <p>
                                    Empresa
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('empresa.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Registrar Empresa
                                        </p>
                                    </a>

                                    <a href="{{route('empresa.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Gestionar Empresas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Bodega -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-box-open"></i>
                                <p>
                                    Bodegas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('bodega.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Registrar Bodega
                                        </p>
                                    </a>

                                    <a href="{{route('bodega.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Gestionar Bodegas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Personas -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Personas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('persona.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Registrar Persona
                                        </p>
                                    </a>

                                    <a href="{{route('persona.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Gestionar Personas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Proveedores -->
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="nav-icon fa fa-user-tie"></i>
                                <p>
                                    Proveedores
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('proveedor.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Registrar Proveedor
                                        </p>
                                    </a>

                                    <a href="{{route('proveedor.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Gestionar Proveedores
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @include('sweetalert::alert')
                    <br>
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer footer-auth">
            <!-- To the right -->

            <div class="row">
                <div class="col-12 copyright text-center my-auto">
                    <span>Multitiendas|Crr4#7n-13</span>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6 iconos my-auto">
                    <a href="#" target="_blank"><i class="fab fa-facebook-square iconos"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter-square iconos"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram iconos"></i></a>
                </div>
                <div class="col-6 copyright_two float-right">
                    <span>Copyright©2020</span>
                </div>
            </div>
        </footer>
    </div>

    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/js/adminlte.js')}}"></script>

    <!-- Select2 -->
    <script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>

    <script>
         $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
         }
    </script>

</body>

</html>
