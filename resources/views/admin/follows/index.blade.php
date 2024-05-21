@extends('adminlte::page')

@section('title', 'FOLLOWS')

@section('content_header')
    <h1>FOLLOWS</h1>
         {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif
@stop

@section('content')

@include('admin.Follows.partials.views_follows') 


<div class="card">
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Image</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Rating</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
     {{--        @foreach($favorites as $favorite)
                <tr>
                    <td>{{ $favorite->name }}</td>
                    <td><img src="{{ $favorite->image_url }}" alt="{{ $favorite->id }}" width="100"></td>
                    <td>{{ $favorite->description }}</td>
                  <td>{{ $favorite->category_id }}</td> 
                    <td>{{ $favorite->rating }}</td>
                    <td>
                        <a href="{{ route('admin.posts.index', $favorite->item_id) }}" class="btn btn-primary">Ver</a>
                        <form action="{{ route('admin.favorites.destroy', $favorite->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
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
