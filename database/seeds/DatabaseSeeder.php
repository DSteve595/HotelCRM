<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Hotels

        $hotelFranklin = \App\Hotel::create([
            'name' => 'Franklin Hotel',
            'primary_phone_number' => '1231231234'
        ]);

        // Users

        $userBradley = \App\User::create([
            'name' => 'Bradley Franklin',
            'username' => 'bradley',
            'password' => \App\Utility::getHashedPassword('bradley'),
            'email' => 'bradley@gmail.com',
            'account_type' => \App\User::HOTEL_AGENT
        ]);

        $userTim = \App\User::create([
            'name' => 'Tim Jones',
            'username' => 'timjones',
            'password' => \App\Utility::getHashedPassword('timjones'),
            'email' => 'timjones@gmail.com',
            'account_type' => \App\User::HOTEL_GUEST
        ]);

        $userSteven = \App\User::create([
            'name' => 'Steven Schoen',
            'username' => 'steven',
            'password' => \App\Utility::getHashedPassword('steven'),
            'email' => 'steven@example.com',
            'account_type' => \App\User::HOTEL_AGENT
        ]);

        $userBob = \App\User::create([
            'name' => 'Bob Smith',
            'username' => 'bobsmith',
            'password' => \App\Utility::getHashedPassword('bobsmith'),
            'email' => 'bobsmith@gmail.com',
            'account_type' => \App\User::HOTEL_GUEST
        ]);

        // Hotel agents

        $agentBradley = \App\HotelAgent::create([
            'user_id' => $userBradley->id,
            'hotel_id' => $hotelFranklin->id,
            'is_admin' => 1
        ]);

        $agentSteven = \App\HotelAgent::create([
            'user_id' => $userSteven->id,
            'hotel_id' => $hotelFranklin->id,
            'is_admin' => 1
        ]);

        // Hotel guests

        $guestTim = \App\HotelGuest::create([
            'user_id' => $userTim->id,
            'phone_number' => '4071234567'
        ]);

        $guestBob = \App\HotelGuest::create([
            'user_id' => $userBob->id,
            'phone_number' => '9541234567'
        ]);

        // Rooms

        $room201 = \App\Room::create([
            'room_number' => '201',
            'hotel_id' => $hotelFranklin->id,
            'is_smoking' => 1,
            'max_guests' => 2,
            'nightly_price' => 140
        ]);

        // Reservations

        $reservationToday1 = \App\Reservation::create([
            'hotel_id' => $hotelFranklin->id,
            'room_id' => $room201->id,
            'booked_by_user_id' => $userTim->id,
            'check_in_date' => date('Y-m-d'),
            'check_out_date' => date('Y-m-d', strtotime('+5 day')),
            'custom_reservation_number' => \App\Reservation::generateNewReservationNumber(),
            'total_price' => 123,
            'number_guests' => 3
        ]);

        $reservationToday2 = \App\Reservation::create([
            'hotel_id' => $hotelFranklin->id,
            'room_id' => $room201->id,
            'booked_by_user_id' => $userTim->id,
            'check_in_date' => date('Y-m-d'),
            'check_out_date' => date('Y-m-d', strtotime('+3 day')),
            'custom_reservation_number' => \App\Reservation::generateNewReservationNumber(),
            'total_price' => 123,
            'number_guests' => 1
        ]);

        $reservationToday3 = \App\Reservation::create([
            'hotel_id' => $hotelFranklin->id,
            'room_id' => $room201->id,
            'booked_by_user_id' => $userBob->id,
            'check_in_date' => date('Y-m-d'),
            'check_out_date' => date('Y-m-d', strtotime('+7 day')),
            'custom_reservation_number' => \App\Reservation::generateNewReservationNumber(),
            'total_price' => 456,
            'number_guests' => 4
        ]);

        $reservationPast1 = \App\Reservation::create([
            'hotel_id' => $hotelFranklin->id,
            'room_id' => $room201->id,
            'booked_by_user_id' => $userBob->id,
            'check_in_date' => date('Y-m-d', strtotime('-3 day')),
            'check_out_date' => date('Y-m-d', strtotime('+7 day')),
            'custom_reservation_number' => \App\Reservation::generateNewReservationNumber(),
            'total_price' => 456,
            'number_guests' => 2
        ]);

        $reservationPast2 = \App\Reservation::create([
            'hotel_id' => $hotelFranklin->id,
            'room_id' => $room201->id,
            'booked_by_user_id' => $userTim->id,
            'check_in_date' => date('Y-m-d', strtotime('-1 day')),
            'check_out_date' => date('Y-m-d', strtotime('+3 day')),
            'custom_reservation_number' => \App\Reservation::generateNewReservationNumber(),
            'total_price' => 123,
            'number_guests' => 5
        ]);
    }
}
