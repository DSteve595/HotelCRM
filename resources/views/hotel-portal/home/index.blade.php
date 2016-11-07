@extends('hotel-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <h3 class="page-header">
                Dashboard <small>Todays activity</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    <!-- Dashboard: Stats -->
    <div class="row">
        <div class="col-xs-12 col-sm-3">

            <div class="dashboard-stats__item bg-orange">
                <i class="fa fa-comments"></i>
                <h3 class="dashboard-stats__title">
                    <span class="count-to" data-from="0" data-to="1250">0</span>
                    <small>Reservations</small>
                </h3>
            </div>

        </div>
        <div class="col-xs-12 col-sm-3">

            <div class="dashboard-stats__item bg-pink">
                <i class="fa fa-globe"></i>
                <h3 class="dashboard-stats__title">
                    <span class="count-to" data-from="0" data-to="5411">0</span>
                    <small>Check-ins</small>
                </h3>
            </div>

        </div>
        <div class="col-xs-12 col-sm-3">

            <div class="dashboard-stats__item bg-accent">
                <i class="fa fa-pie-chart"></i>
                <h3 class="dashboard-stats__title">
                    <span class="count-to" data-from="0" data-to="4151">0</span>
                    <small>Orders</small>
                </h3>
            </div>

        </div>
        <div class="col-xs-12 col-sm-3">

            <div class="dashboard-stats__item bg-teal">
                <i class="fa fa-eur"></i>
                <h3 class="dashboard-stats__title">
                    $<span class="count-to" data-from="0" data-to="105">0</span>K
                    <small>Total profit</small>
                </h3>
            </div>

        </div>
    </div> <!-- / .row -->

    @include('hotel-portal.home.dashboard.reservations-today-table')

    <div class="row">

        <!-- Dashboard: Visitors -->
        <div class="col-xs-12 col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Unique visitors <small>last week</small>
                    </h4>
                </div>
                <div class="panel-body">
                    <canvas class="chart chart_visitors"></canvas>
                </div>
            </div>

        </div>

        <!-- Dashboard: Revenue -->
        <div class="col-xs-12 col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Revenue <small>last 6 months</small>
                    </h4>
                </div>
                <div class="panel-body">
                    <canvas class="chart chart_revenue"></canvas>
                </div>
            </div>

        </div>
    </div> <!-- / .row -->

    <div class="row">

        <!-- Dashboard: Comments -->
        <div class="col-xs-12 col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Latest comments
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="dashboard__comments">
                        <div class="dashboard-comments__item">
                            <div class="dashboard-comments__controls">
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            </div>
                            <div class="dashboard-comments__avatar">
                                <img src="hotel-assets/img/user_1.jpg" alt="...">
                            </div>
                            <div class="dashboard-comments__body">
                                <h5 class="dashboard-comments__sender">
                                    John Doe <small>2 hours ago</small>
                                </h5>
                                <div class="dashboard-comments__content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-comments__item">
                            <div class="dashboard-comments__controls">
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            </div>
                            <div class="dashboard-comments__avatar">
                                <img src="hotel-assets/img/user_2.jpg" alt="...">
                            </div>
                            <div class="dashboard-comments__body">
                                <h5 class="dashboard-comments__sender">
                                    Jane Roe <small>5 hours ago</small>
                                </h5>
                                <div class="dashboard-comments__content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-comments__item">
                            <div class="dashboard-comments__controls">
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            </div>
                            <div class="dashboard-comments__avatar">
                                <img src="hotel-assets/img/user_3.jpg" alt="...">
                            </div>
                            <div class="dashboard-comments__body">
                                <h5 class="dashboard-comments__sender">
                                    Richard Roe <small>1 day ago</small>
                                </h5>
                                <div class="dashboard-comments__content">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Dashboard: Feed -->
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        Daily Feed
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="dashboard__feed">
                        <div class="dashboard-feed__item">
                    <span class="label label-success">
                      <i class="fa fa-user"></i>
                    </span>
                            New user registered
                            <small>3 mins ago</small>
                        </div>
                        <div class="dashboard-feed__item">
                    <span class="label label-danger">
                      <i class="fa fa-bolt"></i>
                    </span>
                            Server overloaded
                            <small>2 hours ago</small>
                        </div>
                        <div class="dashboard-feed__item">
                    <span class="label label-warning">
                      <i class="fa fa-bell-o"></i>
                    </span>
                            Server not responding
                            <small>3 hours ago</small>
                        </div>
                        <div class="dashboard-feed__item">
                    <span class="label label-success">
                      <i class="fa fa-user"></i>
                    </span>
                            New user registered
                            <small>5 hours ago</small>
                        </div>
                        <div class="dashboard-feed__item">
                    <span class="label label-danger">
                      <i class="fa fa-bolt"></i>
                    </span>
                            Database error
                            <small>12 days ago</small>
                        </div>
                        <div class="dashboard-feed__item">
                    <span class="label label-danger">
                      <i class="fa fa-bolt"></i>
                    </span>
                            Database error
                            <small>12 days ago</small>
                        </div>
                        <div class="dashboard-feed__item">
                    <span class="label label-warning">
                      <i class="fa fa-bell-o"></i>
                    </span>
                            Server not responding
                            <small>3 hours ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- / .row -->
@endsection