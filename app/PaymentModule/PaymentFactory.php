<?php

namespace App\PaymentModule;

use App\AdapterPattern\PaymentInterface;
use App\PaymentModule\Adaptor\BankTransferAdaptor;
use App\PaymentModule\Adaptor\FawrySDKAdaptor;
use App\PaymentModule\Adaptor\VisaAdaptor;
use App\PaymentModule\Startegy\CashPayment;
use App\PaymentModule\Startegy\OnlinePayment;

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
