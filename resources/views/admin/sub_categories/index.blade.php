@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-success btn-sm float-right" href=" {{route('admin.sub_categories.create')}}" > Nuevo SUB CATEGORIA</a>
  
    <h1>SUB CATEGORIAS</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif
<div class="container text-center">


    <h3>¿Qué es la subcategoría de un producto?</h3>
    <p>
        
Las subcategorías son etiquetas adicionales que
 podemos utilizar para agrupar varios productos 
 similares dentro del catálogo de productos. Por ejemplo, en un producto cuya categoría sea “Ferretería”, puede tener varias subcategorías como “Plomería”, “Albañilería”, “Carpintería”, etc.
    </p>
</div>
@livewire('admin.sub-categories')



@stop


@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 

     <!-- table css -->
     <link rel="stylesheet" href="{{ asset('css/table.css') }}">
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