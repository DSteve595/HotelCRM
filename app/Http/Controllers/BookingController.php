<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {
        $hotel_id = $request->input('q');

        session([
            'hotel_id' => $hotel_id
        ]);

        return view('guest-portal.reservation-system.search');
    }

    public function results(Request $request)
    {
        if (!$request->has('search')) abort(503);

        $check_in = $request->input('start');
        $check_out = $request->input('end');
        $hotel_id = session('hotel_id');

        session([
            'check_in' => $check_in,
            'check_out' => $check_out
        ]);

        $rooms = Hotel::getAvailableRooms($hotel_id, $check_in, $check_out);

        return view('guest-portal.reservation-system.results')->with('rooms', $rooms);
    }

    public function details(Request $request)
    {
        return view('guest-portal.reservation-system.details');
    }

    public function policies(Request $request)
    {
        //Get the terms and conditions from the hotel
        //pass it into this view
        return view('guest-portal.reservation-system.policies');
    }

    public function payment(Request $request)
    {

    }

    public function receipt(Request $request)
    {

    }
}
