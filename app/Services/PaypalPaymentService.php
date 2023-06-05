<?php

namespace App\Services;

class PaypalPaymentService implements PaymentService
{
    public function processPayment(float $amount)
    {
        // Paypal ile ödeme işlemini gerçekleştir
    }

    public function refundPayment(float $amount)
    {
        // Stripe ile ödeme iadesini gerçekleştir
    }
}
