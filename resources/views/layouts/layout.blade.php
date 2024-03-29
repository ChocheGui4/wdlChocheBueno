<!DOCTYPE html>
<!-- This is a starter template page. Use this page to start your new project
from scratch. This page gets rid of all links and provides the needed markup
only. -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Font Awesome Iconss -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        <link
            rel="stylesheet"
            href="{{ asset('assets/plugins/fontawesome-free/css/personal.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
            rel="stylesheet">

    </head>
    <body >

        <div class="content">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>

                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input
                            class="form-control form-control-navbar"
                            type="search"
                            placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-danger navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i>
                                4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i>
                                8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i>
                                3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                            <i class="fas fa-user-cog"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img
                        src="{{ asset('assets/dist/img/AdminLTELogo.png') }}"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">WDlicenses</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img
                                src="{{ asset('assets/dist/img/user2-160x160.jpg') }}"
                                class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" id="hi" name="hi" class="d-block">Alexander Pierce</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any
                            other icon font library -->
                            <li class="nav-item">
                                <a class="nav-link" href="/home">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Principal

                                    </p>
                                </a>

                            </li>
                            <li class="nav-item has-treeview">
                                <a href="/user" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Users

                                    </p>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/companies">
                                    <i class="nav-icon fas fa-building"></i>
                                    <p>
                                        Companies

                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/customers">
                                    <i class="nav-icon fas fa-building"></i>
                                    <p>
                                        Customers

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Generate Reports
                                        
                                        
                                    </p>
                                </a>
                                
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="/wluser" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        WL Users

                                    </p>
                                </a>
                            </li>
                            

                            

                            <li class="nav-item">

                                <a
                                    href="{{ route('logout') }}"
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Sign out</p>

                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            @yield('content')
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="container-fluid">
                    <div class="row mb-6">
                        <div class="col-sm-6">
                            <br>
                            <img
                                src="{{ asset('assets/dist/img/HillsongThisisliving.jpg') }}"
                                class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <br>
                            <a href="">
                                <!---->
                                {{ Auth::user()->role }}
                            </a>
                            <!---->
                            <br>
                            {{ Auth::user()->email }}
                            <br>
                            <a href="">
                                Sign out
                            </a>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row mb-2"></div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

            </aside>
            <!-- /.control-sidebar -->
            <!-- Main Footer -->
            <footer class="main-footer" background-color="red">
                <strong>Copyright &copy; 2014-2019 All rights reserved.
                
            </footer>
        </div>

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->

        <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
        
        @yield('scripts')
        <script src="{{ asset('assets/use2.js') }}"></script>
        <script src="{{ asset('assets/edituser.js') }}"></script>
        
    </body>
</html>