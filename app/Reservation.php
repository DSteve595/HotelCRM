<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id', 'hotel_id', 'booked_by_user_id', 'check_in', 'check_out', 'total_price', 'checked_in',
        'custom_reservation_number', 'created_at'
    ];

    public function getNumberNights()
    {

    }

    public static function generateNewReservationNumber()
    {
        do {
            $str = 'RES_' . Utility::generateRandomString(15, 20, true);
            $count_duplicates = Reservation::where('custom_reservation_number', $str)->count();
        } while ($count_duplicates > 0);
        return $str;
    }
    
}
