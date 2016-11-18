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

    public function findReservation(Request $request)
    {
        $reservation_number = Utility::getAlphaNumeric($request->input('q'), 40);
        $reservation = Reservation::where('hotel_id', auth()->user()->hotel_id)
            ->where('custom_reservation_number', $reservation_number)
            ->value('custom_reservation_number');

        return $reservation == null ? 0 : $reservation->toJson();
    }
}
