@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-success btn-sm float-right" href=" {{route('admin.Blogs.create')}}" > Nuevo Role</a>
    <h1>ver tu Blog</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif


    <div class="card-minimalista">
        <div class="card-body">
            
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Usuarios asignados</th>
                        <th>Hora de actualizacion</th>
                        <th>Hora de creación</th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td> {{$blog->id }} </td>
                            <td>{{$blog->title }} </td>
                            <td>{{$blog->body }} </td>
                            <td>{{$blog->updated_at->diffForHumans() }} </td>
                            <td>{{$blog->created_at->diffForHumans() }} </td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.Blogs.edit', $blog) }}"> EDITAR</a>
                 
                                <form action="{{ route('admin.Blogs.destroy', $blog) }}" method="POST">
                                    @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"> ELIMINAR</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
 <!-- table css -->
 <link rel="stylesheet" href="{{ asset('css/table.css') }}">

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