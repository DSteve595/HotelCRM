<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id', 'hotel_id', 'room_id', 'booked_by_user_id', 'check_in_date', 'check_out_date', 'number_guests', 'total_price', 'checked_in',
        'custom_reservation_number', 'created_at'
    ];

    public function getNumberNights()
    {
        return (strtotime($this->check_out_date) - strtotime($this->check_in_date)) / 60 / 60 / 24;
    }

    public function getStatus() {
        if ($this->checked_in) {
            return "Checked in";
        } else {
            return "Not checked in";
        }
    }

    public static function generateNewReservationNumber()
    {
        do {
            $str = 'RES_' . Utility::generateRandomString(15, 20, true);
            $count_duplicates = Reservation::where('custom_reservation_number', $str)->count();
        } while ($count_duplicates > 0);
        return $str;
    }

    public static function findReservations($hotel_id, $reservation_number)
    {
        return self::where('hotel_id', $hotel_id)
            ->where('custom_reservation_number', $reservation_number)
            ->get();
    }

    public static function getReservation($hotel_id, $reservation_id)
    {
        return self::where('hotel_id', $hotel_id)
            ->where('id', $reservation_id)
            ->first();
    }

    /*
     * Relationships go below
     */

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function room()
    {
        return $this->hasOne('App\Room', 'id', 'room_id');
    }

    public function hotelGuest()
    {
        return $this->hasOne('App\HotelGuest', 'user_id', 'booked_by_user_id');
    }

}