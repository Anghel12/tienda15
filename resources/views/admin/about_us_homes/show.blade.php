@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Completo Sobre Nosotros</h1>

    <a class="btn btn-success btn-sm float-right" href="{{route('admin.about_us_homes.create')}}">Agregar Sobre Nosotros</a>
    
@stop

@section('content')
 
<div class="card">
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>body</th>
                <th>accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aboutUsHomes as $aboutUsHome)
                <tr>
                    <td>{{ $aboutUsHome->id }}</td> 
                    <td>{{ $aboutUsHome->title }}</td>
                   {{--  <td><img src="{{ $aboutUsHome->image_url }}" alt="{{ $favorite->id }}" width="100"></td>
                    --}} <td>{{ $aboutUsHome->body }}</td>
                    <td>
                        <a href="{{ route('admin.about_us_homes.index', $favorite->item_id) }}" class="btn btn-primary">Ver</a>
                        <form action="{{ route('admin.about_us_homes.destroy', $favorite->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
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


    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>
@stop