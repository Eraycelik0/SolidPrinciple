<?php

namespace App\Services;

class PaymentServiceFactory
{
    public static function createPaymentService(string $provider): PaymentService
    {
        if ($provider === 'paypal') {
            return new PaypalPaymentService();
        } elseif ($provider === 'stripe') {
            return new StripePaymentService();
        }

        throw new \InvalidArgumentException("Invalid payment provider");
    }
}
