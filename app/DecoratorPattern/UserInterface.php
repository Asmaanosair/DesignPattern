<?php

namespace App\DecoratorPattern;

interface UserInterface
{
    /**
     * @return string
     */
 public function getName() :string;

    /**
     * @return string
     */
 public function getEmail():string;
}
