@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>Mensajes </h1>
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
            <form method="POST" action="{{ route('mensajes.enviar', ['id_usuario' => $usuario->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar mensaje</button>
            </form>
            
    </div>
    </div>

    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop