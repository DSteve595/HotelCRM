<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'id', 'name', 'primary_phone_number', 'terms_and_conditions'
    ];

    
    /**
     * Relationships go below
     */

    public function hotelAgent()
    {
        return $this->hasMany('App\HotelAgent');
    }

    public function room()
    {
        return $this->hasMany('App\Room', 'hotel_id', 'id');
    }

    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }
    
    public static function getAvailableRooms($hotel_id, $my_check_in, $my_check_out)
    {
        $room_ids_to_exclude = Reservation::where('hotel_id', $hotel_id)
            ->where(function($query) use ($my_check_in, $my_check_out) {
                $query->orWhere(function($query) use ($my_check_in, $my_check_out) {
                    $query->whereBetween('check_in_date', [$my_check_in, $my_check_out]);
                });
                $query->orWhere(function($query) use ($my_check_in, $my_check_out) {
                    $query->whereBetween('check_out_date', [$my_check_in, $my_check_out]);
                });
            })
            ->pluck('room_id')
            ->unique('room_id');
        $rooms = Room::whereNotIn('id', $room_ids_to_exclude)
            ->get();
        return $rooms;
    }
    
}
