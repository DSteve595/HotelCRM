@extends('hotel-portal.home.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">
                Archived reservations
                <br/>
                <small>All reservations booked in the past</small>
            </h3>
        </div>
    </div>
    <div class="row" style="padding-left:24px">
        <div class="table-responsive">
            <table class="table" id="datatables__example">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Room number</th>
                    <th>Check-in date</th>
                    <th># nights</th>
                    <th># guests</th>
                    <th>Phone number</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>
                            <strong>{{ $reservation->hotelGuest->user->name }}</strong>
                        </td>
                        <td>
                            {{ $reservation->room->room_number }}
                        </td>
                        <td>
                            {{ $reservation->check_in_date }}
                        </td>
                        <td>
                            {{ $reservation->getNumberNights() }}
                        </td>
                        <td>
                            {{ $reservation->number_guests }}
                        </td>
                        <td>
                            {{ App\Utility::formatPrettyPhoneNumber($reservation->hotelGuest->phone_number) }}
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
        $(document).ready(function () {


            // write some js :D


        });
    </script>
@endsection