<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Welcome page for hotel employees and owners
Route::get('/', 'WelcomeController@index');

// Welcome page for hotel guests
Route::get('/guest', 'WelcomeController@guest');

// Sign up routes for a new hotel company
Route::group(['prefix' => 'sign-up'], function() {

    // Verify a new user selected a valid username (used during sign up)
    Route::post('verify-new-user', 'WelcomeController@verifyNewUser');

    // Sign up a new user
    Route::post('', 'WelcomeController@signUp');

    // Sign up complete
    Route::get('complete', 'WelcomeController@signUpComplete');
});

// Routes for when a hotel agent is logged in
Route::group(['prefix' => 'home'], function() {

    // Main dashboard for a hotel agent: /home
    Route::get('', 'HotelAgentController@home');

});

// Routes for when a guest is logged in
Route::group(['prefix' => 'reservations'], function() {

    // Main dashboard for a hotel guest: /reservations
    Route::get('', 'HotelGuestController@index');

});

// Routes for a guest booking a room
Route::group(['prefix' => 'booking'], function() {

    // Initial booking page for a guest making a new reservation
    Route::get('', 'BookingController@index');

    // View rooms matching search parameters
    Route::get('results', 'BookingController@results');

    // View and enter room details
    Route::get('details', 'BookingController@details');

    // View and accept hotel policies
    Route::get('policies', 'BookingController@policies');

    // Enter credit card info page
    Route::get('payment', 'BookingController@payment');

    // Reservation successfully created page
    Route::get('receipt', 'BookingController@receipt');
});

// Login and logout routes for all users
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

// Routes for HotelPostController
Route::group(['prefix' => 'hotel-post'], function() {

    // Get reservation by reservation number
    Route::post('find-reservation', 'HotelPostController@findReservation');

});

