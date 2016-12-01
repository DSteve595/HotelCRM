<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelAgent;
use App\Reservation;
use App\User;
use App\Utility;
use Illuminate\Http\Request;

class HotelAgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('hotel-agent');
    }

    public function home()
    {
        $reservations = Reservation::where('hotel_id', auth()->user()->hotelAgent->hotel_id)
            ->where('check_in_date', date('Y-m-d'))
            ->get();

        return view('hotel-portal.home.index')
            ->with('reservations', $reservations);
    }

    public function newReservation()
    {
        return view('hotel-portal.home.reservations.create-new.index');
    }

    public function futureReservations()
    {
        $reservations = Reservation::where('hotel_id', auth()->user()->hotelAgent->hotel_id)
            ->where('check_in_date', '>=', date('Y-m-d'))
            ->get();

        return view('hotel-portal.home.reservations.archived-reservations.index')
            ->with('reservations', $reservations);
    }

    public function archivedReservations()
    {
        $reservations = Reservation::where('hotel_id', auth()->user()->hotelAgent->hotel_id)
            ->where('check_in_date', '<', date('Y-m-d'))
            ->get();
	    
	    return view('hotel-portal.home.reservations.archived-reservations.index')
            ->with('reservations', $reservations);
    }

    public function accountSettings()
    {
        return view('hotel-portal.home.account-settings.index');
    }

    public function viewReservation(Request $request)
    {
        $reservation_number = Utility::getAlphaNumeric($request->input('searchInput'), 50);
        $reservations = Reservation::findReservations(auth()->user()->hotelAgent->hotel_id, $reservation_number);
        
        return view('hotel-portal.home.reservations.view-reservation.index')
            ->with('reservations', $reservations);
    }
    
}
