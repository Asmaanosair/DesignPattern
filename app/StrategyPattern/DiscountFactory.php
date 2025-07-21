<?php

namespace App\StrategyPattern;

use App\StrategyPattern\DiscoutBehavior\FixedDiscount;
use App\StrategyPattern\DiscoutBehavior\PercentDiscount;
use http\Exception\InvalidArgumentException;

class DiscountFactory
{

    static public function getDiscountType(int $discountType) : DiscountStrategy
    {
        return match ($discountType) {
            0 => new FixedDiscount(),
            1 => new PercentDiscount(),
          default => throw new InvalidArgumentException("Invalid discount type"),
        };
    }

}
