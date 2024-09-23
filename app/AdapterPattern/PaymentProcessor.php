<?php

namespace App\AdapterPattern;

class PaymentProcessor
{

    public function processPayment(PaymentInterface $paymentService,$amount)
    {

        return $paymentService->pay($amount);
    }
}
