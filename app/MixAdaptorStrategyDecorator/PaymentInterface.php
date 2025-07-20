<?php

namespace App\MixAdaptorStrategyDecorator;

interface PaymentInterface
{
  public function pay($amount);
}
