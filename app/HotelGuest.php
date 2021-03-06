<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelGuest extends Model
{
    protected $table = 'hotel_guests';

    protected $fillable = [
        'id', 'user_id', 'phone_number'
    ];


    /*
     * Relationships go below
     */

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function reservation()
    {
        return $this->hasMany('App\Reservation', 'booked_by_user_id', 'user_id');
    }

}
