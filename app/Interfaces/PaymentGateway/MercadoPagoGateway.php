<?php

namespace App\Interfaces\PaymentGateway;

use App\Interfaces\PaymentGateway;
use App\Http\Requests\PaymentRequest\MercadoPagoRequest;
use MercadoPago\SDK;
use MercadoPago\Payment;


class MercadoPagoGateway implements PaymentGateway
{
    public function processPayment($request)
    {
        
    }
    
    public function cancelPayment($paymentId)
    {
        // Lógica para cancelar un pago a través de PayPal
    }

    public function getPaymentDetails($paymentId)
    {
        // Lógica para obtener los detalles de un pago a través de PayPal
    }
}