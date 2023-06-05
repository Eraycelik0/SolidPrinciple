<?php

namespace App\Services;

interface PaymentService
{
    public function processPayment(float $amount);

    public function refundPayment(float $amount);
}



