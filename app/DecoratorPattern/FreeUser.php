<?php

namespace App\DecoratorPattern;

use App\DecoratorPattern\UserDecorator;

class FreeUser extends UserDecorator
{
    /**
     * @return string
     */
   public function getSubscriptionPlan(): string
   {
       return "Free User with Name =". $this->user->getName()."And Email= ". $this->user->getEmail();
   }
}
