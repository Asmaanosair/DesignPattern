<?php

namespace App\StrategyPattern\DiscoutBehavior;

use App\StrategyPattern\DiscountStrategy;

class PercentDiscount implements DiscountStrategy
{
   public function discount($discount)
   {
       return $discount*0.1;
   }
}
