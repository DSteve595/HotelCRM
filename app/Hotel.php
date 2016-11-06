<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'id', 'name', 'primary_phone_number', 'terms-and-conditions'
    ];
}
