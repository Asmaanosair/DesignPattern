<?php

namespace App\DecoratorPattern;

use App\DecoratorPattern\UserInterface;

abstract class UserDecorator implements UserInterface
{


    protected $user;
    public function __construct(UserInterface $user){
        $this->user = $user;
    }


    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // TODO: Implement getName() method.
        return $this->user->getName();
    }

    /**
     * @inheritDoc
     */
    public function getEmail(): string
    {
        // TODO: Implement getEmail() method.
        return $this->user->getEmail();
    }
}
