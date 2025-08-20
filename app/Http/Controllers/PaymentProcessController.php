<?php

namespace App\Http\Controllers;

use App\PaymentModule\Decorator\NotificationPayment;
use App\PaymentModule\Facades\PaymentFacades;
use App\PaymentModule\PaymentFactory;
use Illuminate\Http\Request;

class PaymentProcessController extends Controller
{
    /**
     *
     * @throws \Exception
     */
    public function paymentProcess(Request $request): string
    {
        $data=$request->only(['type','amount']);
        return PaymentFacades::pay($data['type'],$data['amount']);
    }
}
