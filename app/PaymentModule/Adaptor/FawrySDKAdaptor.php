<?php

namespace App\MixAdaptorStrategyDecorator\Adaptor;

use App\MixAdaptorStrategyDecorator\PaymentInterface;

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
