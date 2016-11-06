<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\HotelAgent;
use App\User;
use App\Utility;
use Illuminate\Http\Request;

class HotelAgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('hotel-agent')
            ->except(['index', 'signUp', 'signUpComplete']);
    }

    public function index()
    {
        return view('hotel-portal.index');
    }

    public function signUp(Request $request)
    {
        // Get the form variables and format them
        $username = Utility::getAlphaNumeric($request->input('newUsername'), 20);
        $password = Utility::getHashedPassword(substr($request->input('password1'), 0, 20));
        $name = Utility::getAlphaNumeric($request->input('name'), 20);
        $company_name = Utility::getAlphaNumeric($request->input('companyName'), 20);
        $email = $request->input('email');
        $phone_number = Utility::extractNumbers(substr($request->input('phoneNumber'), 0, 15));

        // Create the hotel
        $hotel = Hotel::create([
            'name' => $company_name,
            'primary_phone_number' => $phone_number
        ]);

        // Create the user
        $user = User::create([
            'name' => $name,
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'account_type' => User::HOTEL_AGENT
        ]);

        // Create the hotel agent
        $hotel_agent = HotelAgent::create([
            'user_id' => $user->id,
            'hotel_id' => $hotel->id,
            'is_admin' => 1
        ]);

        return redirect('sign-up-complete')->with('name', $name);
    }

    public function signUpComplete()
    {
        return view('hotel-portal.sign-up-complete')->with('name', session('name'));
    }
}
