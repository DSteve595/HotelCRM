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

    </div> <!-- / .row -->

    @include('hotel-portal.home.dashboard.reservations-today-table')
@endsection

@section('more-js')
    <script type="text/javascript">
        var searchInput = $("#searchInput");
        var searchReservationBtn = $("#searchReservationBtn");

        searchReservationBtn.click(function() {
            $(this).attr('disabled', true);
            let input = searchInput.val().trim();
            if (input.length < 1) {
                searchInput.addClass('alert-danger');
                $(this).attr('disabled', false);
                return;
            }
            searchInput.removeClass('alert-danger');
            $.post('{{ url('hotel-post/find-reservation') }}', { q: input })
                    .done(function(result) {
                        console.log(result);
                        if (result !== 0) {

                        }
                        else {
                            window.location = '{{ url('home/view-reservation?reservation-id=') }}' + result;
                        }
                    });

            $(this).attr('disabled', false);
        });

    </script>
@endsection