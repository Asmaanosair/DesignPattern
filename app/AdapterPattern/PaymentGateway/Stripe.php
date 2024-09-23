<?php

namespace App\AdapterPattern\PaymentGateway;

class Stripe
{
    public function sendAmount($amount): string
    {
        return "Stripe payment of $amount";
    }
}
