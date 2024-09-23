<?php

namespace App\AdapterPattern\PaymentGateway;
use App\AdapterPattern\PaymentGateway\Stripe;
use App\AdapterPattern\PaymentInterface;

class StripeAdapter implements PaymentInterface
{

    public function pay($amount)
    {
        $stripe = new Stripe();
        return $stripe->sendAmount($amount);
    }
}
