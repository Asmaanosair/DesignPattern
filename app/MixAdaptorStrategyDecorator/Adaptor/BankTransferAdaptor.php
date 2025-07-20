<?php

namespace App\MixAdaptorStrategyDecorator\Adaptor;

use App\MixAdaptorStrategyDecorator\PaymentInterface;

class BankTransferAdaptor implements PaymentInterface
{
  protected $transfer;
  public function __construct(){
      $this->transfer = new BankTransfer();
  }
  public function pay($amount){
      return $this->transfer->BankTransfer($amount);
  }
}
