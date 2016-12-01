@extends('guest-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <h3 class="page-header">
                Future Reservations <small>Update success!</small>
            </h3>

        </div>
    </div> <!-- / .row -->

    <!-- Dashboard: Stats -->
    <div class="row">

    </div> <!-- / .row -->
@endsection

@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.has-popover').popover();
        });
    </script>
@endsection