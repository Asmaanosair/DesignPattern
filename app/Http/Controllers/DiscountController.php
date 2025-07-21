<?php

namespace App\Http\Controllers;

use App\StrategyPattern\DiscountFactory;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
      public function getDiscount(Request $request){
          $discountType=$request->type;
          $discount=$request->discount;
          $strategy = DiscountFactory::getDiscountType($discountType);
          return $strategy->discount($discount);
      }
}
