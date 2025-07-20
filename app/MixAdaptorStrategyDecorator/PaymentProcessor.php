<?php

namespace App\MixAdaptorStrategyDecorator;

use App\AdapterPattern\PaymentInterface;

class PaymentProcessor
{

    public function processPayment(PaymentInterface $paymentService,$amount)
    {

        return $paymentService->pay($amount);
    }
}
