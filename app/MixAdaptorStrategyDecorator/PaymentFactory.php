<?php

namespace App\MixAdaptorStrategyDecorator;

use App\AdapterPattern\PaymentInterface;
use App\MixAdaptorStrategyDecorator\Adaptor\BankTransferAdaptor;
use App\MixAdaptorStrategyDecorator\Adaptor\FawrySDKAdaptor;
use App\MixAdaptorStrategyDecorator\Adaptor\VisaAdaptor;
use App\MixAdaptorStrategyDecorator\Startegy\CashPayment;
use App\MixAdaptorStrategyDecorator\Startegy\OnlinePayment;

class PaymentFactory
{

    /**
     * @throws \Exception
     */
    static public function getPaymentType($type)
    {
        return match ($type) {
            'online' => new OnlinePayment(),
            'cash' => new CashPayment(),
            'bank' => new BankTransferAdaptor(),
            'fawry' =>new FawrySDKAdaptor(),
            'visa' => new VisaAdaptor(),
             default => throw new \Exception("Payment type $type not found")

        };
    }
}
