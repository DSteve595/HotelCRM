@extends('guest-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <h3 class="page-header">
                New Reservations <small>Update success!</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    <!-- Dashboard: Stats -->
    <div class="row">

    </div> <!-- / .row -->
@endsection

<form action="{{ url('view-reservation') }}" method="post" id="makeReservation">
    <div class="input-group">
        <input type="text" class="form-control" name="newReservation" placeholder="Make reservation">
        <div class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    </form>
@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.has-popover').popover();

            makeReservation.click(function(e){
                var
            });
        });
    </script>
@endsection