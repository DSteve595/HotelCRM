<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const HOTEL_GUEST = 1;
    const HOTEL_AGENT = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'username', 'password', 'email', 'account_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function updatePassword($user_id, $new_password)
    {
        self::where('id', $user_id)
            ->update(['password' => Utility::getHashedPassword($new_password)]);
    }

    /*
     * Relationships go below
     */


    public function hotelAgent()
    {
        return $this->hasOne('App\HotelAgent', 'user_id', 'id');
    }
}
