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

    
}
