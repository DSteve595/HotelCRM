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
Route::get('/', 'HotelAgentController@index');

// Verify a new user
Route::post('verify-new-user', 'WelcomeController@verifyNewUser');

// Sign up a new user
Route::post('sign-up', 'HotelAgentController@signUp');

// Sign up complete
Route::get('sign-up-complete', 'HotelAgentController@signUpComplete');
