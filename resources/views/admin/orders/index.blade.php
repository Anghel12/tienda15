@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ordenes</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="container">
    <div class="row">
        
        @include('admin.orders.partials.ver_order') 


    </div>
</div>

{{-- tabla de ordenes realizadas  --}}
 
{{-- <div class="">
    <div class="">
        <table id="myTable1" class="table table-striped">
            <thead>
                <tr>
                    <th>creador</th>
                    <th>ID</th>
                    <th>Número de orden</th>
                    <th>Destinatario</th>
                     <th>Dirección de envío</th> 
                    <th>Teléfono de envío</th>
                    <th>Estado de la orden</th>
                    <th>cantidad</th>
                    <th>metodo Pago</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td> {{$order->user->name}} </td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->shipping_fullname }}</td>
                    <td>{{ $order->shipping_address }}, {{ $order->shipping_city }}, {{ $order->shipping_state }}, {{ $order->shipping_zipcode }}</td>
                    <td>{{ $order->shipping_phone }}</td>
                    <td>{{ $order->status }}</td>
                    <td> {{ $order->item_count}} </td>
                    <td>{{ $order->payment_method }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-primary">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}

@stop

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/styleAdmin.css"> 
  <link rel="stylesheet" href="/css/theme.min.css"> 
@stop

@section('js')

    <script> console.log('Hi!'); </script>
   {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
  
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>


    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>
@stop