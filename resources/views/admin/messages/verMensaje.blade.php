@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>Ver Mensaje </h1>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif

@stop

@section('content')


    <div class="container text-center">
        <div class="row">
            <h1>{{ $mensaje->asunto }}</h1>
            <p>De: {{ $mensaje->remitente }}</p>
            <p>Para: {{ $mensaje->destinatario }}</p>
            <p>Fecha: {{ $mensaje->created_at }}</p>
            <hr>
            <p>{{ $mensaje->contenido }}</p>
            
    </div>
    </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop