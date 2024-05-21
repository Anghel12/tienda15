@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


<a class="btn btn-success float-right" href="{{route('admin.brands.create')}}">Registar nueva marca</a>
    <h1>MARCAS INDEX</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

    <div class="card-minimalista">
        <div class="card-header">
        </div>
        <div class="card-body">
               {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
            <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITULO</th>
                    <th>Post con esta marca:</th>
                    <th>EXTRACTO</th>
                    <th>CREADOR</th>
                    <th>CREACION</th>
                    <th>ACtualizacion</th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($brands as $brand)
                <tr>
                    
                    <td> {{$brand->id}} </td>
                    <td> {{$brand->title}} </td>
                    <td> {{$brand->posts->count()}} </td>
                    <td> {{$brand->extract}} </td>
                    <td> {{$brand->user->name}} </td>
                    <td> {{$brand->created_at->diffForHumans()}} </td>
                    <td>{{$brand->updated_at->diffForHumans() }} </td>

                 <td width="10px" >
                    <a class="btn btn-primary btn-sm" href=" {{route('admin.brands.edit', $brand)}} ">EDITAR</a>     
                    </td>

                    <td width="10px" >
               
                        <form action="{{route('admin.brands.destroy', $brand)}}" method="POST">
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

    <!-- table css -->
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