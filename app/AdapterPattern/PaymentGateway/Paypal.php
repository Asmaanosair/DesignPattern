<?php

namespace App\AdapterPattern\PaymentGateway;

class Paypal
{
  public function sendPayment($amount): string
  {
      return "Paypal payment of $amount";
  }
}
