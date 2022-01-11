<?php

namespace App\Providers;

use App\Facade\PersonDetail;
use App\Payments\ChargeBeePaymentProvider;
use App\Payments\PaddlePaymentProvider;
use App\Payments\PaymentProviderInterface;
use App\Payments\StripePaymentProvider;
use Faker\Provider\Payment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind('person',function() {
//            return new PersonDetail($this->app->make('user'));
//        });
//        $this->app->bind('user',function() {
//            return new User;
//        });

        $this->app->bind(StripePaymentProvider::class, function () {
            return new StripePaymentProvider('USD');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
