@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

{{--  <a class="btn btn-success btn-sm float-right" href=" {{route('admin.postyoutubes.create')}}" > Nuevo post</a>  --}}
    <h1>POST YOUTUBE</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<h1>VISTA PREVIA DE EL POST </h1>



@include('admin.postyoutubes.partials.vistaprevia')


<div class="col-sm-12">
    <h2 class="p-2">TABLA NAVBAR BOTONES</h2>
    
    <div class="card">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">CREADOR</th>
            <th scope="col">URL video</th>
            <th scope="col">TITULO</th>
        {{--     <th scope="col">url titulo</th> --}}
            <th scope="col">EXTRACT</th>
            <th scope="col">BODY</th>
            <th scope="col">ESTADO</th>
            <th scope="col">PRICO ANT.</th>
            <th scope="col">price</th>
            <th scope="col">CATEGORIA</th>

            <th scope="col">ACTUALIZACION</th>
            <th scope="col">CREACION</th>

            <th colspan=""></th>
          </tr>
        </thead>
        <tbody>   
          
            @foreach ($postyoutubes as $postyoutube)
                
            <tr>
             <tD>{{$postyoutube->user->name}}</tD>
             <tD>
                <div>
                <img  src="{{$postyoutube->image->url}}" alt="" style="height: 6rem;">
            </div>
            </tD>
             <td class="d-inline-block text-truncate" style="max-width: 50px;">{{$postyoutube->name}}</td>
{{--             <th>{{$postyoutube->slug}}</th> --}}
            <td>{{$postyoutube->extract}}</td>
            <td class="d-inline-block text-truncate" style="max-width: 50px;">{{$postyoutube->body}}</td>
            <td>{{$postyoutube->status}}</td>
            <td>{{$postyoutube->price_anterior}}</td>
            <td>{{$postyoutube->price}}</td>
            <td>{{$postyoutube->category->NAME}}</td>
            <td>{{$postyoutube->updated_at->diffForHumans() }} </td>
            <td>{{$postyoutube->created_at->diffForHumans() }} </td>
            <td width="10px" >

                <a class="btn btn-success float-right" href="{{ route('admin.postyoutubes.edit', $postyoutube) }}" > Editar </a>
         
                <form action="{{route('admin.postyoutubes.destroy', $postyoutube)}}" method="POST">
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop