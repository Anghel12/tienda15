@extends('adminlte::page')

@section('title', 'Editar baneo')

@section('content_header')
    <h1>Editar baneo</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.bans.update', $ban->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="type">Tipo de baneo</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $ban->type }}">
                </div>
                
                <div class="form-group">
                    <label for="reason">Motivo del baneo</label>
                    <textarea class="form-control" id="reason" name="reason">{{ $ban->reason }}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="expires_at">Fecha de expiración</label>
                    <input type="datetime-local" class="form-control" id="expires_at" name="expires_at" value="{{ $ban->expires_at ? $ban->expires_at->format('Y-m-d\TH:i:s') : '' }}">
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" {{ $ban->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Activo</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
            
        </div>
    </div>
    @stop


    @section('css')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    @stop
    
    @section('js')
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#usersTable').DataTable();
            });
        </script>
    @stop