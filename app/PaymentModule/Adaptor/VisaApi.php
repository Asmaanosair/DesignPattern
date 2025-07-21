<?php

namespace App\PaymentModule\Adaptor;

class VisaApi
{
    public function visaPay($amount): string
    {
        return "VisaApi Pay Amount $amount";
    }

}
