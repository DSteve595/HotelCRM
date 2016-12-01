<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'id', 'room_number', 'hotel_id', 'is_smoking', 'max_guests', 'nightly_price'
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Hotel', 'hotel_id', 'id');
    }
}
