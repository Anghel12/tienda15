@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear un Blog</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <p class="h5"> Nombre:</p>

        <h5> Listado de Roles</h5>
        {!! Form::open(['route' => 'admin.Blogs.store'] ) !!}
        
        @include('admin.Blogs.partials.form')

        {!! Form::submit('Crear rol', ['class' => 'btn btn-primary' ]) !!}

        {!! Form::close() !!}
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
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
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
    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });
        </script>
@stop