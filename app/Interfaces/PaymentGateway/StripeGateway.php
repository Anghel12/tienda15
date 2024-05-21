<?php

namespace App\Interfaces\PaymentGateway;

use App\Interfaces\PaymentGateway;
use App\Models\Coin;
use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Token;

class StripeGateway implements PaymentGateway
{
    public function processPayment($request)
    {
      //stripe key
      Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        
        $token = Token::create([
            'card' => [
                'number' => $request->input('card_number'),
                'exp_month' => substr($request->input('expiration_date'), 0, 2),
                'exp_year' => '20' . substr($request->input('expiration_date'), 3, 2),
                'cvc' => $request->input('cvc'),
            ],
        ]);
  
        // Realizar la transacción en la base de datos aquí
        $ip_address = $request->ip();
        $user = Auth::user();
        $coins = $request->input('coins');
        $coin = Coin::find(1); // Suponiendo que el ID de la moneda es 1
        $total_price = $coins * $coin->exchange_rate;

          /* guardar en la base de datos de mi app */
          $user = Auth::user();
          $coins = $request->input('coins');
          $coin = Coin::find(1); // Suponiendo que el ID de la moneda es 1
          $total_price = $coins * $coin->exchange_rate;
      
              // Agregar monedas virtuales al usuario
              $user->coins()->attach($coin->id, [
                  'balance' => $coins,
                  'ct_balance' => $coins * $coin->exchange_rate,
                  'created_at' => now(),
                  'updated_at' => now(),
              ]);
      
              // Guardar información del pago en la tabla payments
              $payment = Payment::create([
                  'user_id' => $user->id,
                  'amount' => $total_price,
                  'currency' => 'usd',
                  'status' => 'completed',
                  'card_last_four_digits' => substr($request->input('card_number'), -4),
                  'ip_address' => $request->ip(),
                  'payment_method_id' => $request->input('payment_method_id'),
              ]); 
      
              // Guardar información de la transacción en la tabla transactions
              Transaction::create([
                  'user_id' => $user->id,
                  'coin_id' => $coin->id,
                  'payment_id' => $payment->id,
                  'amount' => $coins,
                  'type' => 'buy',
                  'price' => $total_price,
                  'ip_address' => $request->ip(),
              ]);

            // Realizar el cargo en Stripe con el token de tarjeta de crédito
            $charge = Charge::create([
            'amount' => $total_price * 100, // La cantidad se debe especificar en centavos
            'currency' => 'usd',
            'source' => $token,
            'description' => 'Compra de ' . $coins . ' monedas virtuales stripe envio ok',
        ]);
      
        // Verifique si el pago se realizó correctamente
         if ($charge['status'] == 'succeeded') {
            return true;
        } else {
            return false;
        } 
    }

    public function cancelPayment($paymentId)
    {
        // Lógica para cancelar un pago a través de Stripe
    }

    public function getPaymentDetails($paymentId)
    {
        // Lógica para obtener los detalles de un pago a través de Stripe
    }
}
