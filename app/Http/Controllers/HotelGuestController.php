<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelGuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('hotel-guest');
    }

    public function index()
    {

    }
}
