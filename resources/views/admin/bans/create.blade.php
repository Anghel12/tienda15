@extends('adminlte::page')

@section('title', 'Nuevo Baneo')

@section('content_header')
    <h1>Nuevo Baneo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.bans.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="user_id">Usuario</label>
                    <select class="form-control" id="user_id" name="user_id">
                        <option value="">Seleccione un usuario</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ip_address">Dirección IP</label>
                    <input type="text" class="form-control" id="ip_address" name="ip_address">
                </div>
                <div class="form-group">
                    <label for="country_code">Código de País</label>
                    <input type="text" class="form-control" id="country_code" name="country_code">
                </div>
                <div class="form-group">
                    <label for="type">Tipo</label>
                    <select class="form-control" id="type" name="type">
                        <option value="">Seleccione un tipo</option>
                        <option value="ip">IP</option>
                        <option value="user">Usuario</option>
                        <option value="country">País</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reason">Motivo</label>
                    <textarea class="form-control" id="reason" name="reason"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
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
