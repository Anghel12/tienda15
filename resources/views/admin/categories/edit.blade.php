@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR CATEGORIA</h1>
@stop

@section('content')
       @if (session('info'))
           <div class="alert alert-success">
                <strong> {{session('info')}} </strong>
           </div>
       @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'PUT' ]) !!}

        @include('admin.categories.partials.form')
        {!! Form::submit('EDITAR categoria', ['class' => 'btn btn-primary']) !!}
        
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
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
   </script>
@stop