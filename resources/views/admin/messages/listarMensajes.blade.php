@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>Lista de Mensaje </h1>
        {{-- alerta --}}
        @if (session('info'))
        <div class="alert alert-success">
             <strong> {{session('info')}} </strong>
        </div>
        @endif

@stop

@section('content')
    <h1>Mensajes enviados</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Destinatario</th>
                <th>Asunto</th>
                <th>Fecha de envío</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $mensaje)
                <tr>
                    <td>{{ $mensaje->destinatario }}</td>
                    <td>{{ $mensaje->asunto }}</td>
                    <td>{{ $mensaje->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop