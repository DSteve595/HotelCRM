@extends('guest-portal.reservation-system.master')
@section('theme')
    dark
@endsection


@section('content')

    <div class="row">
        <div class="col-xs-12">

            <h3 class="page-header">
                Reservations <small>Ready to make a reservation?</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    @include('guest-portal.reservation-system.search')
@endsection
