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

    public function reservations()
    {
        return $this->hasMany('App\Reservations')->orderBy('created_at', 'desc');
    }
    
}
