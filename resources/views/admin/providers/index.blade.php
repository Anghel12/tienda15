@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Proveedores INDEX</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

    <div class="card">
        <div class="card-header">
     
       <a class="btn btn-primary" href="{{route('admin.providers.create')}}">Nuevo proveedor</a>
   
           

        </div>
        <div class="card-body">
               {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
           <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CREADOR</th>
                    <th>TITULO</th>
                    <th>EXTRACT</th>
                    <th>TELEFONO</th>
                    <th>Hora de creacion</th>
                    <th>Hora de actualizacion</th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($providers as $provider)
              

                
                <tr>
                    <td> {{$provider->id}} </td>
                    <td> {{$provider->user->name}} </td>
                    <td> {{$provider->title}} </td>
                    <td> {{$provider->extract}} </td>
                    <td> {{$provider->phone}} </td>
                    <td>{{$provider->updated_at->diffForHumans() }} </td>
                    <td>{{$provider->created_at->diffForHumans() }} </td>

                    <td width="10px" >
                 
                            <a class="btn btn-primary btn-sm" href=" {{route('admin.providers.edit', $provider)}} ">EDITAR</a>
      
                        
                    </td>

                    <td width="10px" >
 
                        <form action="{{route('admin.providers.destroy', $provider)}}" method="POST">
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