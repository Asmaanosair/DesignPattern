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
          dd($strategy->discount($discount));
          return $strategy->discount($discount);
      }
}
