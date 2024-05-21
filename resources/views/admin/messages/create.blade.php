@extends('adminlte::page')

@section('title', 'Crear Mensaje')

@section('content_header')
    <h1>Crear Mensaje</h1>
@stop

@section('content')

@include('admin.messages.crear_mensaje') 


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.messages.send') }}">
                        @csrf
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Ingresa el asunto del mensaje">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" class="form-control" id="mensaje" rows="5" placeholder="Ingresa tu mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
