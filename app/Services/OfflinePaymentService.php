<?php

namespace App\Services;

class OfflinePaymentService implements PaymentService
{
    public function processPayment(float $amount)
    {
        // Çevrimdışı ödeme işlemlerini gerçekleştir
    }

    public function refundPayment(float $amount)
    {
        // Stripe ile ödeme iadesini gerçekleştir
    }
}
