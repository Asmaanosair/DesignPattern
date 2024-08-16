<?php

namespace App\DecoratorPattern\Repository;

use App\DecoratorPattern\Repository\UserRepositoryInterface;
use App\DecoratorPattern\UserInterface;

class UserDecoratedRepository implements UserRepositoryInterface
{
    /**
     * @var \App\DecoratorPattern\Repository\UserRepositoryInterface
     */
    private $userRepository;

    /**
     * @param \App\DecoratorPattern\Repository\UserRepositoryInterface $userRepository\
     */
    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }

    /**\
     * @param $id
     * @return mixed
     */
    public function getUserById($id)
    {
        // TODO: Implement getUserById() method.
        return $this->userRepository->getUserById($id);

    }
}
