@extends('guest-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <h3 class="page-header">
                Dashboard <small>Today's Activity</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    <!-- Dashboard: Stats -->
    <div class="row">

    </div> <!-- / .row -->
    @include('guest-portal.home.dashboard.reservations-today-table')
@endsection

@section('more-js')
    <script type="text/javascript">

    </script>
@endsection