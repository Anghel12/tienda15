@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crea tu Home de Ayuda </h1>
   <a href="{{ route('admin.home_helps.create') }}" class="btn btn-primary">crear ayuda</a>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')
 

<div class="card">
    <table id="usersTable" class="table table-striped">
        <thead>
          <tr>
            <th>Usuaio</th>
            <th>ID</th>
            <th>titulo</th>
            <th>cuerpo</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($home_helps as $home_help)
            <tr>
              <td> creado{{-- {{ $imagen->createdBy->name }} --}}</td>
              <td>{{ $home_help->id }}</td>
              <td>{{ $home_help->tittle }}</td>
              <td>{!!  $home_help->body !!}</td>
              <td width="10px" >
               
              <a class="btn btn-primary btn-sm" href=" {{route('admin.home_helps.edit', $home_help)}} ">EDITAR</a>
            <form action="{{route('admin.home_helps.destroy', $home_help)}}" method="POST">
                @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm"> ELIMINAR</button>
            </form>

            
        </td> 
            </tr>
          @endforeach
        </tbody>
      </table>
      
   </div>

@endsection

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


    $('#usersTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>
@stop