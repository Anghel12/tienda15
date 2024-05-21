@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="container">
    <div class="signup-content"> 
        {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}
        <h2 class="form-title"><a href="{{ url('/') }}">x</a>Edit Post</h2>

        @include('admin.posts.partials.form')

        {!! Form::submit('Actualizar post', ['class' => 'form-submit']) !!}

        {!! Form::close() !!}
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" rel="stylesheet">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>
    <!-- CDN de Dropzone -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>


    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

   <script>
     $(document).ready( function() {
        $("#name").stringToSlug({
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
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>  
    document.getElementById("files").addEventListener('change', cambiarImagen);
          function cambiarImagen(event){
           var file = event.target.files[0];
           var reader = new FileReader();
           reader.onload = (event) => {
               document.getElementById("picture").setAttribute('src', event.target.result);
           };
           reader.readAsDataURL(file);
          }
       </script>

<script>
    // Inicializar Dropzone
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#dropzone", {
        url: "{{ route('admin.posts.store') }}", // Ruta de la acción del formulario
        paramName: "files", // Nombre del parámetro para los archivos
        maxFilesize: 2, // Tamaño máximo de los archivos en MB
        acceptedFiles: ".jpg,.jpeg,.png,.gif", // Tipos de archivos permitidos
        maxFiles: 5, // Número máximo de archivos
        addRemoveLinks: true, // Mostrar enlaces para remover archivos
        dictDefaultMessage: "Arrastra tus archivos aquí o haz clic para seleccionarlos",
        dictRemoveFile: "Eliminar archivo",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
</script>

@stop