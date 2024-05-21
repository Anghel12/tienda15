@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR </h1>
@stop

@section('content')
<div class="container text-center">


    <h3>EDITAR LA SUB CATEGORIA {{$sub_category->title}} </h3>
    <p>Categoria relacionada a esta SUB_CATEGORIA</p>

    <div class="card">
        <div class="card-body">

    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>CREADOR</th>
                <th>Categoria relacionada</th>
                <th>Titulo</th>
                <th>extracto</th>
                <th>Hora de creación</th>
                <th colspan=""></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td> {{$sub_category->id}} </td>
                <td> {{$sub_category->user->name}} </td>
                <td> {{$sub_category->category->name}} </td>

                {!! Form::model($sub_category, ['route' => ['admin.sub_categories.update', $sub_category], 'method' => 'PUT' ]) !!}

                {!! Form::hidden('user_id', auth()->user()->id) !!}

                @include('admin.sub_categories.partials.form')

             

                <td>{{$sub_category->created_at->diffForHumans() }} </td>

              

                <td width="10px" >
                    
              
                    {!! Form::submit('EDITAR', ['class' => 'btn btn-primary']) !!}
        
               
                   
                </td>

               

            </tr>
      

           
        </tbody>
    </table>

    <div class="form-group">
        {!! Form::label('slug', 'URL QUE SE VERA EN LA VISTA') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => $sub_category->slug]) !!}
    
        @error('slug')
        <span class="text-danger"> {{$message}} </span>
        @enderror  
        </div> 

        {!! Form::close() !!}
</div>
</div>

 

</div>


@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

   <script>
     $(document).ready( function() {
        $("#title").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
   </script>
@stop