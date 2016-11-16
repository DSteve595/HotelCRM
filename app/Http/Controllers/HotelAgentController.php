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
        return view('hotel-portal.home.index');
    }

    public function newReservation()
    {
        return view('hotel-portal.home.reservations.create-new.index');
    }

    public function futureReservations()
    {
        return view('hotel-portal.home.reservations.future-reservations.index');
    }

    public function archivedReservations()
    {
        // TODO
        return 'here';
    }

    public function accountSettings()
    {
        return view('hotel-portal.home.account-settings.index');
    }
    
}
