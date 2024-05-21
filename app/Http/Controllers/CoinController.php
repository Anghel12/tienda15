<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest\MercadoPagoRequest;
use App\Http\Requests\PaymentRequest\PayPalRequest;
use App\Http\Requests\PaymentRequest\StripeRequest;
use App\Interfaces\PaymentGateway;
use App\Models\Coin;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercadoPago\SDK;
use MercadoPago\Payment;
use MercadoPago\Preference;
use MercadoPago\Item;
use MercadoPago\Payer;
use Illuminate\Support\Facades\Redirect;




class CoinController extends Controller
{
    protected $paymentGateway;

public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    } 

    // Mostrar formulario de compra de monedas virtuales
    public function showBuyCoinsForm()
    {
        $paymentMethods = PaymentMethod::where('enabled', true)->get();
        $coin = Coin::find(1);

        return view('admin.buyCoins.index', compact('paymentMethods', 'coin'));
    }


     // Procesar pago
     public function processPayment(Request $request)
     {
    
    /* if ($paymentMethod == '2') {
        $result = $this->paymentGateway->processPayment(new PayPalRequest($request->all()));
        $approveUrl = session('approveUrl');
        return redirect()->away($approveUrl);
    } elseif ($paymentMethod == '1') {
        $result = $this->paymentGateway->processPayment($request);
        if ($result === true) {
            return redirect()->route('admin.buyCoins.index')->with('info', 'La compra de monedas virtuales se ha realizado con éxito.');
        } else {
            return back()->withErrors(['info' => 'Ocurrió un error al procesar el pago. Por favor, intenta de nuevo más tarde.']);
        }
    } elseif ($paymentMethod == '4'){
        $result = $this->paymentGateway->processPayment(new MercadoPagoRequest($request->all()));
        return $paymentMethod;
        }  */
      
        // Configurar el SDK de MercadoPago con el ID y la clave secreta de la aplicación

     // Agrega credenciales
     // Configurar el SDK de MercadoPago con el ID y la clave secreta de la aplicación
    // Configurar el SDK de MercadoPago con el ID y la clave secreta de la aplicación
  }

    public function ok(Request $request)
    {
       // Configurar el SDK de MercadoPago con el ID y la clave secreta de la aplicación
    // SDK de Mercado Pago
   // SDK de Mercado Pago
   require base_path('vendor/autoload.php');
   // Agrega credenciales
   SDK::setAccessToken(config('services.mercadopago.app_secret'));
   
   // Crea un objeto de preferencia
   $preference = new Preference();

   // Crea un ítem en la preferencia
   $item = new Item();
   $item->title = 'Mi producto';
   $item->quantity = 1;
   $item->unit_price = 75.56;
   $preference->items = array($item);
   $preference->save();

   }

    public function paymentNotification(Request $request)
{
    // Obtener los datos de la notificación
    $paymentId = $request->input('id');
    $paymentStatus = $request->input('status');

    // Buscar la transacción correspondiente en la base de datos
    $transaction = Transaction::where('payment_id', $paymentId)->first();

    // Actualizar el estado de la transacción según el estado del pago en MercadoPago
    if ($transaction) {
        $transaction->status = $paymentStatus;
        $transaction->save();
    }

    // Responder a la notificación con un mensaje de éxito
    return response('OK', 200);
}


public function cancelPayment(Request $request)
{
    $paymentId = $request->input('payment_id');
    $this->paymentGateway->cancelPayment($paymentId);
    // ...
}

public function getPaymentDetails(Request $request)
{
    $paymentId = $request->input('payment_id');
    $details = $this->paymentGateway->getPaymentDetails($paymentId);
    // ...
}
    

/* mostrar historial de transacciones */

public function showTransactions()
{
    $user = auth()->user();
    $transactions = Transaction::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(10);

    return view('admin.transactions.index', ['transactions' => $transactions]);
}



}
