@extends('adminlte::page')

@section('title', 'CommentsAll')

@section('content_header')

    @can('admin.categories.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.categories.create')}}">crear comment</a>
    @endcan
    
    <h1>Todos los comentarios realizados </h1>
@stop
@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Comentario</th>
                    <th>Comentado en</th>
                    <th>Comentado por</th>
                      <th>Created At</th>
                    <th>Updated At</th>
                    {{-- <th>Acciones</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($Comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->mensaje }}</td>
                    <td>{{ $comment->commentable->title }}</td>
                    <td>{{ $comment->user->name }}</td>
                      <td>{{ $comment->created_at }}</td>
                    <td>{{ $comment->updated_at }}</td>
                {{--     <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.comments.edit', $comment) }}">Editar</a>
                        <form method="POST" class="d-inline" action="{{ route('admin.comments.destroy', $comment) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
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