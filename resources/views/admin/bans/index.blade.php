@extends('adminlte::page')

@section('title', 'Mensajes')

@section('content_header')
    <h1>Bans</h1>

    {{-- Alerta de éxito --}}
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Bans</h3>
            <div class="card-tools">
                 <a href="{{ route('admin.bans.create') }}" class="btn btn-primary">Crear nuevo ban</a> 
            </div>
        </div>

        <div class="card-body">
            <table id="bansTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>IP</th>
                        <th>País</th>
                        <th>Tipo</th>
                        <th>Razón</th>
                        <th>Expira en</th>
                        <th>Activo</th>
                        <th>Creado en</th>
                       <th>Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bans as $ban)
                        <tr>
                            <td>{{ $ban->id }}</td>
                            <td>  
                                <a href="{{ route('admin.users.show', $ban) }}">         
                                 <div class="shrink-0 mr-3">
                             
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $ban->user->profile_photo_url  }}" alt="#" style="border-radius: 50%; width: 50px; height: 50x;"/>
                                 </div>
                                </a> 
                                {{ $ban->user->name ?? "-" }}
                            </td>
                            <td>{{ $ban->user->name ?? '-' }}</td>
                            <td>{{ $ban->ip_address ?? '-' }}</td>
                            <td>{{ $ban->country_code ?? '-' }}</td>
                            <td>{{ $ban->type }}</td>
                            <td>{{ $ban->reason ?? '-' }}</td>
                            <td>{{ $ban->expires_at ? $ban->expires_at->diffForHumans() : '-' }}</td>
                            <td>{!! $ban->isActive() ? '<span class="badge bg-success">Activo</span>' : '<span class="badge bg-danger">Inactivo</span>' !!}</td>
                            <td>{{ $ban->created_at }}</td>
                           <td>
                                <a href="{{ route('admin.bans.show', $ban->id) }}" class="btn btn-sm btn-success">Ver</a>
                                <a href="{{ route('admin.bans.edit', $ban->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('admin.bans.destroy', $ban->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar este ban?')">Eliminar</button>
                                </form>

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
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
