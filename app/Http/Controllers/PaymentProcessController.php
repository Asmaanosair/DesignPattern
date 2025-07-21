<?php

namespace App\Http\Controllers;

use App\MixAdaptorStrategyDecorator\PaymentFactory;
use Illuminate\Http\Request;

class PaymentProcessController extends Controller
{
    /**
     * @throws \Exception
     */
    public function paymentProcess(Request $request){
        $request->only(['type','amount']);
        $paymentType=PaymentFactory::getPaymentType($request->type);
        return $paymentType->pay($request->amount);
    }
}
