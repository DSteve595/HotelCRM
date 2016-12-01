<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'id', 'name', 'primary_phone_number', 'terms-and-conditions'
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
    
}
