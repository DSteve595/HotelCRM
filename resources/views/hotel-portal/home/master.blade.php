<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="hotel-assets/ico/favicon.ico">

    <title>Kite: Dashboard</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="hotel-assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="hotel-assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css">

    <!-- CSS Global -->
    <link href="hotel-assets/css/styles.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="wrapper">

    <!-- SIDEBAR
    ================================================== -->
    <div class="sidebar">

        <!-- Close button (mobile devices) -->
        <div class="sidebar__close">
            <img src="hotel-assets/img/close.svg" alt="Close sidebar">
        </div>

        <!-- Sidebar user -->
        <div class="sidebar__user">

            <!-- Sidebar user avatar -->
            <div class="sidebar-user__avatar">
                <img src="hotel-assets/img/user_1.jpg" alt="...">
            </div>

            <!-- Sidebar user info -->
            <a class="sidebar-user__info">
                <h4>Richard Roe</h4>
                <p>Administrator <i class="fa fa-caret-down"></i></p>
            </a>

        </div>

        <!-- Sidebar user nav -->
        <nav class="sidebar-user__nav">
            <ul class="sidebar__nav">
                <li>
                    <a href="profile.html"><i class="fa fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="edit-profile.html"><i class="fa fa-edit"></i> Edit profile</a>
                </li>
                <li>
                    <a href="inbox.html"><i class="fa fa-envelope-o"></i> Inbox</a>
                </li>
                <li>
                    <a href="{{ @url('/logout') }}"><i class="fa fa-sign-out"></i> Sign out</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar nav -->
        <nav>
            <ul class="sidebar__nav">
                <li class="sidebar-nav__heading">Dashboard</li>
                <li>
                    <a href="{{ @url('/home') }}"><i class="fa fa-th-large"></i> Dashboard</a>
                </li>
                <li class="sidebar-nav__heading">Pages</li>
                <li class="sidebar-nav__dropdown">
                    <a href="#"><i class="fa fa-user"></i> Account <i class="fa fa-angle-down"></i></a>
                    <ul class="sidebar-nav__submenu">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="edit-profile.html">Edit profile</a></li>
                        <li><a href="inbox.html">Inbox</a></li>
                        <li><a href="sign-in.html">Sign In</a></li>
                        <li><a href="sign-up.html">Sign Up</a></li>
                    </ul>
                </li>
                <li>
                    <a href="orders.html"><i class="fa fa-shopping-cart"></i> Orders</a>
                </li>
                <li>
                    <a href="faq.html"><i class="fa fa-support"></i> FAQ</a>
                </li>
                <li>
                    <a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a>
                </li>
                <li class="sidebar-nav__heading">UI Elements</li>
                <li>
                    <a href="ui_tables.html"><i class="fa fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="ui_forms.html"><i class="fa fa-check-square-o"></i> Forms</a>
                </li>
                <li>
                    <a href="ui_charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                </li>
                <li class="sidebar-nav__dropdown">
                    <a href="#"><i class="fa fa-gift"></i> Other <i class="fa fa-angle-down"></i></a>
                    <ul class="sidebar-nav__submenu">
                        <li><a href="ui_alerts.html">Alerts</a></li>
                        <li><a href="ui_buttons.html">Buttons</a></li>
                        <li><a href="ui_pagination.html">Pagination</a></li>
                        <li><a href="ui_panels.html">Panels</a></li>
                        <li><a href="ui_progress-bars.html">Progress Bars</a></li>
                        <li><a href="ui_tabs.html">Tabs</a></li>
                        <li><a href="ui_typography.html">Typography</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="container-fluid">

        <!-- Navbar -->
        <div class="row">
            <div class="col-xs-12">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbar_main">

                            <a href="#" class="btn btn-default navbar-btn navbar-left" id="sidebar__toggle">
                                <i class="fa fa-bars"></i>
                            </a>

                            <form class="navbar-form navbar-left hidden-xs" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <a href="{{ @url('/logout') }}" class="btn btn-primary navbar-btn navbar-right">
                                Sign Out
                            </a>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="navbar-notification"></span>
                                        <span class="hidden-xs">Messages</span> <i class="fa fa-envelope visible-xs-inline-block"></i>
                                    </a>
                                    <div class="dropdown-menu navbar-messages">
                                        <a href="#" class="navbar-messages__item">
                                            <div class="navbar-messages__avatar">
                                                <img src="hotel-assets/img/user_2.jpg" alt="...">
                                            </div>
                                            <div class="navbar-messages__body">
                                                <h5 class="navbar-messages__sender">
                                                    Jane Roe <small>2 hours ago</small>
                                                </h5>
                                                <p class="navbar-messages__content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit...
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" class="navbar-messages__item">
                                            <div class="navbar-messages__avatar">
                                                <img src="hotel-assets/img/user_3.jpg" alt="...">
                                            </div>
                                            <div class="navbar-messages__body">
                                                <h5 class="navbar-messages__sender">
                                                    John Doe <small>1 day ago</small>
                                                </h5>
                                                <p class="navbar-messages__content">
                                                    Reprehenderit consequatur minima non nostrum aliquid, excepturi...
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" class="navbar-messages__item">
                                            <div class="navbar-messages__avatar">
                                                <img src="hotel-assets/img/user_4.jpg" alt="...">
                                            </div>
                                            <div class="navbar-messages__body">
                                                <h5 class="navbar-messages__sender">
                                                    Mary Major <small>1 day ago</small>
                                                </h5>
                                                <p class="navbar-messages__content">
                                                    Ipsa quaerat labore blanditiis consequuntur, rerum minima, aut...
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" class="navbar-messages__view-all">
                                            View All
                                        </a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="navbar-notification hidden"></span>
                                        <span class="hidden-xs">Alerts</span> <i class="fa fa-bell visible-xs-inline-block"></i>
                                    </a>
                                    <div class="dropdown-menu navbar-alerts">
                                        <a href="#" class="navbar-alerts__item">
                          <span class="label label-success">
                            <i class="fa fa-user"></i>
                        </span>
                                            New user registered
                                            <small>3 mins ago</small>
                                        </a>
                                        <a href="#" class="navbar-alerts__item">
                          <span class="label label-danger">
                            <i class="fa fa-bolt"></i>
                          </span>
                                            Server overloaded
                                            <small>2 hours ago</small>
                                        </a>
                                        <a href="#" class="navbar-alerts__item">
                          <span class="label label-warning">
                            <i class="fa fa-bell-o"></i>
                          </span>
                                            Server not responding
                                            <small>3 hours ago</small>
                                        </a>
                                        <a href="#" class="navbar-alerts__item">
                          <span class="label label-success">
                            <i class="fa fa-user"></i>
                          </span>
                                            New user registered
                                            <small>5 hours ago</small>
                                        </a>
                                        <a href="#" class="navbar-alerts__item">
                          <span class="label label-danger">
                            <i class="fa fa-bolt"></i>
                          </span>
                                            Database error
                                            <small>12 days ago</small>
                                        </a>
                                        <a href="#" class="navbar-alerts__view-all">
                                            View All
                                        </a>
                                    </div>
                                </li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div>
        </div> <!-- / .row -->

        @yield('content')

        <!-- Footer -->
        <footer class="footer">
            <div class="row">
                <div class="col-xs-12">

                    &copy; Company 2016. All rights reserved.
                    <a href="#">Terms of Service</a> |
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

    </div> <!-- / .container-fluid -->

</div> <!-- / .wrapper -->


<!-- JavaScript
================================================== -->

<!-- JS Global -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="hotel-assets/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Plugins -->
<script src="hotel-assets/plugins/chart-js/Chart.min.js"></script>
<script src="hotel-assets/plugins/count-to/jquery.countTo.js"></script>
<script src="hotel-assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

<!-- JS Custom -->
<script src="hotel-assets/js/custom.js"></script>

</body>
</html>