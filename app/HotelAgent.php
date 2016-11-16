<?php

namespace App;

use App\User;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;

class HotelAgent extends Model
{
    protected $table = 'hotel_agents';

    protected $fillable = [
        'id', 'user_id', 'hotel_id', 'is_admin'
    ];


    /*
     * Relationships go below
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function hotel()
    {
        $this->belongsTo('App\Hotel');
    }
}
