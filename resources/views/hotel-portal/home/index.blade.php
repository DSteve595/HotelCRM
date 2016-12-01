@extends('hotel-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">
                Dashboard <small>Todays activity</small>
            </h3>
        </div>
    </div>
    <div class="row">

    </div>
    @include('hotel-portal.home.dashboard.reservations-today-table')
@endsection

@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {


        });
    </script>
@endsection