<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zoter - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

    <!-- jvectormap -->
    <link href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/fullcalendar/vanillaCalendar.css')}}" rel="stylesheet" type="text/css"  />

    <link href="{{URL::asset('assets/plugins/morris/morris.css" rel="stylesheet')}}">

    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
                    <a href="index.html" class="logo">
                        <img src="{{URL::asset('images/logo-lg.png')}};" alt="" class="logo-large">
                    </a>
                </div>
            </div>

            <div class="sidebar-inner niceScrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <a href="#" class="waves-effect">
                            <li class="menu-title">

                                <i class="dripicons-device-mobile mr-2 font-size-i"></i>
                                <span> Device Dashboard</span>

                            </li>
                        </a>

                        <li class="has_sub">

                            <ul class="list-unstyled">
                                <li><a href="#">Add New Device</a></li>
                                <li><a href="{{route('all_devices')}}">View all Device Detail</a></li>
                                <li><a href="#">Add Lot ID</a></li>

                            </ul>
                        </li>

                        <li class="menu-title"><i class="mdi mdi-sim mr-2 font-size-i"></i><span> E-SIM Dashboard</span></li>
                        <li class="has_sub">
                            <ul class="list-unstyled">
                                <li><a href="#">Add New E-SIM</a></li>
                                <li><a href="{{route('all_esim')}}">View all E-SIM Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><i class="mdi mdi-sim mr-2 font-size-i"></i><span> E-SIM Dashboard</span></li>
                        <li class="has_sub">

                            <ul class="list-unstyled">
                                <li><a href="#">View Data Plan</a></li>
                                <li><a href="#">View all Migration Requests</a></li>
                                <li><a href="#">View all Activation Requests</a></li>
                                <li><a href="#">View all Bar Requests</a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><i class="mdi mdi-sim mr-2 font-size-i"></i><span>Client Dashboard</span></li>
                        <li class="has_sub">
                            <ul class="list-unstyled">
                                <li><a href="">Add New Client</a></li>
                                <li><a href="{{route('all_client')}}">View all Client</a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><i class="mdi mdi-sim mr-2 font-size-i"></i><span> Owner Dashboard</span></li>
                        <li class="has_sub">
                            <ul class="list-unstyled">
                                <li><a href="#">Add New Owner</a></li>
                                <li><a href="">View all Owner</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <!-- language-->

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>

                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
            <!-- Top Bar End -->
            @yield('page-content-warraper')


        </div> <!-- content -->

        <footer class="footer">
            © 2019 Zoter by Mannatthemes.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{URL::asset('assets/js/detect.js')}}"></script>
<script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{URL::asset('assets/js/waves.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>

<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<script src="{{URL::asset('assets/plugins/skycons/skycons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fullcalendar/vanillaCalendar.js')}}"></script>

<script src="{{URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/morris/morris.min.js')}}"></script>

<script src="{{URL::asset('assets/pages/dashborad.js')}}"></script>

<!-- App js -->
<script src="{{URL::asset('assets/js/app.js')}}"></script>

</body>
</html>
