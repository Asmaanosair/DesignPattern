<?php

namespace App\PaymentModule\Adaptor;

use App\PaymentModule\PaymentInterface;

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
