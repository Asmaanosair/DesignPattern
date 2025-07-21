<?php

namespace App\MixAdaptorStrategyDecorator\Startegy;

use App\MixAdaptorStrategyDecorator\PaymentInterface;

class OnlinePayment implements PaymentInterface
{
    public function pay($amount){
        return "OnlinePayment ".$amount;
    }
}
