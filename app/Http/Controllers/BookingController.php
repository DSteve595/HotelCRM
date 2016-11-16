<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(Request $request)
    {

    }

    public function results(Request $request)
    {

    }

    public function details(Request $request)
    {

    }

    public function policies(Request $request)
    {

    }

    public function payment(Request $request)
    {

    }

    public function receipt(Request $request)
    {

    }
}
