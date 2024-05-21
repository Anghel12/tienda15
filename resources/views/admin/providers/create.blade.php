@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR CATEGORIA</h1>
@stop

@section('content')
    
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.providers.store', 'autocomplete' => 'off', 'files' => true]) !!}

         {!! Form::hidden('user_id', auth()->user()->id) !!} 
        
         <table class="table table-striped">
            <tbody>
          
                
                <tr>
                
                    <td> 
                       <div class="form-group">
                        {!! Form::label('title', 'Nombre') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del PROVEEDOR']) !!}
                    
                        @error('title')
                        <span class="text-danger"> {{$message}} </span>
                       @enderror  
                    
                    </div>
                </td>
                    <td>
                       <div class="form-group">
                        {!! Form::label('extract', 'EXTRACTO opcional') !!}
                      {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'OPCIONAL']) !!}
                  
                      @error('extract')
                      <span class="text-danger"> {{$message}} </span>
                     @enderror  
                  
                  </div>
                </td>
          
                    <td>  
                      <div class="form-group">
                        {!! Form::label('phone', 'telefono de el proveedor') !!}
                      {!! Form::number('phone', null, ['class' => 'form-control']) !!}
                  
                      @error('phone')
                      <span class="text-danger"> {{$message}} </span>
                      @enderror  
                  
                  </div>
                 </td>
          
                </tr>
          
            
               
            </tbody>
          </table>
          
          <div class="form-group">
            {!! Form::label('slug', 'Slug que se vera en el url') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de EL SLUG', 'readonly']) !!}
        
            @error('slug')
                <span class="text-danger"> {{$message}} </span>
            @enderror     
        </div>

          {{--         @isset($provider->iframe)
          
                    {!! Form::label('iframe', 'VIDEO INSERTA IFRAME') !!}
                    
                    {!! Form::textarea('iframe', null, ['class' => '']) !!}
                
                    @error('body')
                    <span class="text-danger"> {{$message}} </span>
                    @enderror  
            
                
                      @else
              
          
                      <img id="picture" src="{{Storage::url($postyoutube->image->url)}}">
                      <img id="picture" src="{{$postyoutube->image->url}}">
                  @endisset 
           --}}
          
                    
          
          
          
          {{-- <div class="form-group">
              <p class="font-weight-bold">Estado</p>
          
              <label for="">
                  {!! Form::radio('status', 1, ) !!}
                  Borrador
              </label>
          
              <label for="">
                  {!! Form::radio('status', 2, true) !!}
                  Publicado
              </label>
          
          
              @error('status')
              <hr>
              <span class="text-danger"> {{$message}} </span>
              @enderror 
          </div> --}}
          

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