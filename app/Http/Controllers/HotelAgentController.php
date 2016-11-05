<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelAgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('hotel-agent-portal.index');
    }
}
