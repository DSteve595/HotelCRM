<?php

namespace App\Http\Controllers;

use App\User;
use App\Utility;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
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
}
