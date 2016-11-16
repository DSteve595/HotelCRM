<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelGuest extends Model
{
    protected $table = 'hotel_guests';

    protected $fillable = [
        'phone_number'
    ];

    
    /*
     * Relationships go below
     */


}