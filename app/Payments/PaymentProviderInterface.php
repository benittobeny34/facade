<?php

namespace App\Payments;

interface PaymentProviderInterface
{
    public function charge($amount);

    public function providerName();
}