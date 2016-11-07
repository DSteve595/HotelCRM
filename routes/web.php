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

// Welcome page for hotel employees and owners to see
Route::get('/', 'WelcomeController@index');

// Verify a new user
Route::post('verify-new-user', 'WelcomeController@verifyNewUser');

Route::group(['prefix' => 'sign-up'], function() {

    // Sign up a new user
    Route::post('', 'WelcomeController@signUp');

    // Sign up complete
    Route::get('complete', 'WelcomeController@signUpComplete');
});

// Login
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'home'], function() {

    // Main dashboard route: /home
    Route::get('', 'HotelAgentController@home');

});