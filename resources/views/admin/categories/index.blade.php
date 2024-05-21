@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.categories.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.categories.create')}}">Agregar Categoria</a>
    @endcan
    
    <h1>PRINCIPAL CATEGORIA</h1>
@stop
@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

    <div class="card">
      
        <div class="card-body">


               {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
            <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SubCategoria</th>
                    <th>Hora de creación</th>
                    <th>ACTUALIZACION</th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)
              

                
                <tr>
                    <td> {{$category->id}} </td>
                    <td> {{$category->name}} </td>
                    <td>

                        <p>subCategorias: {{$category->sub_categories->count()}} </p>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                             Sub categoria
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($category->sub_categories as $item)
                              
                                <li><a class="dropdown-item" href="#"> {{$item->title}} </a></li>
                                  @endforeach 
                            </ul>
                          </div>
                        </div>
                 
                       
                   
                    </td>
                    <td>{{$category->updated_at->diffForHumans() }} </td>
                    <td>{{$category->created_at->diffForHumans() }} </td>

                    <td width="10px" >
                        
                        @can('admin.categories.edit')
                          <a class="btn btn-primary btn-sm" href=" {{route('admin.categories.edit', $category)}} ">EDITAR</a>
                        @endcan
                       
                    </td>

                    <td width="10px" >

                        @can('admin.categories.destroy')
                        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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