<?php

namespace App\PaymentModule\Decorator;

use App\PaymentModule\PaymentInterface;

class NotificationPayment implements PaymentInterface
{
    public final function __construct(protected PaymentInterface $payment)
    {

    }
    public function pay($amount): string
    {
         $paymentResult = $this->payment->pay($amount);
         $notificationResult = $this->sendNotification();
        return $paymentResult ."\n". $notificationResult;
    }
    public function sendNotification(): string
    {
        return "Notification Payment Sent Successfully";
    }

}
