<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Utility;
use Illuminate\Http\Request;

class HotelPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('hotel-agent');
    }

    public function getReservation(Request $request)
    {
        $reservation = Reservation::getReservation(auth()->user()->hotelAgent->hotel_id, $request->input('id'));
        return $reservation == null ? 0 :
            [
                'name' => $reservation->hotelGuest->user->name,
                'phone_number' => Utility::formatPrettyPhoneNumber($reservation->hotelGuest->phone_number),
                'nights' => $reservation->getNumberNights(),
                'guests' => $reservation->number_guests,
                'status' => $reservation->checked_in
            ];
    }

    public function checkIn(Request $request)
    {
        Reservation::checkInReservation(Utility::filterRowId($request->input('id')));
    }

}
