<?php

namespace App\Http\Controllers;

use App\User;
use App\Utility;
use Illuminate\Http\Request;

class HotelGuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('hotel-guest');
    }

    public function index(Request $request)
    {
        // If they are updating their info
        if ($request->has('password')) {
            auth()->user()->updatePassword(auth()->user()->id, $request->input('password'));
        }


        //return view('');
    }
    
    
}
