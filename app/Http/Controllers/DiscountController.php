<?php

namespace App\Http\Controllers;

use App\StrategyPattern\hasDiscountStrategies;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    use HasDiscountStrategies;
      public function getDiscount(Request $request){
          $discountType=$request->type;
          $discount=$request->discount;
          $strategy = $this->getDiscountType($discountType);
          return $strategy->discount($discount);
      }
}
