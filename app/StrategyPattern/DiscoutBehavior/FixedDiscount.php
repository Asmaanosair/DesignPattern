<?php

namespace App\StrategyPattern\DiscoutBehavior;

use App\StrategyPattern\DiscountStrategy;

class FixedDiscount implements DiscountStrategy
{
    public function discount($discount){
        return "Fixed  Discount : " . $discount ;
    }
}
