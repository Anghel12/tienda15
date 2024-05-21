@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR SUB CATEGORIA</h1>
@stop

@section('content')
<div class="container text-center">


    <h3>CREAR LA SUB CATEGORIA</h3>

</div>

<div class="card">
    <div class="card-body">

<table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th>CREADOR</th>
            <th>Categoria relacionada<</th>
            <th>Titulo<</th>
            <th>extracto</th>
            <th colspan=""></th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{Auth::user()->name}} </td>

            {!! Form::open(['route' => 'admin.sub_categories.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.sub_categories.partials.form')

         

          

            <td width="10px" >
                
          
                {!! Form::submit('EDITAR', ['class' => 'btn btn-primary']) !!}
    
           
               
            </td>

           

        </tr>
  

       
    </tbody>
</table>

<div class="form-group">
    {!! Form::label('slug', 'URL QUE SE VERA EN LA VISTA') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'slug']) !!}

    @error('slug')
    <span class="text-danger"> {{$message}} </span>
    @enderror  
    </div> 

    {!! Form::close() !!}
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