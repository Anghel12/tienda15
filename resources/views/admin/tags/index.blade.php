@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PRINCIPAL TAGS</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

    <div class="card-minimalista">
        <div class="card-header">
        @can('admin.tags.create') 
            <a class="btn btn-primary" href="{{route('admin.tags.create')}}">Agregar tags</a>
       @endcan 

        </div>

        <div class="card-body">
               {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
            <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Post con este tag:</th>
                    <th>Hora de creacion</th>
                    <th>Hora de actualizacion</th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tags as $tag)
              

                
                <tr>
                    <td> {{$tag->id}} </td>
                    <td> {{$tag->name}} </td>
                    <td>{{$tag->posts->count() }} </td>
                    <td>{{$tag->updated_at->diffForHumans() }} </td>
                    <td>{{$tag->created_at->diffForHumans() }} </td>

                    <td width="10px" >
                    @can('admin.tags.edit')
                            <a class="btn btn-primary btn-sm" href=" {{route('admin.tags.edit', $tag)}} ">EDITAR</a>
                    @endcan 
                        
                    </td>

                    <td width="10px" >
                @can('admin.tags.destroy') 
                        <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                            @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"> ELIMINAR</button>
                        </form>
                @endcan
                        
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


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 

    <!-- Main css -->
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