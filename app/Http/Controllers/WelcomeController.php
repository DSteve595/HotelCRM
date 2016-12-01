<?php

namespace App\Http\Controllers;

use App\User;
use App\Hotel;
use App\Utility;
use App\HotelAgent;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
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

        return redirect('sign-up/complete')->with('name', $name);
    }

    public function signUpComplete()
    {
        return view('hotel-portal.sign-up-complete')->with('name', session('name'));
    }

    /**
     * Used by a jQuery POST request to verify no duplicate username or email
     * when filling out the sign up form
     * @param Request $request
     * @return string
     */
    public function verifyNewUser(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');

        if (strcmp(Utility::getAlphaNumeric($username, 20), $username) != 0
            || !filter_var($email, FILTER_VALIDATE_EMAIL)
            || strlen($username) < 6 || strlen($username) > 20
            || strlen($email) > 50) {
            abort(403);
        }

        if (User::where('username', $username)->count() > 0) return -1;
        if (User::where('email', $email)->count() > 0) return 0;
        return 1;
    }

    public function guest()
    {
        return view('guest-portal.home.index');
    }
}
