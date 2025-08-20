<?php

namespace App\PaymentModule\Facades;

use App\PaymentModule\Decorator\NotificationPayment;
use App\PaymentModule\PaymentFactory;

class PaymentFacades
{
    /**
     * @param string $type
     * @param float $amount
     * @return string
     * @throws \Exception
     */
    public static function pay(string $type, float $amount): string
    {
       $paymentType=PaymentFactory::getPaymentType($type);
       $paymentNotification=new NotificationPayment($paymentType);
       return $paymentNotification->pay($amount);
   }
}
