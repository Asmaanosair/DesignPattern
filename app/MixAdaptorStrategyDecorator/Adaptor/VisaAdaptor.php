<?php

namespace App\MixAdaptorStrategyDecorator\Adaptor;

use App\MixAdaptorStrategyDecorator\PaymentInterface;

class VisaAdaptor implements PaymentInterface
{
    protected VisaApi $visa;
    public function __construct()
    {
        $this->visa = new VisaApi();
    }
    public function pay($amount): string
    {
        return $this->visa->visaPay($amount);

    }



}
