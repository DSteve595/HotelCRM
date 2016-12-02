<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelAgent;
use App\Reservation;
use App\Room;
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

        return view('hotel-portal.home.reservations.future-reservations.index')
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

    public function manageUsers(Request $request)
    {
        if ($request->has('name')) {
            $name = $request->input('name');
            $email = $request->input('email');
            $username = $request->input('username');
            $password = $request->input('password');
            $isAdmin = $request->input('isAdmin');

            $user = User::create([
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'account_type' => User::HOTEL_AGENT
            ]);

            $hotel_agent = HotelAgent::create([
                'user_id' => $user->id,
                'hotel_id' => auth()->user()->hotelAgent->hotel_id,
                'is_admin' => $isAdmin ? 1 : 0
            ]);
        }
        else if ($request->has('deleteAgent')) {
            $user_id = HotelAgent::where('id', $request->input('deleteAgent'))->value('user_id');


            User::destroy($user_id);
            HotelAgent::destroy($user_id);
        }

        $hotelAgents = HotelAgent::where('hotel_id', auth()->user()->hotelAgent->hotel_id)
            ->get();

        return view('hotel-portal.home.management.manage-users.index')
            ->with('hotelAgents', $hotelAgents);
    }

    public function manageRooms()
    {
        $rooms = Room::where('hotel_id', auth()->user()->hotelAgent->hotel_id)
            ->get();

        return view('hotel-portal.home.management.manage-rooms.index')
            ->with('rooms', $rooms);
    }
    
    public function hotelSettings(Request $request)
    {
        return view('hotel-portal.home.account-settings.index');
    }
    
}
