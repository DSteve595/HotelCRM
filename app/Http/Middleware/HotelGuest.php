<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class HotelGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->account_type == User::HOTEL_GUEST) {
            return $next($request);
        }

        return redirect('');
    }
}
