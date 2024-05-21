@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    @if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif
@stop

@section('content')
<p>
   
</p>
    <p>EDITAR SLIDER</p>



    {!! Form::model($slider, ['route' => ['admin.sliders.update', $slider], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}

     
    {!! Form::hidden('user_id', auth()->user()->id) !!}


    @include('admin.sliders.partials.form')

    {!! Form::submit('ACTUALIZAR SLIDER', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
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