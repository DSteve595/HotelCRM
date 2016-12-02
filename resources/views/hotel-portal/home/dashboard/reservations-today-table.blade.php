<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">Reservations today</h4>
            </div>
            <div class="table-responsive">
                <table class="table" id="datatables__example">
                    <thead>
                    <tr>
                        <th>Reservation #</th>
                        <th>Name</th>
                        <th>Room number</th>
                        <th>Check-in date</th>
                        <th># nights</th>
                        <th># guests</th>
                        <th>Phone number</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($reservations as $reservation)
                        <tr class="reservation-rows" id="{{ $reservation->id }}" style="cursor: pointer;">
                            <td>
                                {{ $reservation->custom_reservation_number }}
                            </td>
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
                            <td>
                                {!! $reservation->checked_in == 1 ?
                                '<button type="button" style="cursor:default;" class="btn btn-success btn-sm">Checked in</button>' :
                                '<button type="button" style="cursor:default;" class="btn btn-danger btn-sm">Not checked in</button>' !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>