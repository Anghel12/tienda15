{{-- mercado pago 00 --}}
@php
// SDK de Mercado Pago
require base_path('vendor/autoload.php');
// Agrega credenciales
MercadoPago\SDK::setAccessToken(config('services.mercadopago.app_secret'));

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
@endphp