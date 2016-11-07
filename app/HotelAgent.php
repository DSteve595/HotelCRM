<?php

namespace App;

use App\User;
use App\Reservation;

class HotelAgent extends User
{
    protected $fillable = [
        'user_id', 'hotel_id', 'is_admin'
    ];
    

    /*
     * Relationships go below
     */

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
