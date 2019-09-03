<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../assets/images/favicon.png">
        <title>@yield('title' ,'WDLicenciamiento')</title>
        <link
            href="{{ asset('bundle/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
            rel="stylesheet">
        
        <link
            href="{{ asset('bundle/assets/plugins/chartist-js/dist/chartist.min.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/chartist-js/dist/chartist-init.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/css-chart/css-chart.css') }}"
            rel="stylesheet">
        <link
            href="{{ asset('bundle/assets/plugins/toast-master/css/jquery.toast.css') }}"
            rel="stylesheet">
        <link href="{{ asset('bundle/css/style.css') }}" rel="stylesheet">
        <link
            href="{{ asset('bundle/css/colors/purple-dark.css') }}"
            id="theme"
            rel="stylesheet">
        @yield('file_css')
    </head>
    <!---->
    <body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <svg class="circular" viewbox="25 25 50 50">
                <circle
                    class="path"
                    cx="50"
                    cy="50"
                    r="20"
                    fill="none"
                    stroke-width="2"
                    stroke-miterlimit="10"/>
            </svg>
        </div>
        <div id="main-wrapper">
            <header class="topbar" >
                <nav class="navbar top-navbar navbar-toggleable-sm navbar-light" >
                
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <b>
                                <img
                                    src="{{ asset('bundle/assets/images/logo-light-icon.png') }}"
                                    alt="homepage"
                                    class="light-logo"/>
                            </b>
                            <span>
                                <img
                                    src="{{ asset('bundle/assets/images/logo-light-text.png') }}"
                                    alt="homepage"
                                    class="light-logo"/>
                            </span>
                        </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto mt-md-0 ">
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                    href="javascript:void(0)">
                                    <i class="ti-menu"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                            
                                <a
                                    class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                    href="javascript:void(0)">
                                    <i class="icon-arrow-left-circle"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark"
                                    href=""
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-message"></i>
                                    <div class="notify">
                                        <span class="heartbit"></span>
                                        <span class="point"></span></div>
                                </a>
                                <div class="dropdown-menu mailbox animated bounceInDown">
                                    <ul>
                                        <li>
                                            <div class="drop-title">Notifications</div>
                                        </li>
                                        <li>
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="btn btn-danger btn-circle">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="btn btn-success btn-circle">
                                                        <i class="ti-calendar"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Event today</h5>
                                                        <span class="mail-desc">Just a reminder that you have event</span>
                                                        <span class="time">9:10 AM</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="btn btn-info btn-circle">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Settings</h5>
                                                        <span class="mail-desc">You can customize this template as you want</span>
                                                        <span class="time">9:08 AM</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="btn btn-primary btn-circle">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h5>Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                        <span class="time">9:02 AM</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center" href="javascript:void(0);">
                                                <strong>Check all notifications</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="left-sidebar">
                <div class="scroll-sidebar">
                    <div class="user-profile">
                        <div class="profile-img">
                            <img src="{{ asset('bundle/assets/images/users/1.jpg') }}" alt="user"/>
                        </div>
                        <div class="profile-text">
                            <a
                                href="#"
                                class="dropdown-toggle link u-dropdown"
                                data-toggle="dropdown"
                                role="button"
                                aria-haspopup="true"
                                aria-expanded="true">{{ Auth::user()->name }}
                                <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <a href="#" class="dropdown-item">
                                    <i class="ti-user"></i>
                                    My Profile</a>
                                <a href="#" class="dropdown-item">
                                    <i class="ti-wallet"></i>
                                    My Balance</a>
                                <a href="#" class="dropdown-item">
                                    <i class="ti-email"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ti-settings"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item">
                                    <i class="fa fa-power-off"></i>
                                    Logout</a>
                            </div>
                        </div>
                    </div>
                    <nav class="sidebar-nav ">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap">MAIN</li>

                            <li >
                                <a href="{{ route('Home') }}" >
                                    <i class="mdi mdi-gauge"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            

                            <li class="nav-item">

                                <a href="/companies">
                                    <i class="mdi mdi-domain"></i>
                                    <span class="hide-menu">Companies</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/customers">
                                    <i class="mdi mdi-account-multiple"></i>
                                    <span class="hide-menu">Customers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/products">
                                    <i class="fa fa-product-hunt"></i>
                                    <span class="hide-menu">Productos</span>
                                </a>
                            </li>
                            <li>
                                <a href="/user">
                                    <i class="mdi mdi-account"></i>
                                    <span class="hide-menu">Users</span>
                                </a>

                            </li>
                            <li class="nav-item has-treeview">

                                <a href="/wluser">
                                    <i class="mdi mdi-account-multiple"></i>
                                    <span class="hide-menu">Wl Users</span>
                                </a>

                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#">
                                    <i class="mdi mdi-file-document-box"></i>
                                    <span class="hide-menu">Generate reports</span>
                                </a>

                            </li>
                            

                            <li class="nav-item">

                                <a
                                    href="{{ route('logout') }}"
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout"></i>
                                    <span class="hide-menu">Sign out</span>
                                    

                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </li>
                           
                            <li>
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power"></i>Logout</a>
                            </li>
                            <form
                                id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="page-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <footer class="footer">
                    © 2019 Warriors Labs
                </footer>
            </div>
        </div>
        <script src="{{ asset('bundle/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bundle/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('bundle/js/waves.js') }}"></script>
        <script src="{{ asset('bundle/js/sidebarmenu.js') }}"></script>
        
        <script src="{{ asset('bundle/assets/plugins/wizard/jquery.steps.min.js') }}"></script>

        <script
            src="{{ asset('bundle/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <script src="{{ asset('bundle/js/custom.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
        <script
            src="{{ asset('bundle/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/echarts/echarts-all.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/toast-master/js/jquery.toast.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
        
            
        <script src="{{ asset('bundle/js/dashboard1.js') }}"></script>
        <script src="{{ asset('bundle/js/toastr.js') }}"></script>
        <script src="{{ asset('assets/use2.js') }}"></script>
        <script src="{{ asset('assets/product.js') }}"></script>
        <script src="{{ asset('assets/edituser.js') }}"></script>
        <script src="{{ asset('bundle/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        @yield('file_js')
        
        
    </body>
</html>