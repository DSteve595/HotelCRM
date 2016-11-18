<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelGuest extends Model
{
    protected $table = 'hotel_guests';

    protected $fillable = [
        'user_id', 'phone_number'
    ];

    
    /*
     * Relationships go below
     */


    public function reservation()
    {
        $this->hasMany('App\HotelGuest', 'user_id', 'booked_by_user_id');
    }

}
