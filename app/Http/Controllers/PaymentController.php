<?php

namespace App\Http\Controllers;

use App\Payments\PaymentProviderInterface;
use App\Payments\StripePaymentProvider;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param StripePaymentProvider $paymentProvider
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, StripePaymentProvider $paymentProvider)
    {
        //payment provider
        $paymentProvider->charge(500);

        ///return success response
        return 'Success';
    }
}
