<?php

namespace App\PaymentModule\Adaptor;

use App\PaymentModule\PaymentInterface;

class FawrySDKAdaptor implements PaymentInterface
{
  protected $fawry;
  public function __construct(){
      $this->fawry=new FawrySDK();
  }
  public function pay($amount): string
  {
    return $this->fawry->FawrySDK($amount);
  }
}
