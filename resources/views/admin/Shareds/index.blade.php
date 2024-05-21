@extends('adminlte::page')

@section('title', 'Shareds')

@section('content_header')
    <h1>Shareds</h1>
    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Reports') }}</div>

          <div class="card-body">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Plataforma</th>
                        <th>Usuario</th>
                        <th>URL</th>
                        <th>Conteo</th>
                        <th>Activo</th>
                        <th>Etiquetas</th>
                        <th>Tipo</th>
                        <th>Vistas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shareds as $shared)
                        <tr>
                            <td>{{ $shared->titulo }}</td>
                            <td>{{ $shared->descripcion }}</td>
                            <td>{{ $shared->plataforma }}</td>
                            <td>{{ $shared->user->name }}</td>
                            <td>{{ $shared->url }}</td>
                            <td>{{ $shared->conteo }}</td>
                            <td>{{ $shared->activo ? 'Sí' : 'No' }}</td>
                            <td>{{ $shared->etiquetas }}</td>
                            <td>{{ $shared->tipo }}</td>
                            <td>{{ $shared->vistas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
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