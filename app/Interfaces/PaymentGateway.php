<?php

namespace App\Interfaces;

interface PaymentGateway
{
    public function processPayment($request);  
    public function cancelPayment($paymentId);
    public function getPaymentDetails($paymentId);
}
