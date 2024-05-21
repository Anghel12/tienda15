@extends('adminlte::page')

@section('title', 'Prestamos')

@section('content_header')
    <h1>Prestamos</h1>
    <a href="{{ route('admin.Loans.create') }}" class="btn btn-primary">Agregar Variable de Entorno</a>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')

@include('admin.Loans.index_partials.prestamos') 

@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usersTable').DataTable();
        });
    </script>
@stop
