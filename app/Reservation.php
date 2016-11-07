<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id', 'hotel_id', 'booked_by_user_id', 'check_in', 'check_out', 'total_price', 'created_at'
    ];

    public function getNumberNights()
    {

    }
    
}
