@extends('adminlte::page')

@section('title', 'Transacciones')

@section('content_header')

    @can('admin.categories.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.categories.create')}}">Transacciones Historial</a>
    @endcan
    
    <h1>Transacciones</h1>
@stop
@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Transactions</h3>
    </div>
    <div class="card-body">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Coin ID</th>
                    <th>Payment ID</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>IP Address</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->user->id }}</td>
                    <td>{{ $transaction->coin_id }}</td>
                    <td>{{ $transaction->payment_id }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->price }}</td>
                    <td>{{ $transaction->ip_address }}</td>
                    <td>{{ $transaction->created_at }}</td>
                    <td>{{ $transaction->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@stop

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
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