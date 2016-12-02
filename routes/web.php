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
//Takes guests to the search page

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

    // Create a new reservation
    Route::get('new-reservation', 'HotelAgentController@newReservation');

    // View future reservations
    Route::get('future-reservations', 'HotelAgentController@futureReservations');

    // View archived reservations
    Route::get('archived-reservations', 'HotelAgentController@archivedReservations');

    // Account settings
    Route::get('account-settings', 'HotelAgentController@accountSettings');

    // View a specific reservation details
    Route::get('view-reservation', 'HotelAgentController@viewReservation');

    // Manage a hotel's users (for admins)
    Route::get('manage-users', 'HotelAgentController@manageUsers');
    Route::post('manage-users', 'HotelAgentController@manageUsers');

    // Manage a hotel's rooms (for admins)
    Route::get('manage-rooms', 'HotelAgentController@manageRooms');

    // Account settings
    Route::get('hotel-settings', 'HotelAgentController@hotelSettings');
    Route::post('hotel-settings', 'HotelAgentController@hotelSettings');

});

// Routes for when a guest is logged in
Route::group(['prefix' => 'reservations'], function() {

    // Main dashboard for a hotel guest: /reservations
    Route::get('', 'HotelGuestController@index');

    // Account settings
    Route::get('account-settings', 'HotelGuestController@index');
    Route::post('account-settings', 'HotelGuestController@index');

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

    // Route to view a reservation for the modal
    Route::post('get-reservation', 'HotelPostController@getReservation');

    // Check someone in
    Route::post('check-in', 'HotelPostController@checkIn');

});

