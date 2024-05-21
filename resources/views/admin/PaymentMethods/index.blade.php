@extends('adminlte::page')

@section('title', 'CommentsAll')

@section('content_header')

    @can('admin.categories.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.categories.create')}}">crear metodo de pago</a>
    @endcan

    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
    @stop
    
    @section('content')


   
<div class="container">
    <div class="card-minimalista">
        <div class="card-header">
    <h1>Todos los métodos de pago</h1>
    <table id="myTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Descripción</th>
                <th>Logo</th>
                <th>Habilitado</th>
                {{-- <th>Acciones</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($PaymentMethods as $payment_method)
                <tr>
                    <td>{{ $payment_method->id }}</td>
                    <td>{{ $payment_method->name }}</td>
                    <td>{{ $payment_method->slug }}</td>
                    <td>{{ $payment_method->description }}</td>
                    <td>
                        @if ($payment_method->logo)
                            <img src="{{ asset($payment_method->logo) }}" alt="{{ $payment_method->name }}" height="50">
                        @else
                            -
                        @endif
                    </td>
                  <td>{{ $payment_method->enabled ? 'Sí' : 'No' }}</td>
                  {{--   <td>
                        <a href="{{ route('payment_methods.edit', $payment_method) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form method="POST" action="{{ route('payment_methods.destroy', $payment_method) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este método de pago?')">Eliminar</button>
                        </form>
                    </td>  --}}
                </tr>
            @endforeach
        </tbody>
    </table>
       </div>
</div>
</div>


@stop

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
 <!-- table css -->
 <link rel="stylesheet" href="{{ asset('css/table.css') }}">

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