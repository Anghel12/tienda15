@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>EDIT</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::open( ['route' => 'admin.brands.store']) !!}

         {!! Form::hidden('user_id', auth()->user()->id) !!} 
        
         <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>TITULO</th>
                    <th>EXTRACTO</th>

                </tr>
            </thead>
            <tbody>

              
                <tr>

                    <td>    <div class="form-group">
                        {!! Form::label('title', 'NOMBRE DE LA MARCA') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
                    
                        @error('title')
                        <span class="text-danger"> {{$message}} </span>
                       @enderror  
                    
                    </div>
                </td>
                    <td>    <div class="form-group">
                        {!! Form::label('title', 'NOMBRE DE LA MARCA') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
                    
                        @error('title')
                        <span class="text-danger"> {{$message}} </span>
                       @enderror  
                    
                    </div>
                 </td>
                 <td>
                    <div class="form-group">
                        {!! Form::label('slug', 'URL QUE SE MOSTRAR AL VER EL POST:') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Post', 'readonly']) !!}
                        @error('slug')
                        <span class="text-danger"> {{$message}} </span>
                      @enderror  
                      
                      </div>
                 </td>
                </tr>
          
               
            </tbody>
        </table> 

        {!! Form::submit('Actualizar Preevedores', ['class' => 'btn btn-primary']) !!}

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