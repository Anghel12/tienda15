@extends('adminlte::page')

@section('title', 'Detalle del ban')

@section('content_header')
    <h1>Detalle del ban</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $ban->type }} de {{ $ban->ip_address ?? $ban->country_code }}</h4>
            <p class="card-text"><strong>Usuario baneado:</strong> {{ $ban->user ? $ban->user->name : 'Ninguno' }}</p>
            <p class="card-text"><strong>Fecha de creación:</strong> {{ $ban->created_at->format('d/m/Y H:i:s') }}</p>
            <p class="card-text"><strong>Fecha de expiración:</strong> {{ $ban->expires_at ? $ban->expires_at->format('d/m/Y H:i:s') : 'Nunca' }}</p>
            <p class="card-text"><strong>Baneado por:</strong> {{ $ban->bannedBy ? $ban->bannedBy->name : 'Desconocido' }}</p>
            <p class="card-text"><strong>Motivo:</strong> {{ $ban->reason ?? 'Sin motivo' }}</p>

            @if ($ban->is_active)
            <form action="{{ route('admin.bans.desbaneo', $ban->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('PUT')
                <input type="hidden" name="unban" value="1">
                <button type="submit" class="btn btn-sm btn-success">Desbanear</button>
            </form>
        @else
            <form action="{{ route('admin.bans.desbaneo', $ban->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('PUT')
                <input type="hidden" name="is_active" value="1">
                <button type="submit" class="btn btn-sm btn-secondary">Volver a banear</button>
            </form>
        @endif
        
        
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
