<?php

namespace App\PaymentModule\Adaptor;

class BankTransfer
{
 public function BankTransfer($amount): string
 {
     return "Bank Transfer Amount $amount";
 }
}
