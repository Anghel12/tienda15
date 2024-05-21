@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

    <p>CREATE</p>
  
        {{-- plugin imagen dropzonejs --}}
        <div class="col-7">
         

          {{--   <form action="{{route('admin.sliders.store')}}" class="dropzone" id="my-great-dropzone">
            </form> --}}
        </div>
        <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.sliders.store', 'autocomplete' => 'off', 'files' => true]) !!}
            
            {!! Form::hidden('user_id', auth()->user()->id) !!}
    
            @include('admin.sliders.partials.form')
    
            {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
        </div>
      </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script>
        Dropzone.options.myAwesomeDropzone = {
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
      
        dictDefaulMessage: "Arrastre una imagen al recuadro para subirlo",
        acceptedfiles: "image/*", //solo accepta imagenes 
        maxFilesize: 2, // MB permitidos 
        maxfiles: 6, //maximo de fotos permitidas
        paramName: "file", // id en este caso file
        
      
    };
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