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
                        <th>Name</th>
                        <th>Phone number</th>
                        <th># nights</th>
                        <th># guests</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($reservations as $reservation)
                        <tr class="reservation-rows" id="{{ $reservation->id }}" style="cursor: pointer;">
                            <td>
                                <strong>{{ $reservation->hotelGuest->user->name }}</strong>
                            </td>
                            <td>
                                    {{ App\Utility::formatPrettyPhoneNumber($reservation->hotelGuest->phone_number) }}
                            </td>
                            <td>
                                {{ $reservation->getNumberNights() }}
                            </td>
                            <td>
                                {{ $reservation->number_guests }}
                            </td>
                            <td>
                                {{ $reservation->getStatus() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>