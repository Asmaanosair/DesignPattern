<?php

namespace App\DecoratorPattern;

use App\DecoratorPattern\UserInterface;

class User implements UserInterface
{
    /**
     * @var
     */
     private $name;
    /**
     * @var
     */
     private $email;

     public function __construct($name, $email)
     {
         $this->name = $name;
         $this->email = $email;
     }
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // TODO: Implement getName() method.
        return $this->name;

    }

    /**
     * @inheritDoc
     */
    public function getEmail(): string
    {
        return $this->email;
        // TODO: Implement getEmail() method.
    }
}
