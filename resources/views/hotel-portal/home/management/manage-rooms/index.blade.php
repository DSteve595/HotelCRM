@extends('hotel-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">
                Manage rooms
                <br/>
                <small>See and edit the rooms in your hotel</small>
            </h3>
        </div>
    </div>
    <div class="row" style="padding-left:24px">
        <div class="table-responsive">
            <table class="table" id="datatables__example">
                <thead>
                <tr>
                    <th>Room number</th>
                    <th>Times booked</th>
                    <th>Booked for today</th>
                    <th>Smoking</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>
                            <strong>{{ $room->room_number }}</strong>
                        </td>
                        <td>
                            {{ sizeof($room->reservations) }}
                        </td>
                        <td>
                            {{ \App\Utility::formatPrettyBooleanAsYesNo($room->getReservationBookedForToday()->isEmpty()) }}
                        </td>
                        <td>
                            {{ \App\Utility::formatPrettyBooleanAsYesNo($room->is_smoking) }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('more-js')
    <script type="text/javascript">
        $(document).ready(function() {

            // TODO: write some js maybe?

        });
    </script>
@endsection