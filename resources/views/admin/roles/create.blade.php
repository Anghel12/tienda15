@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <p class="h5"> Nombre:</p>

        <h5> Listado de Roles</h5>
        {!! Form::open(['route' => 'admin.roles.store'] ) !!}
        
        @include('admin.roles.partials.form')

        {!! Form::submit('Crear rol', ['class' => 'btn btn-primary' ]) !!}

        {!! Form::close() !!}
    </div>
   </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop