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

    public function formatPrettyIsAdmin() {
        if ($this->is_admin) {
            return "Yes";
        } else {
            return "No";
        }
    }


    /*
     * Relationships go below
     */

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Hotel', 'hotel_id', 'id');
    }
}
