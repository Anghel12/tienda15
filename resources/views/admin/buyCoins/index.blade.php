@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>COMPRA DE MONEDAS</h1>
@stop
@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif


<div class="card " style="width: 70rem;">
    <div class="card-header">
      <h1 class="">COMPLETAR COMPRA </h1>
      <p class="card-text">solo por hoy compra con un 28% de descuento</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class=" list-group-item"><h5> Resumen de su compra </h5></li>
      <li class="list-group-item"> <img src="https://static.vecteezy.com/system/resources/previews/006/607/020/original/flat-illustration-of-gold-icon-suitable-for-design-element-of-banking-business-investment-and-finance-activity-coin-for-online-payment-free-vector.jpg" class="rounded-circle" alt="..." style="width: 3rem;">
        <p>Paquete de 500 coins</p>
        <p>cargo unico fecha: 5 2 2</p>
     </li>
      <li class="list-group-item">Total con IVA incluido USD 3.00</li>
    </ul>
    <div class="card-body">
        <h1>PAGAR CON  </h1>  <p>seguro</p> 
        <ul class="list-group list-group-flush">
            <li class=" list-group-item"><h5>METODOS DE PAGO</h5></li>
            <li class=" list-group-item">   <a href="#" class="card-link">BCP  {{-- @include('admin.buyCoins.partials.bcp') --}} </a></li>
            <li class=" list-group-item"> <a href="#" class="card-link">PAYPAL</a></li>
        </ul>
    </div>

    <div class="card-footer">
        <p>Al hacer clic en "Completar compra" aceptas los Términos de venta y reconoces que se aplica nuestra Política de privacidad. El método de pago se guardará para futuras compras y pagos de suscripciones recurrentes, si aplica. Si compras Bits aceptas que iniciemos el proceso de entrega del pedido y que no podrás cancelarlo una vez que comience.</p>
    </div>
  </div>

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


<div class="cho-container"></div> 

</div>

    
    @stop

    @section('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="/css/admin_custom.css"> 
    @stop
    
    @section('js')
    
    {{-- // SDK MercadoPago.js --}}
<script src="https://sdk.mercadopago.com/js/v2"></script>

<script>
  const mp = new MercadoPago("{{config('services.mercadopago.app_id')}}", {
    locale: 'es-AR'
  });

  mp.checkout({
    preference: {
      id: '{{$preference->id}}'
    },
    render: {
      container: '.cho-container',
      label: 'Pagar',
    }
  });
</script>

        <script> console.log('Hi!'); </script>
       {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
      
       <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    @stop