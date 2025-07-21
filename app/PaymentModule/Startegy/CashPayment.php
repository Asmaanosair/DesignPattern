<?php

namespace App\PaymentModule\Startegy;

use App\PaymentModule\PaymentInterface;

class CashPayment implements PaymentInterface
{
    public function pay($amount){
        return "CashPayment".$amount;
    }
}
