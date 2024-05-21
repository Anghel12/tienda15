@extends('adminlte::page')

@section('title', 'Coins')

@section('content_header')

    @can('admin.categories.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.categories.create')}}">Crear Coin</a>
    @endcan
    
    <h1>Monedas creadas</h1>
@stop
@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="card-minimalista">
    <div class="card-header">
        <h3 class="card-title">Coins</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Exchange Rate</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                   {{--  <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($coins as $coin)
                    <tr>
                        <td>{{ $coin->id }}</td>
                        <td>{{ $coin->name }}</td>
                        <td>{{ $coin->symbol }}</td>
                        <td>{{ $coin->exchange_rate }}</td>
                        <td>{{ $coin->created_at }}</td>
                        <td>{{ $coin->updated_at }}</td>
                      {{--   <td>
                            <a href="{{ route('coins.edit', $coin->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('coins.destroy', $coin->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
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