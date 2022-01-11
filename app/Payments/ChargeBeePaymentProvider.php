<?php


namespace App\Payments;


class ChargeBeePaymentProvider implements PaymentProviderInterface
{

    public function charge($amount)
    {
        dump("{$amount} Succesfully Received Through {$this->providerName()}");
    }

    public function providerName()
    {
        return 'Chargebee';
    }
}