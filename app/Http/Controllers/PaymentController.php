<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Error\Card;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public static function makePurchase($amount_in_usd, $description, $token)
    {
        try {
            $charge = Charge::create([
                "amount" => $amount_in_usd * 100,
                "currency" => "usd",
                "source" => $token,
                "description" => $description
            ]);
            return $charge;
        } catch (Card $e) {

            // If the purchased failed, return this
            $body = $e->getJsonBody();
            return [
                'status' => false,
                'error' => $body['error']['message']
            ];
        }
    }
}
