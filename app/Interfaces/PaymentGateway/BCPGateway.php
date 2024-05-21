<?php

namespace App\Interfaces\PaymentGateway;

use App\Interfaces\PaymentGateway;
use BCP\PaymentSDK;

class BcpGateway implements PaymentGateway
{
    public function processPayment($request)
    {
        $apiKey = env('BCP_API_KEY');
        $apiSecret = env('BCP_API_SECRET');

        PaymentSDK::configure($apiKey, $apiSecret);

        $amount = $request->input('amount');
        $cardNumber = $request->input('card_number');
        $expirationDate = $request->input('expiration_date');
        $cvc = $request->input('cvc');

        // Crear token de pago
        $paymentToken = PaymentSDK::createToken([
            'card_number' => $cardNumber,
            'expiration_date' => $expirationDate,
            'cvc' => $cvc
        ]);

        // Autorizar el pago
        $paymentAuthorization = PaymentSDK::authorizePayment([
            'amount' => $amount,
            'currency' => 'PEN',
            'token' => $paymentToken['token']
        ]);

        // Verificar si el pago se realizó correctamente
        if ($paymentAuthorization['status'] == 'approved') {
            return true;
        } else {
            return false;
        } 
    }

    public function cancelPayment($paymentId)
    {
        // Lógica para cancelar un pago a través de BCP
    }

    public function getPaymentDetails($paymentId)
    {
        // Lógica para obtener los detalles de un pago a través de BCP
    }
}
