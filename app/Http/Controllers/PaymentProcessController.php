<?php

namespace App\Http\Controllers;

use App\MixAdaptorStrategyDecorator\Decorator\NotificationPayment;
use App\MixAdaptorStrategyDecorator\PaymentFactory;
use Illuminate\Http\Request;

class PaymentProcessController extends Controller
{
    /**
     *
     * @throws \Exception
     */
    public function paymentProcess(Request $request): string
    {
        $request->only(['type','amount']);
        $paymentType=PaymentFactory::getPaymentType($request->type);
        $paymentNotification=new NotificationPayment($paymentType);
        return $paymentNotification->pay($request->amount);
    }
}
