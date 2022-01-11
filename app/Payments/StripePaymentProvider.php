<?php


namespace App\Payments;


class StripePaymentProvider implements PaymentProviderInterface
{

    public $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function charge($amount)
    {
        dump("{$amount} {$this->currency} Succesfully Received Through {$this->providerName()}");
    }

    public function providerName()
    {
        return 'Stripe';
    }
}