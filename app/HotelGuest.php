<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelGuest extends Model
{
    protected $fillable = [

    ];

    
    /*
     * Relationships go below
     */

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
