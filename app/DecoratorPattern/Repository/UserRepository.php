<?php

namespace App\DecoratorPattern\Repository;

use App\Models\User;
use App\DecoratorPattern\UserInterface;

class UserRepository implements UserRepositoryInterface
{
     public function getUserById($id)
     {
         // TODO: Implement getUserById() method.
         return User::find($id);

     }
}
