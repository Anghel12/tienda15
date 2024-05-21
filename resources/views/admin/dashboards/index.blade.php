@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif
@include('admin.dashboards.partials.dashboardv2')

 
{{-- 
@include('admin.dashboards.partials.estadisticas_page')

@include('admin.dashboards.partials.dashboardv3')

@include('admin.dashboards.partials.grafica_ventas')


@include('admin.dashboards.partials.chat_directo')
    
@include('admin.dashboards.partials.pruebas')
    --}}

@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

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








