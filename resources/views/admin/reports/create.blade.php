@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Report</h1>
    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
@stop

@section('content')
        <form method="POST" action="{{ route('admin.reports.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>
            <div>
                <label for="area">Área:</label>
                <input type="text" name="area" id="area" required>
            </div>
            <div>
                <label for="detalles">Detalles:</label>
                <textarea name="detalles" id="detalles" required></textarea>
            </div>
            <div>
                <label for="imagenes">Imágenes:</label>
                <input type="file" name="imagenes[]" id="imagenes" accept="image/*" multiple>
            </div>
            <button type="submit">Enviar reporte</button>
        </form>

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