<?php

namespace App\MixAdaptorStrategyDecorator\Startegy;

use App\MixAdaptorStrategyDecorator\PaymentInterface;

class CashPayment implements PaymentInterface
{
    public function pay($amount){
        return "CashPayment".$amount;
    }
}
