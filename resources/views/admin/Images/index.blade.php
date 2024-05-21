@extends('adminlte::page')

@section('title', 'image')

@section('content_header')
    <h1>IMAGNES TODAS</h1>
  {{--   <a href="{{ route('admin.image.create') }}" class="btn btn-primary">Agregar imagen</a> --}}
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')

@include('admin.images.partials.tabla_imagenes') 

   <div class="card">
    <table id="usersTable" class="table table-striped">
        <thead>
          <tr>
            <th>Usuaio</th>
            <th>Imagen</th>
            <th>Objeto</th>
            <th>ID</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($imagenes as $imagen)
            <tr>
              <td> creado{{-- {{ $imagen->createdBy->name }} --}}</td>
              <td><img src="{{ $imagen->url }}" alt="{{ $imagen->imageable_type }} {{ $imagen->imageable_id }}" width="100"></td>
              <td>{{ $imagen->imageable_type }}</td>
              <td>{{ $imagen->imageable_id }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
   </div>
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
