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
    protected $redirectPath = '/test3';

    public function __construct()
    {
        $this->middleware('hotel-agent');
    }

    public function home()
    {
        return view('hotel-portal.home.index');
    }
    
    
}
