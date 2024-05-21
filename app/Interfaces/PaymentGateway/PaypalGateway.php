<?php

namespace App\Interfaces\PaymentGateway;

use App\Http\Requests\PaymentRequest\PayPalRequest;
use App\Interfaces\PaymentGateway;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class PayPalGateway implements PaymentGateway
{
    public function processPayment($request)
    {
        // Configurar el entorno de PayPal
        $clientId = env('PAYPAL_SANDBOX_CLIENT_ID');
        $clientSecret = env('PAYPAL_SANDBOX_CLIENT_SECRET');
        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);

        $amount = $request->input('amount');
        $currency = 'USD'; // O cualquier otra moneda que acepte PayPal

        // Crear la orden de pago
        $ordersCreateRequest = new OrdersCreateRequest();
        $ordersCreateRequest->prefer('return=representation');
        $ordersCreateRequest->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "amount" => [
                    "value" => $amount,
                    "currency_code" => $currency
                ]
            ]]
        ];

        try {
            $response = $client->execute($ordersCreateRequest);
            if ($response->statusCode == 201) {
                // Redireccionar al usuario a la página de PayPal para completar el pago
                $approveUrl = '';
                foreach ($response->result->links as $link) {
                    if ($link->rel == 'approve') {
                        $approveUrl = $link->href;
                        break;
                    }
                }
                session(['approveUrl' => $approveUrl]);
            }
        } catch (HttpException $e) {
            // Manejar errores de PayPal
            $errorMessage = $e->getMessage();
            return back()->withErrors(['info' => $errorMessage]);
        }
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


