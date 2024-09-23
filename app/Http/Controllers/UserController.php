<?php

namespace App\Http\Controllers;



use App\AdapterPattern\PaymentProcessor;
use App\DecoratorPattern\FreeUser;
use App\DecoratorPattern\PremiumUser;
use App\DecoratorPattern\Repository\CacheUserRepositoryDecorated;
use App\DecoratorPattern\Repository\UserDecoratedRepository;
use App\DecoratorPattern\Repository\UserRepository;
use App\DecoratorPattern\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user=new User('Asmaa','asmaa@test.com');
        $free=new FreeUser($user);
        $premium=new PremiumUser($user);
        return view('user.index',compact('free','premium','user'));
    }
    public function getUser($id)
    {
        $userRepository=resolve(UserRepository::class);
        $userCacheRepo=new CacheUserRepositoryDecorated($userRepository);
        return $userCacheRepo->getUserById($id);
    }
    public function getPayment($type)
    {
        $namespace='\\App\\AdapterPattern\\PaymentGateway\\';
        $paymentTypes = ['paypal'=>'Paypal', 'stripe'=>'Stripe'];
        $payment= new PaymentProcessor();
        $className = $namespace . $paymentTypes[$type] . 'Adapter';
        $paymentType = new $className();
        return $payment->processPayment($paymentType,100);
    }
}
