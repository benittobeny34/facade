<?php


namespace App\Payments;


class PaddlePaymentProvider implements PaymentProviderInterface
{
    public function charge($amount)
    {
        dump("{$amount} Succesfully Received Through {$this->providerName()}");
    }

    public function providerName()
    {
        return 'Paddle';
    }
}