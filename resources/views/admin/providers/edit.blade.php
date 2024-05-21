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
        {!! Form::model($provider, ['route' => ['admin.providers.update', $provider], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}

         {!! Form::hidden('user_id', auth()->user()->id) !!} 
        
       @include('admin.providers.partials.form')  

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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

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

<script>
    ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<script>  
    document.getElementById("file").addEventListener('change', cambiarImagen);
          function cambiarImagen(event){
           var file = event.target.files[0];
           var reader = new FileReader();
           reader.onload = (event) => {
               document.getElementById("picture").setAttribute('src', event.target.result);
           };
           reader.readAsDataURL(file);
          }
       </script>
@stop