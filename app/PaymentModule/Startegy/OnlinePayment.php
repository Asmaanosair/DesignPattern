<?php

namespace App\PaymentModule\Startegy;

use App\PaymentModule\PaymentInterface;

class OnlinePayment implements PaymentInterface
{
    public function pay($amount){
        return "OnlinePayment ".$amount;
    }
}
