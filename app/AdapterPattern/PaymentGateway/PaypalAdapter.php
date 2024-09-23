<?php

namespace App\AdapterPattern\PaymentGateway;

use App\AdapterPattern\PaymentInterface;

class PaypalAdapter implements  PaymentInterface
{

    public function pay($amount)
    {
        $paypal = new Paypal();
     return $paypal->sendPayment($amount);
    }
}
