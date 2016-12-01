<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'id', 'room_number', 'active_reservation_id', 'hotel_id', 'is_smoking', 'max_guests', 'nightly_price'
    ];

    public function hasActiveReservation() {
        if ($this->active_reservation_id != -1) {
            return true;
        } else {
            return false;
        }
    }

    public function hotel()
    {
        return $this->belongsTo('App\Hotel', 'hotel_id', 'id');
    }

    public function activeReservation()
    {
        return $this->hasOne('App\Reservation', 'active_reservation_id', 'id');
    }
}
