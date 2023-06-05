<?php

namespace App\Services;

class StripePaymentService implements PaymentService
{
    public function processPayment(float $amount)
    {
        // Stripe ile ödeme işlemini gerçekleştir
    }

    public function refundPayment(float $amount)
    {
        // Stripe ile ödeme iadesini gerçekleştir
    }
}
