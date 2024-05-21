@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>mirar el producto</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong> {{session('info')}} </strong>
</div>
@endif

<div class="container">
    <div class="row">

        @include('admin.orders.partials.show_order')


    </div>
</div>


{{-- @include('admin.orders.partials.ejem_show')

 --}}

@stop

@section('css')
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/css/admin_custom.css">

<link rel="stylesheet" href="/css/theme.min.css">
@stop

@section('js')

<script>
    console.log('Hi!'); 
</script>
{{-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}

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