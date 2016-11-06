<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelAgent extends Model
{
    protected $fillable = [
        'user_id', 'hotel_id', 'is_admin'
    ];
}
