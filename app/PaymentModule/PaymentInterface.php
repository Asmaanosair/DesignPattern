<?php

namespace App\PaymentModule;

interface PaymentInterface
{
  public function pay($amount);
}
