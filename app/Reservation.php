<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id', 'hotel_id', 'booked_by_user_id', 'check_in_date', 'check_out_date', 'total_price', 'checked_in',
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

    /*
     * Relationships go below
     */

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function room()
    {
        return $this->hasOne('App\Room');
    }

    public function hotelGuest()
    {
        return $this->belongsTo('App\HotelGuest', 'booked_by_user_id', 'id');
    }

}
