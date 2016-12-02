<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('hotel-assets/ico/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HotelCRM - Home</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('hotel-assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('hotel-assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}">

    <!-- CSS Global -->
    <link href="{{ asset('hotel-assets/css/styles.css') }}" rel="stylesheet">

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
            <img src="{{ asset('hotel-assets/img/close.svg') }}" alt="Close sidebar">
        </div>

        <!-- Sidebar user -->
        <div class="sidebar__user">
            <!-- Sidebar user info -->
            <div class="sidebar-user__info">
                <h4>Welcome, {{ auth()->user()->name }}</h4><br />
                <h4>Today is {{ date('l m/d/Y') }}</h4>
            </div>
        </div>

        <!-- Sidebar nav -->
        @include('hotel-portal.home.nav')

    </div>

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="container-fluid">
    @include('hotel-portal.home.modals.view-reservation-modal')
    <!-- Navbar -->
        <div class="row">
            <div class="col-xs-12">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbar_main">

                            <a href="#" class="btn btn-default navbar-btn navbar-left" id="sidebar__toggle">
                                <i class="fa fa-bars"></i>
                            </a>

                            <form action="{{ url('home/view-reservation') }}" class="navbar-form navbar-left hidden-xs" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="searchInput" placeholder="Lookup reservation">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <a href="{{ @url('/logout') }}" class="btn btn-primary navbar-btn navbar-right">
                                Sign Out
                            </a>

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
<script src="{{ asset('hotel-assets/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- JS Plugins -->
<script src="{{ asset('hotel-assets/plugins/count-to/jquery.countTo.js') }}"></script>
<script src="{{ asset('hotel-assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('hotel-assets/js/custom.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        var activeReservationId = 0;
        var reservationRows = $(".reservation-rows");
        var viewReservationModal = $("#viewReservationModal");

        // Modal table span elements
        var viewReservationModalName = $("#viewReservationModalName");
        var viewReservationModalPhoneNumber = $("#viewReservationModalPhoneNumber");
        var viewReservationModalNights = $("#viewReservationModalNights");
        var viewReservationModalGuests = $("#viewReservationModalGuests");
        var viewReservationModalStatus = $("#viewReservationModalStatus");

        var modalCheckInBtn = $("#modalCheckInBtn");
        var modalCheckOutBtn = $("#modalCheckOutBtn");

        modalCheckInBtn.click(function() {
            console.log(activeReservationId);
            $.post('{{ @url('hotel-post/check-in') }}', { id: activeReservationId, status: 1 })
                    .done(function(data) {
                        location.href = '{{ @url('home') }}';
                    });
        });

        modalCheckOutBtn.click(function() {
            console.log(activeReservationId);
            $.post('{{ @url('hotel-post/check-in') }}', { id: activeReservationId, status: 0 })
                    .done(function(data) {
                        location.href = '{{ @url('home') }}';
                    });
        });

        viewReservationModal.on('hidden.bs.modal', function() {

            viewReservationModalName.val('');
            viewReservationModalPhoneNumber.val('');
            viewReservationModalNights.val('');
            viewReservationModalGuests.val('');
            viewReservationModalStatus.val('');
            activeReservationId = 0;
        });

        reservationRows.click(function() {

            activeReservationId = $(this).attr('id');
            // post the form
            $.post('{{ @url('hotel-post/get-reservation') }}', { id: $(this).attr('id') })
                    .done(function(data) {

                        // populate spans
                        viewReservationModalName.text(data.name);
                        viewReservationModalPhoneNumber.text(data.phone_number);
                        viewReservationModalNights.text(data.nights);
                        viewReservationModalGuests.text(data.guests);
                        viewReservationModalStatus.text(data.status);

                        // show modal
                        viewReservationModal.modal('show');
                    });
        });
    });
</script>
@yield('more-js')
</body>
</html>