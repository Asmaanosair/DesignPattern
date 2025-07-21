<?php

namespace App\MixAdaptorStrategyDecorator\Adaptor;

class VisaApi
{
    public function visaPay($amount): string
    {
        return "VisaApi Pay Amount $amount";
    }

}
